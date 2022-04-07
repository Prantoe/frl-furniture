<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImages;
use Illuminate\Http\Request;
// use Validator;
// use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
        $products = Product::with('product_images')->latest()->paginate(10);

 $userName = auth()->user()->name;
        return view('Products.index',compact('products','userName'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = DB::table('categories')->get();
    //    dd($categories);
        return view('Products.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'category_id' => 'required|string|max:191',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);


        if($validator->fails()){
            return redirect('products')->with('error', 'Oops, Terjadi masalah saat menambahkan data!');
        }
        $data = Product::create($request->all());
       
        $productImages = [];
        $images = $request->file('photos');
        foreach($images as $image){
            $fileName = preg_replace('/[^A-Za-z0-9\-]/', '', pathinfo($image->getClientOriginalName())['filename']) . time()
            . '.' .$image->getClientOriginalExtension();
            $image->move(public_path('upload/images/products'), $fileName);
            $imageUrl = url('upload/images/products') . '/' . $fileName;

            $val = [
            'product_id' => $data->id,
            'image' => $imageUrl
            ];

            array_push($productImages, $val);
        }

        ProductImages::insert($productImages);

        return redirect('products')->with('success', 'Product created successfully.');
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('Products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
    $categories = DB::table('categories')->get();
        return view('Products.edit', ['categories' => $categories], compact('product'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
    $validator = Validator::make($request->all(), [
    'category_id' => 'required|string|max:191',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            
        ]);
        if($validator->fails()){
            return redirect('products')->with('error', 'Oops, Terjadi masalah saat menambahkan data!');
        }
        $data = $product->update($request->all());
      

        $productImages = [];
        $images = $request->file('photos');
        if(is_array($images) || is_object($images)){
             foreach($images as $image){
             $fileName = preg_replace('/[^A-Za-z0-9\-]/', '', pathinfo($image->getClientOriginalName())['filename']) .
             time()
             . '.' .$image->getClientOriginalExtension();
             $image->move(public_path('upload/images/products'), $fileName);
             $imageUrl = url('upload/images/products') . '/' . $fileName;

             $val = [
             'product_id' => $product->id,
             'image' => $imageUrl
             ];

             array_push($productImages, $val);
             }
        }
    //    dd($productImages);

        ProductImages::insert($productImages);

        return redirect('products')->with('success', 'Product updated successfully');
    }
    
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('products')
            ->with('success', 'Product deleted successfully');
    }
}
