<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = [
        'judul','konten','penulis','image','user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function commentUsers(){
        return $this->belongsToMany('App\User','comments')->withPivot('comment');
    }

}
