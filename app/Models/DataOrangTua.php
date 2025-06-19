<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataOrangTua extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $table = 'data_orang_tua';

    protected $fillable = [
        'user_id',
        'nama_ayah',
        'status_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'nama_ibu',
        'status_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'nama_wali',
        'status_wali',
        'pekerjaan_wali',
        'penghasilan_wali',
    ];
}
