@extends ('layouts.app')
@section('content')
    <div class="intro-image">
        <img src="{{ URL::to('/') }}/images/static/hero1.png" alt="hero picture 1">
        <div class="container">
            <div class="blue-box col-5 offset-7">
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. magnis dis parturient montes, nascetur ridiculus mus...</p>
                <p class="price">Price: € 299.99</p>
                <button class="wide">VISIT AUCTION  ></button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h1></h1>
            <div class="col box-profile">
                <h2>{{ $user->name }}</h2>
                <div class="row">
                    <div class="col-6 col-sm-3">
                        <li><span class="fa-li"><i class="fal fa-envelope"></i></span> {{ $user->email }}</li>
                        <li><span class="fa-li"><i class="fal fa-phone"></i></span> {{ $user->phone_number }}</li>
                    </div>
                    <div class="col-6 col-sm-3">
                        <p class="profile-description__title">@lang('register.VAT-nr')</p>
                        <p>{{ $user->vat_number }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-3">
                        <li><span class="fa-li"><i class="fal fa-home"></i></span> {{ $user->address }}</li>
                        <p>{{ $user->zip_code.', '.$user->city }}</p>
                    </div>
                    <div class="col-6 col-sm-3">

                        <p class="profile-description__title">@lang('register.account-nr')</p>
                        <li><span class="fa-li"><i class="fal fa-user"></i></span> {{ $user->account_number }}</li>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3>Active auctions</h3>
            </div>
            @foreach($auctions as $auction)
                @if($loop->index < 3)
                    <div class="col auction-small">
                        @isset($auction->media)
                            @foreach($auction->media as $media)
                                @if($loop->index == 0)
                                    <img src="{{ url('/images/upload/').'/'.$media->source }}" alt="{{ url('/images/upload/').'/'.$media->alt }}">
                                @endif
                            @endforeach
                        @endisset
                        <p class="det-descr">{{ $auction->year }}, {{ $auction->origin }}</p>
                        <p class="rel name">{{ $auction->name }}</p>
                        <p class="rel price">€ {{ $auction->min_price }}</p>
                        <div class="inline">
                            <p class="rel countdown">{{ $auction->end_date }}</p>
                            <a class="right button" href="{{ url('/auctions/'.$auction->id) }}">VISIT AUCTION ></a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection