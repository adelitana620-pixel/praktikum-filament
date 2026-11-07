<?php

namespace App\Http\Controllers;

use App\Models\Posyandu;
use Illuminate\Http\Request;

class PosyanduMapController extends Controller
{
    public function index()
    {
        $branches = Posyandu::select(
            'id',
            'nama',
            'alamat',
            'telepon',
            'latitude',
            'longitude'
        )->get();
        return view('peta', compact('branches'));
    }
}
