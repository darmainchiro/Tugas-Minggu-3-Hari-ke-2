<?php

namespace App\Http\Controllers\Sanber;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('register');
    }

    public function postWelcome(Request $request){
        $first_name = $request["first_name"];
        $last_name = $request["last_name"];
        return view('welcome',['first_name' => $first_name, 'last_name' => $last_name]);
    }
}
