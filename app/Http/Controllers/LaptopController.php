<?php

namespace App\Http\Controllers;

use App\laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return laptop::all();
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $laptop = new laptop();
        $laptop->merk_laptop = $request->merk_laptop;
        $laptop->nama_laptop = $request->nama_laptop;
        $laptop->spesifikasi_laptop = $request->spesifikasi_laptop;
        $laptop->gambar_laptop = $request->gambar_laptop;
        $laptop->save();

        return "Data berhasil disimpan";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_laptop)
    {
        $merk_laptop = $request->merk_laptop;
        $nama_laptop = $request->nama_laptop;
        $spesifikasi_laptop = $request->spesifikasi_laptop;
        $gambar_laptop = $request->gambar_laptop;
        

        $laptop = laptop::find($id_laptop);
        
        $laptop->merk_laptop = $merk_laptop;
        $laptop->nama_laptop = $nama_laptop;
        $laptop->spesifikasi_laptop = $spesifikasi_laptop;
        $laptop->gambar_laptop = $gambar_laptop;
        $laptop->save();

        return "Data berhasil diubah";
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function delete($id_laptop)
    {
        
        $laptop = laptop::find($id_laptop);
        $laptop->delete();

        return "Data dihapus";
        //
    }
}
