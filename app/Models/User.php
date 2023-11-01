<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['username', 'email', 'password'];
    protected $table = 'user';
    public $timestamps = false;
}
