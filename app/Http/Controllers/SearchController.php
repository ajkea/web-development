<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auction;

class SearchController extends Controller
{
    public function __construct (Auction $auction)
    {
        $this->auction = $auction;
    }

    public function search(User$request)
    {

    }
}
