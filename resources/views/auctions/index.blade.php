@extends ('layouts.app')
@section('content')
    @include ('layouts.hero')
    <div class="container">
        <div class="row">
            @foreach($auctions as $auction)
            <div class="col-3 col-6-sm auction-small">
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
            @endforeach
        </div>
        <div class="row justify-content-md-center ">
            <div class="pagination">

                {{ $auctions->links() }}
                {{--<a href="#"><</a>--}}
                {{--<a href="#">1</a>--}}
                {{--<a href="#">2</a>--}}
                {{--<a href="#" class="bold">3</a>--}}
                {{--<a href="#">4</a>--}}
                {{--<a href="#">></a>--}}
            </div>
        </div>
    </div>
@endsection