<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    protected $fillable = [
        'name', 'style', 'width', 'height', 'depth', 'description', 'condition', 'origin', 'min_price', 'max_price', 'buy)now', 'end_date', 'user_id',
    ];

    public function media()
    {
        return $this->hasMany('App\Media');
    }

    public function favourites()
    {
        return $this->hasMany('App\Favourite');
    }

    public function bids()
    {
        return $this->hasMany('App\Bid');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
