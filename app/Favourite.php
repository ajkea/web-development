<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    protected $fillable = [
        'auction_id', 'user_id', 'favourited',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function auction()
    {
        return $this->belongsTo('App\Auction');
    }
}
