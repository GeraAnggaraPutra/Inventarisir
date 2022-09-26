<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Barang;

class DashboardController extends Controller
{
    public function index(){
        $barang = Barang::count();
        return view('dashboard.index', compact('barang'));
    }
}
