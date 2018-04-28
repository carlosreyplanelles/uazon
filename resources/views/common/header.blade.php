<!-- Main header
     ------------------------------------------------------------------------------ -->
<header>

    <!-- Logo -->
    <div>
        <a href="{{ url()->route('home') }}">ProwebUazon</a>
    </div>

    <!-- Header tools -->
    <ul>
        <li>
        @if (Auth::guest())
                <a href="{{ route('login') }}">Login</a>
        @else
            <p><a href="{{route('profile', Auth::id())}}">
                    {{ csrf_field() }}
                    <img src="{{asset('assets/images/Users-User-Male-2-icon.png')}}" width="60" heigth="60">
                </a>
            </p>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    {{ csrf_field() }}
                </form>

        @endif
        </li>




        <li><a href="{{route('showCart') }}">Carrito de la compra</a></li>
    </ul>

    <!-- Navigation -->
    @include('common.navigation')

<!-- Search Widget -->
    @include('common.search_widget')

</header>