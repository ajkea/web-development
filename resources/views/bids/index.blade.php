@extends ('layouts.app')
@section('content')
@include('layouts.hero')
    <div class="container">
        <h1>Bids</h1>
        <div class="row">
            @foreach($bids as $bid)
                <div class="col-12">
                    <p>{{ $bid->price }}</p>
                    <p>{{ $bid->auction->name }}</p>
                    <p>{{ $bid->user->name }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection