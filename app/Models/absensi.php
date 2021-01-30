<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['waktu_absen','nama_mahasiswa', 'matakuliah','keterangan'];
}
