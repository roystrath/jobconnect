
<div class="w3-bar w3-blue w3-card" id="myNavbar">
    <a class="w3-bar-item w3-button" style="text-decoration:none;" href="{{ url('/index') }}">
            <i class="fa fa-home"></i> JOB CONNECT KENYA
    </a>
    {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
    </button> --}}

    {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> --}}
                        <!-- Left Side Of Navbar -->
        {{-- <ul class="navbar-nav mr-auto">

        </ul> --}}

                        <!-- Right Side Of Navbar -->
    @guest
        <div class="w3-right w3-hide-small">
                <a class="w3-bar-item w3-button" style="text-decoration:none;" href="{{ route('login') }}"><i class="fa fa-unlock"></i> {{ __('Login') }}</a>
                <a class="w3-bar-item w3-button" style="text-decoration:none;" href="{{ route('register') }}"><i class="fa fa-unlock"></i> {{ __('Register') }}</a>
                <a href="/candidates" class="w3-bar-item w3-button" style="text-decoration:none;"><i class="fa fa-user"></i> CANDIDATES</a>
                <a href="/companies" class="w3-bar-item w3-button" style="text-decoration:none;"><i class="fa fa-th"></i> COMPANIES</a>
        </div>

    
    @else

        <div class="w3-right w3-hide-small">

            <div class="w3-dropdown-hover">
                <button class="w3-button w3-bar-item" style="text-decoration:none;"><i class="fa fa-user"></i> {{ Auth::user()->name }} </button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="{{ route('logout') }}" class="w3-bar-item w3-button" style="text-decoration:none;" onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <a href="#" class="w3-bar-item w3-button" style="text-decoration:none;">Link 2</a>
                <a href="#" class="w3-bar-item w3-button" style="text-decoration:none;">Link 3</a>
            </div>

                {{-- <a class="w3-bar-item w3-button" style="text-decoration:none;" href="{{ route('login') }}"><i class="fa fa-unlock"></i> {{ __('Login') }}</a>
                <a class="w3-bar-item w3-button" style="text-decoration:none;" href="{{ route('register') }}"><i class="fa fa-unlock"></i> {{ __('Register') }}</a> --}}
                {{-- <a href="#" class="w3-bar-item w3-button" style="text-decoration:none;"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a>
                <a href="/companies" class="w3-bar-item w3-button" style="text-decoration:none;"><i class="fa fa-th"></i> COMPANIES</a> --}}
        </div>


            {{-- <li class="nav-item dropdown">
                     <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           {{ Auth::user()->name }} <span class="caret"></span>
                     </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                               {{ __('Logout') }}
                        </a> --}}

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
        </form>
                     {{-- </div>
                 </li> --}}
    @endguest
        {{-- </ul> --}}
    {{-- </div> --}}
</div>