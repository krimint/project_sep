<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    public function index()
    {
        $obats = Obat::all();
        return view('obat.index',compact('obats'));
    }

    public function create(){
        return view('obat.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nama' => 'required|string|unique:menus',
        //     'status' => 'required',
        //     'harga' => 'required|numeric',
        //     'kategori' => 'required'
        // ]);

        // Menu::create($request->all());
        // return redirect('menu')->with('success', 'Paket berhasil ditambahkan');
    }

    public function edit(/*Menu $menu */)
    {
        // return view('menu.edit', compact('menu'));
    }

    public function update(/*Request $request, Menu $menu*/){
        // $request->validate([
        //     'nama' => 'required|string|unique:menus,nama,'.$menu->id.'',
        //     'status' => 'required',
        //     'harga' => 'required|numeric',
        //     'kategori' => 'required'
        // ]);

        // $menu->update($request->all());
        // return redirect()->route('menu.index')->with('success','Menu berhasil diupdate!');

    }

    public function destroy(/*Menu $menu*/)
    {
    //     $menu->delete();

    //     return redirect('menu')->with('success','Menu berhasil dihapus');
    //
    }
}
