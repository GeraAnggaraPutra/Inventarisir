<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    public $fillable = ['tanggal','nama_barang', 'spesifikasi_barang', 'jumlah'];
    public $timestamps = true;
}
