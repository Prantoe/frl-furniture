<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
// use DB;
use Illuminate\Support\Facades\DB;
class CustomAuthController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('products')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function dashboard()
    {
        $dataProducts = DB::table('products')->count();
        $dataServices = DB::table('services')->count();
        $dataCategories = DB::table('categories')->count();
        $users = DB::table('users')->count();
         $userName = auth()->user()->name;

        if(Auth::check()){
            return view('Dashboard.index',compact('dataProducts','dataServices','dataCategories','users','userName'));
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
