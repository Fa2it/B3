<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Brand Name') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="productDropDownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Product
                  </a>
                  <div class="dropdown-menu" aria-labelledby="productDropDownMenuLink">
                    <a class="dropdown-item" href="{{ route('product', ['prod' => 'aa']) }}">Product A</a>
                    <a class="dropdown-item" href="{{ route('product', ['prod' => 'bb']) }}">Product B</a>
                    <a class="dropdown-item" href="{{ route('product', ['prod' => 'cc']) }}">Product C</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="pricingDropDownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pricing
                  </a>
                  <div class="dropdown-menu" aria-labelledby="pricingDropDownMenuLink">
                    <a class="dropdown-item" href="{{ route('price', ['price' => 'pa']) }}">Price Action</a>
                    <a class="dropdown-item" href="{{ route('price', ['price' => 'pb']) }}">Price2 Action</a>
                    <a class="dropdown-item" href="{{ route('price', ['price' => 'pc']) }}">Price3 Action</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="resourcesDropDownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Resources
                  </a>
                  <div class="dropdown-menu" aria-labelledby="resourcesDropDownMenuLink">
                    <a class="dropdown-item" href="{{ route('resource', ['resc' => 'Resource A']) }}">Resource A</a>
                    <a class="dropdown-item" href="{{ route('resource', ['resc' => 'Resource B']) }}">Resource B</a>
                    <a class="dropdown-item" href="{{ route('resource', ['resc' => 'Resource C']) }}">Resource C</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
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
    </div>
</nav>
