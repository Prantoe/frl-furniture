<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\ProductImages;
use App\Models\Service;
use App\Models\Category;
use App\Models\Construction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index(Request $request)
      {
      $products = Product::with('product_images')->oldest()->paginate(8);
      $services = Service::with('service_images')->oldest()->paginate(2);
      $makeover = Service::with('service_images')->first();
      $construction = Construction::with('construction_images')->oldest()->paginate(8);
      $categories = Category::latest()->get();
      $categoriesName = DB::table('categories')->get();

      return view('Home.index',compact('products','services','makeover','construction','categories','categoriesName'))
          ->with('i', (request()->input('page', 1) - 1) * 10);
      }

      public function productsList(Request $request)
      {
      
      $categoryId = $request->id;
      if($categoryId){
            // @dd($categoryId);
            $products = Product::where('category_id',$categoryId)->with('product_images')->oldest()->paginate();
      }else{
            $products = Product::with('product_images')->latest()->paginate();
      }
      $categories = Category::latest()->get();


      return view('Home.products',compact('products','categories'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
      }
      

      public function makeOverList()
      {
      $services = Service::with('service_images')->latest()->paginate();

      return view('Home.makeover',compact('services'))
    ->with('i', (request()->input('page', 1) - 1) * 5);
      }

      public function constructionList()
      {
      $constructions = Construction::with('construction_images')->latest()->paginate();

      return view('Home.construction',compact('constructions'))
      ->with('i', (request()->input('page', 1) - 1) * 5);
      }

    public function about()
    {

    return view('Home.about');
    }
    

   
}