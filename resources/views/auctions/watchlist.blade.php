@extends ('layouts.app')
@section('content')
    @include ('layouts.hero')
    <div class="container">
        <div class="row">
            <a href="#" class="breadcrumbs">
                Home > Jasper Poppe > My watchlist
            </a>
        </div>
        <div class="row">
            <h1>My watchlist</h1>
            <div class="right">
                <button class="btn btn-rectangle inline">DELETE SELECTED ></button>
                <button class="btn btn-rectangle inline">CLEAR WATCHLIST ></button>
            </div>
        </div>
        <div class="row">
            <div class="inline"><a href="#">all(11)</a> | <a href="#">active(8)</a> | <a href="#">ended(3)</a></div>
        </div>
        <div class="row">
            <table>
                <col width="4%">
                <col width="16%">
                <col width="32%">
                <col width="16%">
                <col width="16%">
                <col width="16%">
                <thead>
                <th></th>
                <th></th>
                <th>Auction details</th>
                <th>Estimated price</th>
                <th>End date</th>
                <th>Remaining time</th>
                </thead>
                <tbody>
                @foreach($auctions as $auction)
                <tr>
                    <td><input type="checkbox" name="watchlist" id="watchlist"></td>
                    <td><img src="img/details/related1.png" alt="{{ $auction->id }}"></td>
                    <td><p class="list name">{{ $auction->name }}</p></td>
                    <td><p class="list price">{{ $auction->min_price }}</p></td>
                    <td><p class="list enddate">{{ $auction->end_time }}</p><p class="list enddate">13:00 p.m. (EST)</p></td>
                    <td><p class="list countdown">countdown {{ $auction->end_time }}</p></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection('content')