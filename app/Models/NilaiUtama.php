<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NilaiUtama extends Model
{
    protected $fillable = [
        'huruf',
        'judul',
        'deskripsi',
    ];

    protected $dates = ['deleted_at'];

}
