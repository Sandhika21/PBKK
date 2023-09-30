<?php
namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class FormController extends Controller {
    public function view() {
        return view('form');
    }

    public function store(Request $request){
        $request->validate([
            'Name' => 'required|alpha:ascii',
            'IPS' => 'required|numeric|between:2.50,99.99',
            'Telephone' => 'required|string',
            'Email' => 'required|email',
            'Image' => 'required|mimes:jpg, jpeg, png|max:2048'
        ]);
        $request->pict->storeAs('public/images', $request->pict->getClientOriginalName());

        $results = [
            'Name'=>$request->Nama,
            'IPS'=>$request->IPS,
            'Telephone'=>$request->Telephone,
            'Email'=>$request->Email,
            'Image'=>$request->pict->getClientOriginalName(),
        ];

        return redirect('/preview')->with(['results'=>$results, 'status'=>'Submit Berhasil']);
    }

    public function preview(){
        $results = session()->get('results');
        return view('preview', ['results' => $results]);
    }
}
