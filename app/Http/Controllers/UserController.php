<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Auction;
use Auth;

class UserController extends Controller
{
    public function __construct(User $user, Auction $auction)
    {
        $this->user = $user;
        $this->auction = $auction;
    }

    public function profile()
    {
        return view(
            'auth.profile',
            ['user' => $this->user->find(Auth::user()->id),
            'auctions' => $this->auction
                ->where('user_id', Auth::user()->id)
                ->whereDate('end_date', '>', now())
                ->get(),
            ]);
    }
}
