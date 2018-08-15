@extends ('layouts.app')
@section('content')
    @include ('layouts.hero')
    <div class="container">
        <div class="row">
            <a href="#" class="breadcrumbs">
                Home > Auctions > Salvador Dali > Dance of Time III
            </a>
            <p class="right">LOT ID: {{ $auction->id }}</p>
            </span>
        </div>
        <div class="row">
            <h1>{{ $auction->name }}</h1>
            <p class="countdown">
                25d 14u 44m (7 bids) <i class="fal fa-bars"></i>
            </p>
        </div>
        <div class="row">
            <div class="col-9">
                <div class="row">
                @isset($auction->media)
                    @foreach($auction->media as $media)
                        @if($loop->index == 0)
                        <div class="col-12">
                            <img class="img-lg img-preview__large" src="{{ url('/images/upload/').'/'.$media->source }}" alt="{{ $media->alt }}">
                        </div>
                        @elseif($loop->index < 4 && $media->type == 'auction')
                       <div class="col miniature">
                           <img class="img-preview__small" src="{{ url('/images/upload/').'/'.$media->source }}" alt="{{ $media->alt }}">
                       </div>
                        @endif
                    @endforeach
                @endisset
                </div>
            </div>
            <div class="col-3 right">
                <div class="row det-row">
                    <h3 class="h3">{{ $auction->name }}</h3>
                    <p class="det-descr">{{ $auction->year }}, {{ $auction->origin }}</p>
                </div>
                <div class="row det-row">
                    <p class="countdown">countdown: {{ $auction->end_date }}</p>
                    <p class="date-end">{{ $auction->end_date }}</p>
                </div>
                <div class="row det-row">
                    <p class="bold">{{ $auction->description }}</p>
                    <a href="#" class="bold link">more</a>
                </div>
                <div class="row det-row bottom">
                    <p>Estimated price:</p>
                    <h2 class="price">€ {{ $auction->min_price }} - € {{ $auction->max_price }}</h2>
                    <a href="#" class="det-link"></a>
                    <p class="light">
                        bids:
                        {{ count($auction->bids) }}
                    </p>
                    <div class="det-bid">
                        <form class="form" action="{{ url('/createbid') }}" method="post">
                            @csrf
                            <input type="number" name="price" id="bid" min="{{ $price }}" value="{{ $price }}">
                            <input hidden name="auction_id" value="{{ $auction->id }}">
                            <button type="submit">BID NOW</button>
                        </form>
                    </div>
                    <a href="#">
                        <i class="fal fa-bars"></i> add to my watchlist
                    </a>
                </div>
            </div> <!-- col-3 right -->
        </div><!-- detail top -->
        <div class="row">
            <div class="col-9 det-description">
                <div class="det-paragraph">
                    <p class="bold">Description</p>
                    <p>{{ $auction->description }}</p>
                </div>
                <div class="det-paragraph">
                    <p class="bold">Condition</p>
                    <p>{{ $auction->condition }}</p>
                </div>
            </div>
            <div class="col-3 right det-properties">
                <p class="bold">Artist</p>
                <p>{{ $auction->origin }}</p>
                <p>{{ $auction->country }}</p>
                <p>1904 - 1989</p>
                <p class="bold">Dimensions</p>
                <p>{{ $auction->width }} x {{ $auction->height }} x {{ $auction->depth }} cm</p>
                <p class="bold">Color</p>
                <p>Bronze, patinated bronze and gold</p>
                <button class="btn btn-question">ASK A QUESTION ABOUT THIS AUCTION</button>
            </div>
        </div><!-- END ROW -->

        <h2>Related</h2>
        <div class="row">
            @foreach($auctions as $auctionRelated)
                @if($loop->index < 4)
                    <div class="col-3 col-6-sm auction-small">
                        @isset($auctionRelated->media)
                            @foreach($auctionRelated->media as $media)
                                @if($loop->index == 0)
                                    <img src="{{ url('/images/upload/').'/'.$media->source }}" alt="{{ url('/images/upload/').'/'.$media->alt }}">
                                @endif
                            @endforeach
                        @endisset
                        <p class="det-descr">{{ $auctionRelated->year }}, {{ $auctionRelated->origin }}</p>
                        <p class="rel name">{{ $auctionRelated->name }}</p>
                        <p class="rel price">€ {{ $auctionRelated->min_price }}</p>
                        <div class="inline">
                            <p class="rel countdown">{{ $auctionRelated->end_date }}</p>
                            <a class="right button" href="{{ url('/auctions/'.$auctionRelated->id) }}">VISIT AUCTION ></a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection