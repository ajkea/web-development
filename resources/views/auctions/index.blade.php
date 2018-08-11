@extends ('layouts.app')
@section('content')
    <div class="container">
        <h1>Auction</h1>
        @foreach($auctions as $auction)
            <li>{{ $auction->name }}</li>
        @endforeach
    </div>
@endsection