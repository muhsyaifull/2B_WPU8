<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    use HasFactory;
    protected $primaryKey = 'organisasi_id';
    protected $fillable = [];
    protected $table = 'organisasi';
    public $timestamps = false;
}
