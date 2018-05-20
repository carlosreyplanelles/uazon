<!-- Main header
     ------------------------------------------------------------------------------ -->
.header-tools {
float: right;
margin: 0;
}

.header-tools__item {
display: inline-block;
}
<header>
    <div class="container">
        <div class="row">

            <!-- Columna IZQ 40% de tamaño en pantallas grandes (> 1024) -->
            <div class="col-lg-4">

                <!-- Logo -->
                <div>
                    <a href="{{ url()->route('home') }}">ProwebUazon</a>
                </div>

            </div>

            <!-- Columna DER 80% de tamaño en pantallas grandes (> 1024) -->
            <div class="col-lg-8">

                <!-- Header tools -->
                <ul class="header-tools">
                    <li class="header-tools__item">
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

                    <li class="header-tools__item"><a href="{{route('showCart') }}">Carrito de la compra</a></li>
                </ul>

            </div>
        </div>


        <div class="row">
            <div class="col-lg-8">
                <!-- Navigation -->
                @include('common.navigation')
            </div>
            <div class="col-lg-4">
                <!-- Search Widget -->
                @include('common.search_widget')
            </div>
        </div>
    </div>








</header>