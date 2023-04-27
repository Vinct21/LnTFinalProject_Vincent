<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use App\Http\Controllers\Controller;
use App\Http\Requests\BarangRequest as RequestsBarang;
use App\Http\Requests\BarangRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BarangController extends Controller
{
    public function getTambahBarang(){
        $kategoris = Kategori::all();
        // dd($kategoris);
        return view('admin.tambahBarang', compact ('kategoris'));
    }

    public function createBarang(RequestsBarang $request){
        $request->validate([
            'foto' => 'required|mimes:png, jpg, jpeg, jfif',

        ]);

        // file processing
        $file = $request->foto;
        $fullFileName = $file->getClientOriginalName();
        $fileName = pathinfo($fullFileName)['filename'];
        $extension = $file->getClientOriginalExtension();
        $foto = $fileName . '-' . Str::random(10) . '-' . date('dmYhis') . '-' . $extension;
        $file->storeAs('public/pictures/', $foto);

        Barang::create([
            'nama' => $request-> nama,
            'kategori_id' => $request -> kategori_id,
            'harga' => $request -> harga,
            'jumlah' => $request -> jumlah,
            'foto' => $foto
        ]);

        return redirect(route('viewPage'));
    }

    public function index()
    {

        $barangs = Barang::all();

        return view('admin.viewBarang', [
            "title" => "PT.Meksiko | List Barang",
            "barangs" => $barangs
        ]);
    }

    public function getUpdateBarang($id){
        $barang = Barang::findOrFail($id);
        $kategoris = Kategori::all();

        return view('admin.updateBarang',compact('barang','kategoris'));
    }

    public function updateBarang(BarangRequest $request, $id){
        $barang = Barang::findOrFail($id);

        if($request->foto == null){
            $barang::update([
                'nama' => $request-> nama,
                'kategori_id' => $request -> kategori_id,
                'harga' => $request -> harga,
                'jumlah' => $request -> jumlah,
            ]); 
        }else{
            $request->validate([
                'foto' => 'required|mimes:png, jpg, jpeg, jfif',
    
            ]);
    
            // file processing
            $file = $request->foto;
            $fullFileName = $file->getClientOriginalName();
            $fileName = pathinfo($fullFileName)['filename'];
            $extension = $file->getClientOriginalExtension();
            $foto = $fileName . '-' . Str::random(10) . '-' . date('dmYhis') . '-' . $extension;
            $file->storeAs('public/pictures/', $foto);
    
            if(Storage::exists('public/pictures/', $foto)){
                Storage::delete('public/pictures/', $foto);
            }

            $barang::update([
                'nama' => $request-> nama,
                'kategori_id' => $request -> kategori_id,
                'harga' => $request -> harga,
                'jumlah' => $request -> jumlah,
                'foto' => $foto
            ]);
        }

        

        return redirect(route('viewBarang'));
    }

    public function deleteBarang($id){
        $barang = Barang::findOrFail($id);

        // if(Storage::exists('public/pictures/', $foto->picture)){
        //     Storage::delete('public/pictures/', $foto->picture);
        // }

        $barang->delete();

        return redirect(route('viewBarang'));
    }

}
