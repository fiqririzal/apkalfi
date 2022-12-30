<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $table =[
        'transaction'
    ];

    protected $fillable =[
        'id_user','id_laptop', 'jumlah','lama'
    ];

    public function user(){
        return $this->belongsTo('App\User','id_user');
    }

    public function laptop(){
        return $this->belongsTo('App\laptop','id_laptop');

    }

}
