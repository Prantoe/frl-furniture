<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceImages;
// use Validator;
use Illuminate\Support\Facades\Validator;
// use DB;
use Illuminate\Support\Facades\DB;
class ServiceController extends Controller
{
    public function index()
      {
    $services = Service::with('service_images')->latest()->paginate(5);
    $userName = auth()->user()->name;

    return view('Services.index',compact('services','userName'))
    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
    return view('Services.create');
    }

     public function store(Request $request)
     {

     $validator = Validator::make($request->all(), [
     'title' => 'required',
     'description' => 'required',
     ]);


     if($validator->fails()){
     return redirect('services')->with('error', 'Oops, Terjadi masalah saat menambahkan data!');
     }
     $data = Service::create($request->all());

     $serviceImages = [];
     $images = $request->file('photos');
     foreach($images as $image){
     $fileName = preg_replace('/[^A-Za-z0-9\-]/', '', pathinfo($image->getClientOriginalName())['filename']) . time()
     . '.' .$image->getClientOriginalExtension();
     $image->move(public_path('upload/images/services'), $fileName);
     $imageUrl = url('upload/images/services') . '/' . $fileName;

     $val = [
     'service_id' => $data->id,
     'image' => $imageUrl
     ];

     array_push($serviceImages, $val);
     }

     ServiceImages::insert($serviceImages);

     return redirect('services')->with('success', 'Make Over created successfully.');
     }

     public function edit(Service $service)
     {
     $categories = DB::table('categories')->get();
     return view('Services.edit', compact('service'));
     }

     public function update(Request $request, Service $service)
     {
     $validator = Validator::make($request->all(), [
    
     'title' => 'required',
     'description' => 'required',
  

     ]);
     if($validator->fails()){
     return redirect('services')->with('error', 'Oops, Terjadi masalah saat menambahkan data!');
     }
     $data = $service->update($request->all());


     $serviceImages = [];
     $images = $request->file('photos');
     if(is_array($images) || is_object($images)){
     foreach($images as $image){
     $fileName = preg_replace('/[^A-Za-z0-9\-]/', '', pathinfo($image->getClientOriginalName())['filename']) .
     time()
     . '.' .$image->getClientOriginalExtension();
     $image->move(public_path('upload/images/services'), $fileName);
     $imageUrl = url('upload/images/services') . '/' . $fileName;

     $val = [
     'service_id' => $service->id,
     'image' => $imageUrl
     ];
    

     array_push($serviceImages, $val);
     }
     }
     // dd($images)

     ServiceImages::insert($serviceImages);

     return redirect('services')->with('success', 'Make Over updated successfully');
     }

     public function destroy(Service $service)
     {
     $service->delete();

     return redirect('services')
     ->with('success', 'Make Over deleted successfully');
     }
}
