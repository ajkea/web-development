@extends ('layouts.app')
@section('pageTitle', 'Home')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">How does it work?</h1>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-4">
                <i class="fal fa-pencil fa-4x"></i>
                <h2>Sign up</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>

            <div class="col-4">
                <i class="fal fa-check-square fa-4x"></i>
                <h2>Make deals</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>

            <div class="col-4">
                <i class="fal fa-smile fa-4x"></i>
                <h2>Everyone happy!</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
    </div>
    <div class="row center spotlight">
        <div class="container">
            <h1 class="text-center">Most popular this week</h1>
            <div class="row">
                <div class="col-4 col-6-sm">
                    <img src="{{ URL::to('/') }}/images/static/hero1.png" alt="picture artwork Da Vinci">
                    <img src="{{ URL::to('/') }}/images/static/hero1.png" alt="picture artwork Da Vinci">
                </div>
                <div class="col-8 col-12-sm extra">
                    <img src="{{ URL::to('/') }}/images/static/hero1.png" alt="picture artwork Da Vinci">
                </div>
            </div>
        </div>
    </div>
@endsection