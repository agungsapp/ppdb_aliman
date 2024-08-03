<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'username',
        'email',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id', 'id_user');
    }

    public function orangTua()
    {
        return $this->hasMany(OrangTua::class, 'id_siswa', 'id');
    }

    public function hitungBayar($jumlahBayar)
    {
        $kode = $this->siswa->kode_registrasi;
        // Ambil digit terakhir dari ID pengguna
        $lastDigitUserId = substr($kode, -1); // -1 berarti ambil karakter terakhir

        // Tambahkan digit terakhir dengan jumlah bayar
        $bayar = $lastDigitUserId + $jumlahBayar;

        return $bayar;
    }
}
