<!-- Main header
     ------------------------------------------------------------------------------ -->
<header>

    <!-- Logo -->
    <div>
        <a href="{{ url()->route('home') }}">ProwebUazon</a>
    </div>

    <!-- Header tools -->
    <ul>
        <li><a href="login.html">Login</a></li>
        <li><a href="signup.html">Registrarse</a></li>
        <li><a href="shopping-cart.html">Carrito de la compra</a></li>
    </ul>

    <!-- Navigation -->
    @include('common.navigation')

<!-- Search Widget -->
    @include('common.search_widget')

</header>