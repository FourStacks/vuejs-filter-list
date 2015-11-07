<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardMechanic extends Model
{
    protected $table = 'card_mechanics';

    protected $fillable = [
        "name"
    ];

    public $timestamps = false;
}
