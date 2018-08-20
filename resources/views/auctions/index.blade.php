@extends ('layouts.app')
@section('pageTitle', 'Auctions')
@section('content')
    @include ('layouts.hero')
    <div class="container">
        <div class="row">
            @foreach($auctions as $auction)
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
        <div class="row justify-content-md-center ">
            <div class="pagination">

                {{ $auctions->links() }}
            </div>
        </div>
    </div>
@endsection