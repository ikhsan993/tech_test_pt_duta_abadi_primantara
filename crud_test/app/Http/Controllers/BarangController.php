<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return response()->json($barang);
    }

    public function show($id)
    {
        $barang = Barang::find($id);

        if ($barang) {
            return response()->json($barang);
        } else {
            return response()->json(['message' => 'Barang not found.'], 404);
        }
    }

    public function store(Request $request)
    {
        $barang = Barang::create($request->all());
        return response()->json($barang, 201);
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);

        if ($barang) {
            $barang->update($request->all());
            return response()->json($barang);
        } else {
            return response()->json(['message' => 'Barang not found.'], 404);
        }
    }

    public function destroy($id)
    {
        $barang = Barang::find($id);

        if ($barang) {
            $barang->delete();
            return response()->json(['message' => 'Barang deleted.']);
        } else {
            return response()->json(['message' => 'Barang not found.'], 404);
        }
    }

    public function search(Request $request)
    {
        $keyword = $request->input('nama_barang');
        $barang = Barang::where('nama_barang', 'like', "%$nama_barang%")->get();

        return response()->json($barang);
    }
}
