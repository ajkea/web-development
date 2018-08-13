<nav class="">
    <div class="green-bar">
        <div class="container">
            <img class="logo" src="{{ URL::to('/') }}/images/static/logo.png" alt="Landoretti logo">
        </div>
    </div>
    <div class="nav-up">
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-7">
                    <ul class="nav">
                        <li><i class="fal fa-bars"></i> WATCHLIST</a></li>
                        <li> | </li>
                        <li><i class="fal fa-user-circle"></i> <a href="profile.html">PROFILE</a></li>
                        <li> | </li>
                        <li><a href="{{ route('login') }}">LOGIN</a></li>
                    </ul>
                </div>
                <div class="fl-right">
                    <input type="text" name="search" id="search" placeholder="Search"> <i class="fal fa-search"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-down">
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-8">
                    <ul class="nav">
                        <li class="bold"><a href="{{ url('/') }}">HOME</a></li>
                        <li class="bold"><a href="{{ route('auctions.index') }}">ART</a></li>
                        <li class="bold"><a href="search.html">ISEARCH</a></li>
                        <li class="bold"><a href="{{ route('myauctions') }}">MYAUCTIONS</a></li>
                        <li class="bold"><a href="myauctions.html">MYBIDS</a></li>
                        <li class="bold"><a href="faq.html">CONTACT</a></li>
                    </ul>
                </div>
                <div class="float-right">
                    <ul class="nav language">
                        <li><a href="#">NL</a></li>
                        <li><a href="#">FR</a></li>
                        <li><a class="bold" href="#">EN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>