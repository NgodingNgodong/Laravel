<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    function kelas(){ 
            $kelas = DB::table('t_kelas')->get();
            return view('kelas', compact('kelas'));
        }

        function create(){
            return view('siswa.formkelas');
        }

        function store(Request $request)
        {

            $request->validate([
                'nama_kelas' => 'required|string',
                'jurusan' => 'required',
                'lokasi_ruangan' => 'required',
                'nama_wali_kelas' => 'required|string',
    
            ]);

            $input = $request->all();
            unset($input['_token']);
            $status = DB::table('t_kelas')->insert($input);
            if ($status){
                return redirect('/kelas')->with('berhasil', 'Data berhasil ditambahkan');    
            } else {
                return redirect('/kelas/create')->with('galat', 'Data gagal ditambahkan');
            }
        }

        function edit(Request $request, $id)
        {
            $kelas = DB::table('t_kelas')->find($id);
            return view('siswa.formkelas', compact('kelas'));
        }

        function update(Request $request, $id)
        {
            $request->validate([
                'nama_kelas' => 'required|string',
                'jurusan' => 'required',
                'lokasi_ruangan' => 'required',
                'nama_wali_kelas' => 'required|string',
            ]);

            $input = $request->all();
            unset($input['_token']);
            unset($input['_method']);
            $status = DB::table('t_kelas')->where('id', $id)->update($input);
            if($status){
                return redirect('/kelas')->with('success', 'Data berhasil diubah');
            }else{
                return redirect('/kelas/edit/'. $id)->with('error', 'Data gagal diubah');
            }
        }

        function destroy($id)
        {
                $status = DB::table('t_kelas')->where('id', $id)->delete();
            if($status){
                return redirect('/kelas')->with('success', 'Data berhasil dihapus');
            }else{
                return redirect('/kelas')->with('error', 'Data gagal dihapus');
            }
        }
}