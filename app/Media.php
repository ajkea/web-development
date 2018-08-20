<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [
        'name', 'type', 'source', 'alt', 'auction_id',
    ];

    public function auction()
    {
        return $this->belongsTo('App\Auction');
    }
}
