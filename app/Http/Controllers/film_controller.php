<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use DB;
use App\Quotation;

class film_controller extends Controller	
{
    public function index()
    {
        $datafilm = Film::all();
        return view('Film', compact('datafilm'));



    }


    public function search(Request $request)
    {
        $query = $request->get('q');
        $datafilm = Film::where('judul_film', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('Film', compact('datafilm', 'query'));
    }

    public function film()
    {
    	// mengambil data dari table 

    	$film = DB::table('film')->get();
 
    	// mengirim data ke view index
    	return view('Film',['datafilm' => $film]);
 
    }

    public function tambah()
{
 
	// memanggil view tambah
	return view('tambah');
 
}

public function store(Request $request)
{
	// insert data ke table 
	DB::table('film')->insert([
		'id_film' => $request->id_film,
		'id_kategori' => $request->id_kategori,
		'judul_film' => $request->judul_film,
		'tahun_rilis' => $request->tahun_rilis
	]);
	// alihkan halaman ke halaman 
	return redirect('/film');
 

}

// method untuk hapus data
public function hapus($id)
{

	DB::table('film')->where('id_film',$id)->delete();
		

	return redirect('/film');
}

// method untuk edit data film
public function edit($id)
{
	// mengambil data film berdasarkan id yang dipilih
	$film = DB::table('film')->where('id_film',$id)->get();
	// passing data film yang didapat ke view edit.blade.php
	return view('edit',['film' => $film]);

}

// update data 
public function update(Request $request)
{
	// update data 
	DB::table('film')->where('id_film',$request->id)->update([
		'id_film' => $request->id_film,
		'id_kategori' => $request->id_kategori,
		'judul_film' => $request->judul_film,
		'tahun_rilis' => $request->tahun_rilis
	]);
	// alihkan halaman ke halaman film
	return redirect('/film');
}
}

