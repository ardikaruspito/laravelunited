<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

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
    	// mengambil data dari table pegawai

    	$film = DB::table('film')->get();
 
    	// mengirim data pegawai ke view index
    	return view('Film',['datafilm' => $film]);
 
    }

    public function tambah()
{
 
	// memanggil view tambah
	return view('tambah');
 
}

public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('film')->insert([
		'id_film' => $request->id_film,
		'id_kategori' => $request->id_kategori,
		'judul_film' => $request->judul_film,
		'tahun_rilis' => $request->tahun_rilis
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/film');
 

}
}

