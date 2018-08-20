@extends ('layouts.app')
@section('pageTitle', 'My auctions')
@section('content')
    <div class="container">
        <h1>My auctions</h1>
        <a href="{{ url('auctions/create') }}">Add auction</a>
        <h2>Active auctions</h2>
        <div class="row">
        @foreach($auctionsBusy as $auction)
            <div class="col-6 col-6-sm auction-small">
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
                    <p class="rel countdown" data-time="{{ $auction->end_date }}">{{ $auction->end_date }}</p>
                    <a class="right button" href="{{ url('/auctions/'.$auction->id) }}">VISIT AUCTION ></a>
                </div>
            </div>
        @endforeach
        </div>
        <h2>Auctions that are over</h2>
        <div class="row">
        @foreach($auctionsPast as $auction)
            @isset($auction->bids)
            @else
            <div class="col-6 col-6-sm auction-small">
                @if(empty($auction->bids))
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
                    <p class="rel countdown" data-time="{{ $auction->end_date }}">{{ $auction->end_date }}</p>
                    <a class="right button" href="{{ url('/auctions/'.$auction->id) }}">VISIT AUCTION ></a>
                </div>
            </div>
            @endif
        @endforeach
        </div>
            <h2>Auctions that have been sold</h2>
            <div class="row">
            @foreach($auctionsPast as $auction)
                @isset($auction->bids)
                <div class="col-6 col-6-sm auction-small">
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
                        <p class="rel countdown" data-time="{{ $auction->end_date }}">{{ $auction->end_date }}</p>
                        <a class="right button" href="{{ url('/auctions/'.$auction->id) }}">VISIT AUCTION ></a>
                    </div>
                </div>
                @endif
            @endforeach
    </div>
</div>
@endsection