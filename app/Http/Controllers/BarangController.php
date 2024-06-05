<?php

namespace App\Http\Controllers;
use App\Http\Requests\UpdateRequest;
use App\Http\Resources\BarangResource;
use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Requests\BarangRequest;

class BarangController extends Controller
{
    
    public function index(){
        return new BarangResource(Barang::all());
    }
    public function show(Barang $barang){
        return response()->json($barang);
    }

    public function store(BarangRequest $request){
        Barang::create($request->validated());
        return response()->json('Barang telah di buat');
    }

    public function update(UpdateRequest $request, Barang $barang){
        $barang->update($request->validated());
        return response()->json('Barang telah di update');
    }

    public function destroy(Barang $barang){
        $barang->delete();
        return response()->json('Barang telah di hapus');
    }

}
