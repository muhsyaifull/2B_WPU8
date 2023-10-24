<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;
    protected $primaryKey = 'prestasi_id';
    protected $fillable = [];
    protected $table = 'prestasi';
    public $timestamps = false;
}
