<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pengaduan::where('id_user', Auth::user()->id);
        return view('user.pengaduan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasti data
        $request->validate([
            'judul' => 'required|min:3|max:30|string',
            'dokumentasi' => 'required|max:5048|mimes:jpg, jpeg, png',
            'keterangan' => 'required',
        ]);

        $input = $request->all();

        // tanggal dibuat
        Carbon::setLocale('id');
        $tanggal_indo = Carbon::now()->isoFormat('dddd, D MMMM YYYY');

        // dokumentasi
        if($request->hasFile('dokumentasi'))
        {
            $gambar = $request->file('dokumentasi');
            $path = 'public/images/pengaduan';
            $nama = 'pengaduan-'.Carbon::now()->format('Ymd_His').random_int(0000, 9999).'.'.$gambar->getClientOriginalExtension();
            $gambar->storeAs($path, $nama);

            // value database
            $input['dokumentasi'] = $nama;
        }

        $input['slug'] = Carbon::now()->format('Ymd_His').Str::slug($request->judul).random_int(000000,999999);
        $input['tanggal_pengaduan'] = Carbon::now()->format('Y-m-d');
        // simpan ke model

        Pengaduan::create($input);


        return back()->with('success', 'Data divisi berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengaduan $pengaduan)
    {
        //
    }
}
