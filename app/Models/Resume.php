<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'experience', 'education', 'email', 'no_telepon', 'skill', 'description'];
    protected $table = 'resume';
    public $timestamps = false;
}
