<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kompetensi_keahlian;
use App\Bidang_studi;
use Session;

class KompetensikeahlianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kompetensikeahlian = Kompetensi_keahlian::all();
        return view('backend.kompetensikeahlian.index', compact('kompetensikeahlian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bidangstudi = Bidang_studi::all();
        $kompetensikeahlian = Kompetensi_keahlian::all();
        return view('backend.kompetensikeahlian.create', compact('kompetensikeahlian', 'bidangstudi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kompetensikeahlian = new Kompetensi_keahlian;
        $kompetensikeahlian->kompetensi_kode = $request->kompetensi_kode;
        $kompetensikeahlian->bidang_id = $request->bidang_id;
        $kompetensikeahlian->kompetensi_nama = $request->kompetensi_nama;
        $kompetensikeahlian->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Menyimpan <b>$kompetensikeahlian->kompetensi_nama</b>"
        ]);
        return redirect()->route('kompetensikeahlian.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kompetensikeahlian = Kompetensi_keahlian::findOrFail($id);
        return view('backend.kompetensikeahlian.edit', compact('kompetensikeahlian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kompetensikeahlian = Kompetensi_keahlian::findOrFail($id);
        $kompetensikeahlian->kompetensi_id = $request->kompetensi_id;
        $kompetensikeahlian->bidang_id = $request->bidang_id;
        $kompetensikeahlian->kompetensi_nama = $request->kompetensi_nama;
        $kompetensikeahlian->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Menyimpan <b>$kompetensikeahlian->kompetensi_nama</b>"
        ]);
        return redirect()->route('kompetensikeahlian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kompetensikeahlian = Kompetensi_keahlian::findOrFail($id)->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data Berhasil dihapus"
        ]);
        return redirect()->route('kompetensikeahlian.index');
    }
}
