

<nav class="navbar">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" id = "toogle" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
               <i class="fa fa-laptop" style="margin-right: 7px;"></i>SMA
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>
		      <ul class="nav navbar-nav">
		      <li class="{{ Request::is('/') ? 'active' : '' }}" ><a href="{{url('/')}}"><i class="fa fa-home"></i>Home</a></li>
		      <li class="{{ Request::is('services') ? 'active' : '' }}"><a href="{{url('/services')}}"><i class="fa fa-file"></i>Bio</a></li>
		      <li class="{{ Request::is('posts') ? 'active' : '' }}"><a href="{{url('/posts')}}"><i class="fa fa-book"></i>Blog</a></li>
              <li class="{{ Request::is('shop') ? 'active' : '' }}"><a href="{{url('/shop')}}"><i class="fa fa-shopping-bag"></i>Shop</a></li>

            </ul>


            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
            <li><a href="{{route('product.shopingCart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    Your Cart <span class="badge badge-danger">{{Session::has('cart')?Session::get('cart')->TotalQtn:''}}</span>
                    </a>
                      </li>
{{--                     <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li> --}}
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                        	<li><a href="{{url('/dashboard')}}">Dashboard</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

