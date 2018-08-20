<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $fillable = [
        'price', 'user_id', 'auction_id',
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
