<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


class Duabelasrpl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $duabelasrpl = array(
            'siswarpl' => DB::select(DB::raw("select * from data_siswa where kelas like 'XII-RPL 1'")),
            'title' => '12-RPL'
        );
        return view('12RPL/12-rpl', $duabelasrpl);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("12RPL/add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nisn = $request->post('NISN');
        $namasiswa = $request->post('NAMA_SISWA');
        $L_p = $request->post('L_P');
        $kelas = $request->post('Kelas');

        DB::insert("insert into data_siswa(
            NISN,
            NAMA_SISWA,
            L_P,
            Kelas) values (?,?,?,?)", [
            $nisn,
            $namasiswa,
            $L_p,
            $kelas
        ]);

        // echo("hehe");

        return redirect()->route('Duabelasrpl.index')->with('success', 'Data siswa sukses ditambahkan');
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
        $duabelasrpl = array(
            'siswarpl' => DB::select(DB::raw('select * from data_siswa where NISN=?', [$id])),
            'title' => '12-RPL'
        );
        return view('12RPL/edit', ['Duabelasrpl' => $duabelasrpl]);
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
        $nama = $request->post('NAMA_SISWA');
        $jk = $request->post('L_P');
        $kelas = $request->post('Kelas');
        DB::update("update data_siswa set NAMA_SISWA=?, L_P=?, Kelas=? where NISN=?", [
            $nama,
            $jk,
            $kelas,
            $id
        ]);

        return redirect()->route('Duabelasrpl.index')->with('success', 'Produk has created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = DB::delete('delete data_siswa where NISN = ?', [$id]);
        return redirect()->route('Duabelasrpl.index')->with('success', 'Data sukses');
    }
}
