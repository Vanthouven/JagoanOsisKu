<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserOsis extends Authenticatable
{
    use Notifiable;

    // Nama tabel
    protected $table = 'users_osis';

    // Field yang bisa di‑mass assign
    protected $fillable = [
        'nama',
        'nis',
        'kelas',
        'password',
        'sudah_memilih',
    ];

    // Field yang disembunyikan saat serialisasi
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
