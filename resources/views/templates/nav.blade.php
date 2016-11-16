<div id="nav-overlay"></div>

<nav id="nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <a class="navbar-text navbar-right" role="button" data-toggle="collapse" href="#nav-collapse" aria-expanded="false" aria-controls="nav-collapse"><i class="fa fa-bars navbar-button"></i></a>
    </div>

    <div class="collapse" id="nav-collapse">
        <div class="box nav-box">
            <ul class="alt">
                <a href="{{ url('/') }}" class="nav-item
                @if(Route::getFacadeRoot()->current()->uri() === '/')
                    active
                @endif
                "><li>Home</li></a>

                <a href="{{ url('portfolio') }}" class="nav-item
                @if(str_contains(Route::getFacadeRoot()->current()->uri(), 'portfolio'))
                    active
                @endif
                "><li>Portfolio</li></a>

                <a href="{{ url('/over') }}" class="nav-item
                @if(str_contains(Route::getFacadeRoot()->current()->uri(), 'over'))
                    active
                @endif
                "><li>Over ons</li></a>

                <a href="{{ url('contact') }}" class="nav-item
                @if(str_contains(Route::getFacadeRoot()->current()->uri(), 'contact'))
                    active
                @endif
                "><li>Contact</li></a>
            </ul>
        </div>
    </div>

</nav>