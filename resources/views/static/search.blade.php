@extends ('layouts.app')
@section('pageTitle', 'Search')
@section('content')
    @include ('layouts.hero')
<div class="container">
    <div class="row">
        <a href="#" class="breadcrumbs">
            Home > search
        </a>
    </div>
    <div class="row">
        <h1>| search</h1>
        <h2>Add a request</h2>
    </div>
    <div class="row">
        <form action="/searchauction" method="post">
            @csrf
            <div class="col-6 col-12-sm">
                <p class="title">What are you looking for?</p>
                <input type="text" name="name" id="searchterm" placeholder="Search term">
            </div>
            <div class="col-6 col-12-sm">
                <p class="title">Artist</p>
                <input type="text" name="artist" id="searchartist" placeholder="Artist">
            </div>
            <div class="col-12 col-12-sm">
                <p class="title">Information about the artwork</p>
            </div>
            <div class="col-10 col-10-sm">
                <input type="text" name="description" id="description" placeholder="description">
                <p class="note">Your request must be approved by the administrator, if your question has been approved it will appear on our site.</p>
            </div>
            <div class="col-2 col-2-sm">
                <button type="submit" class="button">ADMIT REQUEST</button>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col-12">
        <h2>Overview</h2>
        </div>
        <div class="row">
        @foreach($auctions as $auction)
            <div class="row search-item">
                <div class="col-9">
                    <p><strong>Search:</strong> {{ $search }}</p>
                    <p><strong>Description:</strong> {{ $auction->description }}</p>
                    <p><strong>Posted:</strong> {{ date_format($auction->created_at, 'd F Y') }}</p>
                </div>
                <div class="col-3">
                    <button>I OWN THIS ARTWORK</button>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection