<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    // protected $table = 'my_flights';
    protected $fillable = ['nama_kelas', 'kelas','jenis_kelamin','alamat'];
}
