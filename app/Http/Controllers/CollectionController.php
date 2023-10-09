<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Collection;
use App\Http\Controllers\Sesion;

class CollectionController extends Controller
{
    //
    protected $table = 'koleksi';
    public $timestamps = false;

    public function index()
    {
        $koleksi = Collection::all();
        return view('koleksi.daftarKoleksi', compact('koleksi'));
    }
    public function show($id)
    {
        $koleksi = Collection::findOrFail($id);
        return view('koleksi.infoKoleksi', compact('koleksi'));
    }

    public function create()
    {
        return view('koleksi.registrasi');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namaKoleksi' => 'required|string|max:255',
            'jenisKoleksi' => 'required|string|max:255',
            'jumlahKoleksi' => 'required|integer'
        ]);
        Collection::create([
            'namaKoleksi' => $request->namaKoleksi,
            'jenisKoleksi' => $request->jenisKoleksi,
            'jumlahKoleksi' => $request->jumlahKoleksi,
        ]);
        Session::flash('success', 'Koleksi berhasil ditambahkan!');
        return redirect()->route('koleksi.registrasi');

    }
}
/*
NAMA: MUHAMAD HUDANSAH
NIM: 6706223049
KELAS: 46-03
*/