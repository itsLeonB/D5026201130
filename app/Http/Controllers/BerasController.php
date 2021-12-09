<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerasController extends Controller
{
    public function index()
    {
        $beras = DB::table('beras')->paginate(7);
        return view('beras.index', ['beras' => $beras]);
    }

    public function tambah()
    {
        return view('beras.tambah');
    }

    public function store(Request $request)
    {
        DB::table('beras')->insert([
            'merkberas' => $request->merkberas,
            'stockberas' => $request->stockberas,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/beras');
    }

    public function edit($id)
    {
        $beras = DB::table('beras')->where('kodeberas', $id)->get();
        return view('beras.edit', ['beras' => $beras]);
    }

    public function update(Request $request)
    {
        DB::table('beras')->where('kodeberas', $request->id)->update([
            'merkberas' => $request->merkberas,
            'stockberas' => $request->stockberas,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/beras');
    }

    public function hapus($id)
    {
        DB::table('beras')->where('kodeberas', $id)->delete();
        return redirect('/beras');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $beras = DB::table('beras')
            ->where('merkberas', 'like', "%" . $cari . "%")
            ->paginate(7);
        return view('beras.index', ['beras' => $beras]);
    }

    public function detail($id)
    {
        $beras = DB::table('beras')->where('kodeberas', $id)->get();
        return view('beras.detail', ['beras' => $beras]);
    }
}
