<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    protected $table = 'mechanics';

    protected $fillable = [
        "name"
    ];

    public $timestamps = false;


    public function cards()
    {
        return $this->belongsToMany('App\Card');
    }

}
