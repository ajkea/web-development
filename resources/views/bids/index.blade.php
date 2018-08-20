@extends ('layouts.app')
@section('pageTitle', 'Bids')
@section('content')
@include('layouts.hero')
    <div class="container">
        <h1>Bids</h1>
        <p class="det-descr">Here you can find all the bids you've placed, only the highest bid will be shown to reduce the amount of bids.</p>
        <div class="row">
            <table >
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Bid</th>
                    <th>Auction ending in</th>
                    <th>View auction</th>
                </thead>
                <tbody>
                @foreach($bids as $bid)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $bid->auction->name }}</td>
                        <td>&euro; {{ $bid->maxBid }}</td>
                        <td class="rel countdown" data-time="{{ $bid->auction->end_date }}">{{ $bid->auction->end_date }}</td>
                        <td><a href="auctions/{{ $bid->auction->id }}">Go to auction</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection