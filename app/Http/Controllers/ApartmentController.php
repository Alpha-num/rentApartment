<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apartment;

class ApartmentController extends Controller
{
    public function index(){
        return view('apartments.index');
    }

    public function show($id){
        $apartment = Apartment::findorFail($id);
        return view('apartments.show', ['apartment' => $apartment]);
    }

    public function create(){
        return view('apartments.create');
    }
    public function store(Request $request){
        //dd($request->all());
        $imagePaths = [];
        // echo $request->hasFile('image1');
        $file = $request->file('image2');
        echo $file->getClientOriginalName();
        foreach(['displayImage', 'image1', 'image2'] as $imageName){
            if($request->hasFile($imageName)){
                error_log('file found');
                $image = $request->file($imageName);
                $imagePath = $image->store('public/images/');
                $imagePaths[] = $imagePath;
                // error_log($imagePaths[0]);
            }
        }
    }
    
}
