<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;
    protected $primaryKey = 'pendidikan_id';
    protected $fillable = [];
    protected $table = 'pendidikan';
    public $timestamps = false;
}
