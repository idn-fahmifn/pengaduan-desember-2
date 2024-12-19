<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Divisi::all();
        return view('admin.divisi.index', compact('data'));
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
            'nama_divisi' => 'required|min:3|max:30|string'
        ]);

        $data = $request->all();
        $data['slug'] = Carbon::now()->format('Ymd_His').Str::slug($request->nama_divisi).random_int(000000,999999);

        // simpan ke divisi
        Divisi::create($data);
        return back()->with('success', 'Data divisi berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Divisi $divisi)
    {
        $data = $divisi;
        return view('admin.divisi.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Divisi $divisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //validasti data
        $request->validate([
            'nama_divisi' => 'required|min:3|max:30|string'
        ]);
        
        $data = Divisi::find($request->id);

        $data->update([
            'nama_divisi' => $request->nama_divisi,
            'slug' => Carbon::now()->format('Ymd_His').Str::slug($request->nama_divisi).random_int(000000,999999)
        ]);
        return redirect()->route('divisi.index')->with('success', 'Data berhasil diubah');
        
    }

    public function destroy(Divisi $divisi)
    {
        $data = Divisi::find($divisi->id);
        $data->delete();
        return back()->with('success', 'Data berhasil Terhapus');
    }
}
