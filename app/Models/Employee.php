<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'nama_lengkap',
        'email',
        'nomor_telepon',
        'tanggal_lahir',
        'alamat',
        'tanggal_masuk',
        'department_id',
        'jabatan_id',
        'status',
    ];

    // Relasi ke tabel departments
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    // Relasi ke tabel postions
    public function position()
    {
        return $this->belongsTo(Position::class, 'jabatan_id');
    }
}
