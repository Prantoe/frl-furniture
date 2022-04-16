<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Construction;
use App\Models\ConstructionImages;
// use Validator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
// use DB;

class ConstructionController extends Controller
{
    public function index()
    {
    $constructions = Construction::with('construction_images')->latest()->paginate(5);
    // $userName = auth()->user()->name;

    return view('Construction.index',compact('constructions'))
    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
    return view('Construction.create');
    }

    public function store(Request $request)
    {

    $validator = Validator::make($request->all(), [
    'title' => 'required',
    'description' => 'required',
    ]);


    if($validator->fails()){
    return redirect('constructions')->with('error', 'Oops, Terjadi masalah saat menambahkan data!');
    }
    $data = Construction::create($request->all());

    $constructionImages = [];
    $images = $request->file('photos');
    foreach($images as $image){
    $fileName = preg_replace('/[^A-Za-z0-9\-]/', '', pathinfo($image->getClientOriginalName())['filename']) . time()
    . '.' .$image->getClientOriginalExtension();
    $image->move(public_path('upload/images/constructions'), $fileName);
    $imageUrl = url('upload/images/constructions') . '/' . $fileName;

    $val = [
    'construction_id' => $data->id,
    'image' => $imageUrl
    ];

    array_push($constructionImages, $val);
    }

    ConstructionImages::insert($constructionImages);

    return redirect('constructions')->with('success', 'Construction created successfully.');
    }

    // edit

    public function edit(Construction $construction)
    {
    $categories = DB::table('categories')->get();
    return view('Construction.edit', compact('construction'));
    }

    public function update(Request $request, Construction $construction)
    {
    $validator = Validator::make($request->all(), [

    'title' => 'required',
    'description' => 'required',


    ]);
    if($validator->fails()){
    return redirect('constructions')->with('error', 'Oops, Terjadi masalah saat menambahkan data!');
    }
    $data = $construction->update($request->all());


    $constructionImages = [];
    $images = $request->file('photos');
    if(is_array($images) || is_object($images)){
    foreach($images as $image){
    $fileName = preg_replace('/[^A-Za-z0-9\-]/', '', pathinfo($image->getClientOriginalName())['filename']) .
    time()
    . '.' .$image->getClientOriginalExtension();
    $image->move(public_path('upload/images/constructions'), $fileName);
    $imageUrl = url('upload/images/constructions') . '/' . $fileName;

    $val = [
    'construction_id' => $construction->id,
    'image' => $imageUrl
    ];


    array_push($constructionImages, $val);
    }
    }
    // dd($images)

    ConstructionImages::insert($constructionImages);

    return redirect('constructions')->with('success', 'Constuction Product updated successfully');
    }
    // delete

    public function destroy(Construction $construction)
    {
    $construction->delete();

    return redirect('constructions')
    ->with('success', 'Constuction Product deleted successfully');
    }

    
}
