@extends ('layouts.app')
@section('content')
    <div class="intro-image">
        <img src="{{ URL::to('/') }}/images/static/hero1.png" alt="hero picture 1">
        <div class="container">
            <div class="blue-box col-5 offset-7">
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. magnis dis parturient montes, nascetur ridiculus mus...</p>
                <p class="price">Price: € 299.99</p>
                <button class="wide">VISIT AUCTION  ></button>
            </div>
        </div>
    </div>
    <div class="container">
        <a href="#" class="breadcrumbs">
            Home > Jasper Poppe > My auctions > New Auction
        </a>
        <div class="row">
            <h1>Add a new auction</h1>
        </div>
        <div class="row">
            <form class="form" action="{{ route('auctions.index') }}" enctype="multipart/form-data" method="post" files="true">
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
                        <input type="text" name="name" id="title" placeholder="Auction title">
                    </div>
                    <div class="col-3">
                        <p class="title">Year</p>
                        <input type="number" name="year" id="year" placeholder="X X X X">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p class="title">Width</p>
                        <input type="number" name="width" id="width" placeholder="X X X X">
                    </div>
                    <div class="col-3">
                        <p class="title">Height</p>
                        <input type="number" name="height" id="Height" placeholder="X X X X">
                    </div>
                    <div class="col-3">
                        <div class="inline"><p class="title">Depth </p><p class="note">(optional)</p></div>
                        <input type="number" name="depth" id="Depth" placeholder="X X X X">
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <p class="title">Description</p>
                        <textarea name="description" id="description" rows="4"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <p class="title">Condition</p>
                        <textarea name="condition" id="condition" rows="4"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <p class="title">Origin</p>
                        <input type="text" name="origin" id="origin">
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
                        <input type="file" name="media1[]" multiple>
                        <input hidden name="media1_type" value="optional">
                        {{--<button class="btn">UPLOAD IMAGE OF THE ARTWORK</button>--}}
                    </div>
                    <div class="col-3">
                        <input type="file" name="media2">
                        <input hidden name="media2_type" value="signature">
                        {{--<button class="btn">UPLOAD IMAGE OF THE SIGNATURE</button>--}}
                    </div>
                    <div class="col-3">
                        <input type="file" name="media3">
                        <input hidden name="media3_type" value="auction">
                        {{--<button class="btn">OPTIONAL IMAGE</button>--}}
                    </div>
                </div>
                <div class="row">
                    <h2>Pricing</h2>
                    <div class="col-3">
                        <p class="title">Minimum estimate price</p>
                        <input type="text" name="min_price" id="minprice" value="€" placeholder="X X X X">
                    </div>
                    <div class="col-3">
                        <p class="title">Maximum estimate price</p>
                        <input type="text" name="max_price" id="maxprice" value="€" placeholder="X X X X">
                    </div>
                    <div class="col-3">
                        <div class="inline"><p class="title">Buyout price </p><p class="note">(optional)</p></div>
                        <input type="text" name="buy_now" id="buyoutprice" value="€" placeholder="X X X X">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p class="title">End date</p>
                        <input type="text" name="end_date" id="endate" placeholder="DD/MM/YY" value="2002-11-22">
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
                        <input type="checkbox" name="terms" id="terms"><p>I Agree to <a href="#">The Terms & Conditions</a></p>
                    </div>
                </div>
                <div class="row center">
                    <div class="col-3">
                        <button type="submit"class="button">ADD AUCTION</button>
                        <a href="#">ASK A QUESTION ></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection