<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'deskripsi','tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'agama', 'no_telepon', 'email', 'alamat_id'];
    protected $table = 'profile';
    public $timestamps = false;
}
