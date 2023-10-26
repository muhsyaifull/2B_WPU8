<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;
    protected $table = 'alamat';
    protected $fillable = ['user_id','provinsi', 'kota', 'kecamatan', 'kelurahan', 'dusun', 'poscode'];
}
