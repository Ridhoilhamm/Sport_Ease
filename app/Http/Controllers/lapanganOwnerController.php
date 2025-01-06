<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class lapanganOwnerController extends Controller
{
    public function index(){
        $lapangan= Lapangan::get();

        return view('owner.lapangan', compact('lapangan'));
    }

    public function showlapangan($id){

        $lapangan =Lapangan::find($id);
        return view('owner.detail-lapangan', compact('lapangan'));
    }
        
    }

    
    
        
    

