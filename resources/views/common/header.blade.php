<!-- Main header
     ------------------------------------------------------------------------------ -->

<header>
    <div class="container">
        <div class="row">

            <!-- Columna IZQ 40% de tamaño en pantallas grandes (> 1024) -->
            <div class="col-md-4">

                <!-- Logo -->
                <div>
                    <a href="{{ url()->route('books') }}"><img src="{{asset('assets/images/favicon96x96.png')}}" width="80" heigth="80"></a>
                </div>

            </div>

            <!-- Columna DER 80% de tamaño en pantallas grandes (> 1024) -->
            <div class="col-md-8">
                <!-- Header tools -->
                        @if (Auth::guest())
                            <a href="{{ route('login') }}">Login</a>
                        @else
                            <a class="text-float--right" href="{{route('profile', Auth::id())}}">
                                    {{ csrf_field() }}
                                    <img src="{{asset('assets/images/Users-User-Male-2-icon.png')}}" width="60" heigth="60">
                                </a>

                            <a class="text-float--right" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                {{ csrf_field() }}
                            </form>

                        @endif
                            <a href="{{route('showCart') }}">
                                <img src="{{asset('assets/images/carrito.png')}}" width="60" heigth="60">
                            </a>


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