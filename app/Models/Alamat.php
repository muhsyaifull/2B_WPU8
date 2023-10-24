<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;
    protected $primaryKey = 'alamat_id';
    protected $fillable = ['provinsi', 'kota', 'kecamatan', 'kelurahan', 'dusun', 'poscode'];
    protected $table = 'alamat';
    public $timestamps = false;
}
