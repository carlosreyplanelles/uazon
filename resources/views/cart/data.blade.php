<!-- Content -->
<div class="container">
    @if(Auth::check())
        @foreach($pedido as $item)
                <div class="row">
                    {{$item->name}}
                    {{$item->qty}}
                    {{$item->price}}
                </div>
        @endforeach
            <a href="{{route('checkout')}}"  class="btn btn-primary">
                Checkout
            </a>
        @else
        <p>Para poder realizar un pedido <a  href="{{ route('register') }}">registrate</a> o <a  href="{{ route('login') }}">accede</a> a tu cuenta</p>
    @endif
</div>



