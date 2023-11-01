<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;
    protected $table = 'pendidikan';
    protected $fillable = ['user_id', 'jenjang','nama_sekolah', 'lokasi', 'tanggal_masuk', 'tanggal_lulus'];
    


}
