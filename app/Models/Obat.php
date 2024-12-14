<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    //
    public $timestamps = false;
    protected $table = 'obat';
    protected $primaryKey = 'id_obat';

    protected $fillable = [
        'deskripsi_obat',
        'nama_obat',
        'stok',
        'harga_obat',
        'jenis_obat',
        'image'
    ];
}
