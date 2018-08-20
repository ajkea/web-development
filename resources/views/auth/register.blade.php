@extends('layouts.app')
@section('pageTitle', 'Register')
@section('content')
<div class="intro-image">
    <img src="{{ URL::to('/') }}/images/static/hero1.png" alt="hero picture 1">
    <div class="container">
        <div class="blue-box">
            <h2>@lang('register.hero-title')</h2>
            <p>@lang('register.hero-text')</p>
            <p class="price">@lang('register.price') € 299.99</p>
            <button class="wide">@lang('register.visit-auction')  ></button>
        </div>
    </div>
</div>
<div class="container">
    <h2>@lang('register.welcome')</h2>
    <a href="#" class="breadcrumbs">
        Home > @lang('register.register')
    </a>
    <h1>@lang('register.register')</h1>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row">
            <div class="col-6 col-12-sm">
                <p class="title">@lang('register.name')</p>
                <input type="text" name="name" id="name">
            </div>
            <div class="col-6 col-12-sm">
                <p class="title">@lang('register.email')</p>
                <input type="email" name="email" id="email">
            </div>
            <div class="col-6 col-12-sm">
                <p class="title">@lang('register.password')</p>
                <input type="password" name="password" id="password">
            </div>
            <div class="col-6 col-12-sm">
                <p class="title">@lang('register.password-conf')</p>
                <input type="text" name="password_confirmation" id="passwordconfirmation">
            </div>
            <div class="col-6 col-12-sm">
                <p class="title">@lang('register.country')</p>
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
                <p class="title">@lang('register.zip-code')</p>
                <input type="text" name="zip_code" id="zip">
            </div>
            <div class="col-3 col-6-sm">
                <p class="title">@lang('register.city')</p>
                <input type="text" name="city" id="city">
            </div>
            <div class="col-6 col-12-sm">
                <p class="title">@lang('register.address')</p>
                <input type="text" name="address" id="address">
            </div>
            <div class="col-6 col-12-sm">
                <p class="title">@lang('register.phone-nr')</p>
                <div class="col-2 col-2-sm">
                    <input type="text" name="phone_number" id="phoneabbr" placeholder="+32">
                </div>
                <div class="col-10 col-10-sm">
                    <input type="text" name="phone_number2" id="phonenumber" placeholder="XX XXX XX XX">
                </div>
            </div>
            <div class="col-6 col-12-sm">
                <p class="title">@lang('register.account-nr')</p>
                <input type="text" name="account_number" id="accountnumber" placeholder="XX XXX XX XX">
            </div>
            <div class="col-6 col-12-sm">
                <p class="title">@lang('register.VAT-nr')</p>
                <input type="text" name="vat_number" id="vatnumber" placeholder="XX XXX XX XX">
            </div>
            <div class="col-12 col-12-sm">
                <p class="title">@lang('register.payment')</p>
                <input type="text" name="paymentmethod" id="paymentmethod" placeholder="Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim">
            </div>
            <div class="col-6 col-12-sm">
                <div>
                    <input type="checkbox" name="terms" id="terms">
                    <p>@lang('register.terms')</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3 col-12-sm">
                <button class="button" type="submit">@lang('register.register')</button>
            </div>
        </div>
    </form>
</div>
</div>

@endsection
