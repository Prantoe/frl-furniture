<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\ProductImages;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $products = Product::with('product_images')->latest()->paginate(3);
          $services = Service::with('service_images')->latest()->paginate(2);
           $makeover = Service::with('service_images')->first();
        // $services = 'ini serce';
        // @dd($makeover);
          return view('Home.index',compact('products','services','makeover'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function productsList()
    {
         $products = Product::with('product_images')->latest()->paginate();

          return view('Home.products',compact('products'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function makeOverList()
    {
    $services = Service::with('service_images')->latest()->paginate();

    return view('Home.makeover',compact('services'))
    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function about()
    {

    return view('Home.about');
    }
}