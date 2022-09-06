<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    // if(auth()->user()->role == 'buyer'){
    //     rotected $redirectTo = 'buyer/dashboard';
    // }

    public function redirectTo(){

        $role = Auth::user()->role;
        if($role == 'buyer'){
            return redirect('buyer/dashboard');
        }

        if($role == 'seller'){
            return redirect('seller/dashboard');
        }

        if($role == 'admin'){
            return redirect('admin/dashboard');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function  getUser(Request $request)
    // {
    //     // $role = Auth::user();
    //     // var_dump($role);
    //     // if($role === 'admin'){
    //     //     return view('layouts.admin.dashboardadmin');
    //     // }
    //     // elseif($role === 'seller'){
    //     //     return view('layouts.seller.dashboardseller');
    //     // }
    //     // elseif($role === 'buyer'){
    //     //     return view('layouts.buyer.dashboardbuyer');
    //     // }

    //     // $input = $request->all();

    // }



    public function login(Request $request){
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt(array('email' =>$input['email'], 'password' => $input['password']))){
            if(auth()->user()->role == 'buyer'){
                return redirect()->route('buyer.dashboard');
            }
            if(auth()->user()->role == 'seller'){
                return redirect()->route('seller.dashboard');
            }
            if(auth()->user()->role == 'admin'){
                return redirect()->route('admin.dashboard');
            }
        }else{
            return redirect()->route('login');
        }
    }
}
