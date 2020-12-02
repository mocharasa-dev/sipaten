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
            $data['form'] = [
                'file_ktp'  => $request->input('file_ktp'),
                'file_kk'   => $request->input('file_kk'),
                'nik'       => $request->input('nik'),
                'no_kk'     => $request->input('no_kk'),
                'nama'      => $request->input('nama'),
            ];
            $data['anak'] = [
                'nama_' => $request->input('nama_'),
                'nik_' => $request->input('nik_'),
                'alamat_' => $request->input('alamat_'),
            ];
            dd($data);
        }catch(\Exception $e){
            return back();
        }
    }

    public function formValidate(){
        return view('frontend.layanan.form-validate');
    }

    public function formWizard(){
        return view('frontend.layanan.form-wizard');
    }

    public function formWizardSubmit(Request $request){
        try{
            $data['form'] = [
                'file_ktp'  => $request->input('file_ktp'),
                'file_sp'   => $request->input('file_sp_rtrw'),
                'nik'       => $request->input('nik'),
                'no_kk'     => $request->input('no_kk'),
                'nama'      => $request->input('nama'),
            ];
            $data['anak'] = [
                'nama_' => $request->input('nama_'),
                'nik_' => $request->input('nik_'),
                'alamat_' => $request->input('alamat_'),
            ];
            dd($data);
        }catch(\Exception $e){
            return back();
        }
    }

    public function page(){
        return view('frontend.page');
    }
}
