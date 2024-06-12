<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    function index(){
        $siswa = DB::table('t_siswa')->get();
        return view('belajar', compact('siswa'));
    }
    // function siswa2(){
    //     $siswa = DB::table('t_siswa')->where('jk','=','P')->get();
    //     return view('belajar2', compact('siswa'));
    // }
    // function siswa3(){
    //     $siswa = DB::table('t_siswa')->where('jk','=','L')->get();
    //     return view('belajar3', compact('siswa'));
    // }

    // function siswa4(){
    //     $siswa = DB::table('t_siswa')->orderBy('nama_lengkap','DESC')->get();
    //     return view('belajar4', compact('siswa'));
    // }


    function create(){
        return view('siswa.form');
    }

    function store(Request $request)
    {

        $request->validate([
            'nis' => 'required|numeric',
            'nama_lengkap' => 'required|string',
            'jk' => 'required',
            'golongan_darah' => 'required',

        ]);
        
        $input = $request->all();
        unset($input['_token']);
        $status = DB::table('t_siswa')->insert($input);
        if ($status){
            return redirect('/siswa')->with('success', 'Data berhasil ditambahkan');    
        } else {
            return redirect('/siswa/create')->with('error', 'Data gagal ditambahkan');
        }
    }

    function edit(Request $request, $id)
    {
        $siswa = DB::table('t_siswa')->find($id);
        return view('siswa.form', compact('siswa'));
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'nis' => 'required|numeric',
            'nama_lengkap' => 'required|string',
            'jk' => 'required',
            'golongan_darah' => 'required',
        ]);

        $input = $request->all();
        unset($input['_token']);
        unset($input['_method']);
        $status = DB::table('t_siswa')->where('id', $id)->update($input);
        if($status){
            return redirect('/siswa')->with('success', 'Data berhasil diubah');
        }else{
            return redirect('/siswa/edit/'. $id)->with('error', 'Data gagal diubah');
        }
    }

    function destroy($id)
    {
        $status = DB::table('t_siswa')->where('id', $id)->delete();
        if($status){
            return redirect('/siswa')->with('success', 'Data berhasil dihapus');
        }else{
            return redirect('/siswa')->with('error', 'Data gagal dihapus');
        }
    }
}
