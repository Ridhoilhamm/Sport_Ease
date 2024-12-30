<?php

namespace App\Http\Controllers;

use App\Models\image_fasilitas;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(){
        $image = image_fasilitas::get();
        return view('user.detail-lapangan',compact('image'));
    }
}
