<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    protected $table = 'pinjaman'
    ;
    protected $fillable = [
        'no_pinjam','nama','keterangan','no_laptop','tgl_pinjam','tgl_kembali'
    ];
}
