<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.beranda');
    }

    public function login(){
        return view('frontend.login');
    }

    public function register(){
        return view('frontend.register');
    }

    public function notFound(){
        return view('frontend.404');
    }

    public function kritsar(){
        return view('frontend.kritsar');
    }

    public function formContoh(){
        return view('frontend.layanan.form');
    }

    public function formSubmit(Request $request){
        try{

        }catch(\Exception $e){
            return back();
        }
    }

    public function formValidate(){
        return view('frontend.layanan.form-validate');
    }
}
