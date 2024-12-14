<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    //
    public function index() {
        $obat = Obat::all();
        // dd($obat);

        return view('obat', ['products' => $obat]);
    }

    public function detail($id) {
        $obat = Obat::find($id);
        return view('detailObat', ['product' => $obat]);
    }
}
