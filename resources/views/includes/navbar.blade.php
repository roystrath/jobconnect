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
                <a href="/candidates" class="w3-bar-item w3-button" style="text-decoration:none;"><i class="fa fa-user"></i> JOB CANDIDATES</a>
                <a href="/companies" class="w3-bar-item w3-button" style="text-decoration:none;"><i class="fa fa-th"></i> COMPANIES</a>
        </div>

        <!-- Hide right-floated links on small screens and replace them with a menu icon -->

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
                <i class="fa fa-bars"></i>
            </a>


         <!-- Sidebar on small screens when clicking the menu icon -->
    {{-- <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
        <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button">LOG IN</a>
        <a href="interns.php" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
        <a href="jobs.php" onclick="w3_close()" class="w3-bar-item w3-button">JOBS</a>
        <!--        <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>-->
        <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
    </nav> --}}


    
    @else

        <div class="w3-right w3-hide-small">
            <a href="/candidates" class="w3-bar-item w3-button" style="text-decoration:none;"><i class="fa fa-user"></i> JOB CANDIDATES</a>
                <a href="/companies" class="w3-bar-item w3-button" style="text-decoration:none;"><i class="fa fa-th"></i> COMPANIES</a>
            <div class="w3-dropdown-hover w3-blue">
                <button class="w3-button w3-bar-item" style="text-decoration:none;"><i class="fa fa-user"></i> {{ Auth::user()->name }} </button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="{{ route('logout') }}" class="w3-bar-item w3-button" style="text-decoration:none;" onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <a href="/home" class="w3-bar-item w3-button w3-blue" style="text-decoration:none;">My Profile</a>
                <a href="/" class="w3-bar-item w3-button w3-blue" style="text-decoration:none;">Back Home</a>
                </div>

                {{-- <a class="w3-bar-item w3-button" style="text-decoration:none;" href="{{ route('login') }}"><i class="fa fa-unlock"></i> {{ __('Login') }}</a>
                <a class="w3-bar-item w3-button" style="text-decoration:none;" href="{{ route('register') }}"><i class="fa fa-unlock"></i> {{ __('Register') }}</a> --}}
                {{-- <a href="#" class="w3-bar-item w3-button" style="text-decoration:none;"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a>
                <a href="/companies" class="w3-bar-item w3-button" style="text-decoration:none;"><i class="fa fa-th"></i> COMPANIES</a> --}}
        </div>
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

         <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
        <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button">LOG IN</a>
        <a href="interns.php" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
        <a href="jobs.php" onclick="w3_close()" class="w3-bar-item w3-button">JOBS</a>
        <!--        <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>-->
        <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
    </nav>

                     {{-- </div>
                 </li> --}}
    @endguest
        {{-- </ul> --}}
    {{-- </div> --}}
</div>
<script>
            function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
            } else {
                mySidebar.style.display = 'block';
            }
        }

        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
        }

    </script>

</script>