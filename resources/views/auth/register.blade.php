@extends('layouts.app')

@section('content')
<div class="intro-image">
    <img src="{{ URL::to('/') }}/images/static/hero1.png" alt="hero picture 1">
    <div class="container">
        <div class="blue-box">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. magnis dis parturient montes, nascetur ridiculus mus...</p>
            <p class="price">Price: € 299.99</p>
            <button class="wide">VISIT AUCTION  ></button>
        </div>
    </div>
</div>
<div class="container">
    <a href="#" class="breadcrumbs">
        Home > Register
    </a>
    <h1>Register</h1>
    <div class="row errors">
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row">
            <div class="col-6 col-12-sm">
                <p class="title">Company or name</p>
                <input type="text" name="name" id="name">
            </div>
            <div class="col-6 col-12-sm">
                <p class="title">Email</p>
                <input type="email" name="email" id="email">
            </div>
            <div class="col-6 col-12-sm">
                <p class="title">Password</p>
                <input type="password" name="password" id="password">
            </div>
            <div class="col-6 col-12-sm">
                <p class="title">Password confirmation</p>
                <input type="text" name="" id="passwordconfirmation">
            </div>
            <div class="col-6 col-12-sm">
                <p class="title">Country</p>
                <select name="country" id="country">
                    <option value="America">America</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Finland">Finland</option>
                    <option value="Norway">Norway</option>
                    <option value="Sweden">Sweden</option>
                    <option value="The Netherlands">The Netherlands</option>

                </select>
            </div>
            <div class="col-3 col-6-sm">
                <p class="title">Zip Code</p>
                <input type="text" name="zip_code" id="zip">
            </div>
            <div class="col-3 col-6-sm">
                <p class="title">City</p>
                <input type="text" name="city" id="city">
            </div>
            <div class="col-6 col-12-sm">
                <p class="title">Address</p>
                <input type="text" name="address" id="address">
            </div>
            <div class="col-6 col-12-sm">
                <p class="title">Phone Number</p>
                <div class="col-2 col-2-sm">
                    <input type="text" name="phone_number" id="phoneabbr" placeholder="+32">
                </div>
                <div class="col-10 col-10-sm">
                    <input type="text" name="phone_number2" id="phonenumber" placeholder="XX XXX XX XX">
                </div>
            </div>
            <div class="col-6 col-12-sm">
                <p class="title">Account number</p>
                <input type="text" name="account_number" id="accountnumber" placeholder="XX XXX XX XX">
            </div>
            <div class="col-6 col-12-sm">
                <p class="title">VAT-number</p>
                <input type="text" name="vat_number" id="vatnumber" placeholder="XX XXX XX XX">
            </div>
            <div class="col-12 col-12-sm">
                <p class="title">Alternative payment methods</p>
                <input type="text" name="paymentmethod" id="paymentmethod" placeholder="Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim">
            </div>
            <div class="col-6 col-12-sm">
                <div class="fl-left">
                    <input type="checkbox" name="terms" id="terms"> I Agree To <a href="#">The Terms & Conditions</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3 col-12-sm">
                <button class="button" type="submit">REGISTER</button>
            </div>
        </div>
    </form>
</div>
</div>

@endsection
