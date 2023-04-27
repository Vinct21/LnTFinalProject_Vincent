<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kategori_id',
        'harga',
        'jumlah',
        'foto'
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class,'kategori_id');
    }
}
