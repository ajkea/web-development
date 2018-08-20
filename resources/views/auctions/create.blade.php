@extends ('layouts.app')
@section('pageTitle', 'Add auction')
@section('content')
    @yield ('layouts.hero')
    <div class="container">
        <a href="#" class="breadcrumbs">
            Home > Jasper Poppe > My auctions > New Auction
        </a>
        <div class="row">
            <h1>Add a new auction</h1>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            @endif
        </div>
        <div class="row">
            <form class="form" action="/auctions" enctype="multipart/form-data" method="post" files="true">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <select name="style" id="style">
                            <option value="Abstract">Abstract</option>
                            <option value="African American">African American</option>
                            <option value="Asian Contemporary">Asian Contemporary</option>
                            <option value="conceptual">Conceptual</option>
                            <option value="Contemporary">Contemporary</option>
                            <option value="Emerging Artists">Emerging Artists</option>
                            <option value="Figurative">Figurative</option>
                            <option value="Middle Eastern Contemporary">Middle Eastern Contemporary</option>
                            <option value="Minimalism">Minimalism</option>
                            <option value="Modern">Modern</option>
                            <option value="Pop">Pop</option>
                            <option value="Urban">Urban</option>
                            <option value="Vintage Photographs">Vintage Photographs</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p class="title">Auction title</p>
                        <input required type="text" name="name" id="title" placeholder="Auction title" value="{{ old('name') }}">
                    </div>
                    <div class="col-3">
                        <p class="title">Year</p>
                        <input required type="number" name="year" id="year" placeholder="X X X X" value="{{ old('year') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p class="title">Width (in mm)</p>
                        <input required type="number" name="width" id="width" placeholder="X X X X" value="{{ old('width') }}">
                    </div>
                    <div class="col-3">
                        <p class="title">Height (in mm)</p>
                        <input required type="number" name="height" id="Height" placeholder="X X X X" value="{{ old('height') }}">
                    </div>
                    <div class="col-3">
                        <div class="inline"><p class="title">Depth (in mm)</p><p class="note">(optional)</p></div>
                        <input type="number" name="depth" id="Depth" placeholder="X X X X" value="{{ old('depth') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <p class="title">Description</p>
                        <textarea required name="description" id="description" rows="4" value="{{ old('description') }}"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <p class="title">Condition</p>
                        <textarea required name="condition" id="condition" rows="4" value="{{ old('condition') }}"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <p class="title">Origin</p>
                        <input required type="text" name="origin" id="origin" value="{{ old('origin') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <p class="title">Photos</p>
                        <p>Please upload one picture with the signature of the artwork and one picture of the artwork you can upload up to 3 pictures with a maximum of 10MB each.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <input required type="file" name="media1[]" multiple value="{{ old('media1[]') }}">
                        <input required hidden name="media1_type" value="auction">
                    </div>
                    <div class="col-3">
                        <input required type="file" name="media2" value="{{ old('media2') }}">
                        <input required hidden name="media2_type" value="signature">
                    </div>
                    <div class="col-3">
                        <input type="file" name="media3">
                        <input hidden name="media3_type" value="optional">
                    </div>
                </div>
                <div class="row">
                    <h2>Pricing</h2>
                    <div class="col-3">
                        <p class="title">Minimum estimate price</p>
                        <input required type="text" name="min_price" id="minprice" value="{{ old('min_price') }}" placeholder="X X X X">
                    </div>
                    <div class="col-3">
                        <p class="title">Maximum estimate price</p>
                        <input required type="text" name="max_price" id="maxprice" value="{{ old('max_price') }}" placeholder="X X X X">
                    </div>
                    <div class="col-3">
                        <div class="inline"><p class="title">Buyout price </p><p class="note">(optional)</p></div>
                        <input type="text" name="buy_now" id="buyoutprice" value="" placeholder="X X X X">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p class="title">End date</p>
                        <input required type="date" name="end_date" id="endate" value="{{ old('end_date') }}">
                    </div>
                    <div class="col-9">
                        <p class="title">Attention</p>
                        <p class="note">You can not change the information after adding this auction.</p>
                        <p class="note">If you're not certain about the information of your artwork please ask for help</p>
                        <p class="note">We will answer your question as soon as possible</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 inline">
                        <input required type="checkbox" name="terms" id="terms"><p>I Agree to <a href="#">The Terms & Conditions</a></p>
                    </div>
                </div>
                <div class="row center">
                    <div class="col-3">
                        <button type="submit"class="button">ADD AUCTION</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection