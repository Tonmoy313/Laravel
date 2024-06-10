<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{
    public function index(){
        //withoutMiddleware
        // if(Auth::check())
        // {
        //     return view('backend.dashboard');
        // }else return to_route('loginPg');

        return view('backend.dashboard');
    }
    public function anotherPage(){
        //as For all the pages it needed to be checked That the User is login or not?
        //for That we need Middleware
        // if(Auth::check())
        // {
        //     return view('backend.posts');
        // }else return to_route('loginPg');

        return view('backend.posts');
    }
}
