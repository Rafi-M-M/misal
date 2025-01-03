<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $fillable = [ 'nama_depan',
     'nama_belakang',
      'no_hp',
       'asal_sekolah',
        'poto_ktp',
         'poto_kk',
          'jurusan', 
        ];
}
