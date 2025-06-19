<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $table = 'data_siswa';

    protected $fillable = [
        'user_id',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'disabilitas',
        'nik',
        'status_tinggal',
        'alamat',
    ];
}
