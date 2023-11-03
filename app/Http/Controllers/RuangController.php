<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Ruang;

class RuangController extends Controller
{
    public function index(){
        $ruangs = Ruang::all();
        return view('ruang.index',["title" =>  "Ruang","ruangs"=>$ruangs]);
    }

    public function create(){
        return view('ruang.create',["title"=>"Ruang"]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'nama_ruang'=>'required|min:3|max:255|unique:ruang',
        ]);
        Ruang::create($validatedData);
        return redirect('/ruang')->with('success','Berhasil Tambah Data!');
    }

    public function edit(Ruang $ruang){
        return view('ruang.edit',["title"=>"Ruang","ruang"=>$ruang]);
    }

    public function update(Request $request,Ruang $ruang) {
        $request->validate([
            'nama_ruang'=>'required|min:3|max:255|unique:ruang,nama_ruang,'.$ruang->id,
        ]);
       $ruang->update([
        'nama_ruang'=>$request->nama_ruang,
       ]);
        return redirect('ruang')->with('success','Berhasil Update Data!');
    }

    public function destroy(Ruang $ruang) {

        Ruang::destroy($ruang->id);
        return redirect('/ruang')->with('success','Berhasil Hapus Data!');
    }
}
