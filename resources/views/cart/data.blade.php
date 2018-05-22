<!-- Content -->
<div class="container">
    @if(Auth::check())
        @foreach($pedido as $item)
            <div class="container container__background">
                <div class="row">
                    <label class="col-md-4 text-align--center">{{$item->name}}</label>
                    <label class="col-md-4 text-align--center">{{$item->qty}}</label>
                    <label class="col-md-4 text-align--center">{{$item->price}}€</label>
                </div>
            </div>

        @endforeach
            <a href="{{route('checkout')}}"  class="btn btn-primary btn--lg text-align--center">
                Checkout
            </a>
        @else
        <p>Para poder realizar un pedido <a  href="{{ route('register') }}">registrate</a> o <a  href="{{ route('login') }}">accede</a> a tu cuenta</p>
    @endif
</div>



