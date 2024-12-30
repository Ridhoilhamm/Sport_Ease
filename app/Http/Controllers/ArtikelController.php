<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(){
        $artikel = artikel::get();
        
        return view('user.artikel', compact('artikel'));
    }

    public function show($id)
{
     // Ambil artikel berdasarkan ID
     $artikel = Artikel::find($id);

     // Ambil artikel lainnya (seluruh artikel selain artikel yang ditampilkan)
     // Bisa disaring berdasarkan kategori atau criteria lain
     $relatedArticles = Artikel::where('id', '!=', $id)->get(); // Mengambil artikel selain yang ditampilkan
 
     return view('user.detail-artikel', compact('artikel', 'relatedArticles'));
    
}
    

}
