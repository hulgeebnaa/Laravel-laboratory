
{{-- <nav class="navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route("home") }}" style="padding-left: 50px; padding-right: 50px" >Laravel</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ route("home") }}">Home</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route("service") }}">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route("about") }}">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route("posts.index") }}">Blog</a>
          </li>
      </ul>
      <form class="form-inline my-2 my-lg-0"> --}}
        {{-- {{-- <input class="form-control mr-sm-2" type="search" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
</nav>  --}}


<nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route("home") }}" style="padding-left: 50px; padding-right: 50px" >Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("home") }}">Home</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route("service") }}">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route("about") }}">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route("posts.index") }}">Blog</a>
                    </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('home') }}">Home</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
</nav>
