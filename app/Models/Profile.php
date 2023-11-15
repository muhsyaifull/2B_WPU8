<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profile';
    protected $fillable = ['nama', 'deskripsi', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'agama', 'no_telepon', 'email', 'image_path', 'akun_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'akun_id');
    }

    public function alamat()
    {
        return $this->hasOne(Alamat::class, 'user_id');
    }

    public function pendidikan()
    {
        return $this->hasOne(Pendidikan::class, 'user_id');
    }

    public function pekerjaan()
    {
        return $this->hasOne(Pekerjaan::class, 'user_id');
    }

    public function skill()
    {
        return $this->hasOne(Skill::class, 'user_id');
    }

}
