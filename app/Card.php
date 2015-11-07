<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cards';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'rarity',
        'cost',
        'attack',
        'health',
        'text'
    ];

    public $timestamps = false;

    public function mechanics()
    {
        return $this->belongsToMany('App\Mechanic');
    }
}
