<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Respon;
use Illuminate\Http\Request;

class ResponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pengaduan::all();
        return view('admin.respon.index', compact('data'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Pengaduan::find($id);
        $respon = Respon::where('id_pengaduan', $id)->get()->all();
        return view('admin.respon.detail', compact('data', 'respon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Respon $respon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Respon $respon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Respon $respon)
    {
        //
    }
}
