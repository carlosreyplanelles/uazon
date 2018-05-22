<!-- Content -->
<div class="container">
    <label>PERFIL</label>

    <form class="row input-align--padding" method="post" action="{{route('updateProfile', $user->id)}}">
        {{ csrf_field() }}
        <div class="container list-element__background">
            <div class="row input-align--padding">
                <label class="col-md-6 align--right"> Nombre:</label>
                <input class ="col-md-4" name = "name"  type = "text" value="{{$user->name}}">
            </div>

            <div class = "row input-align--padding">
                <label class="col-md-6 align--right"> Dirección:</label>
                <input class="col-md-4" name = "address" type = "text" value="{{$user->address}}">
            </div>

            <div class = "row input-align--padding">
                <label class="col-md-6 align--right"> Nueva Contraseña:</label>
                <input class="col-md-4" name = "newPswd" type = "password">
            </div>

            <div class="row input-align--padding">
                <label class="col-md-6 align--right" >
                    Vuelve a introductir tu nuevo password:
                </label>
                <input class="col-md-4" name = "newPswdconfirm"  type = "password" >
            </div>

            <div class="row input-align--padding">
                <label class="col-md-6 align--right">Introduce tu password actual para confirmar la modificación:</label>
                <input class="col-md-4" name = "pswd" type = "password">
            </div>
        </div>
        <button type="submit" class="btn btn--lg btn-primary ">Actualizar</button>
    </form >

    <label>PEDIDOS</label>
    <div class ="container">
    @foreach($pedidos as $pedido)
        <div class="row list-element__background">
            <label>{{$pedido->created_at}}</label>-
            @if($pedido->pagado == true)
                <label>Pagado</label>
            @else
                <label>Pendiente</label>
            @endif
            <div class ="container">
                @foreach ($lineas[$pedido->id] as $linea)
                    <div class="row list-element--border">
                        <picture>
                            <img class="input-align--padding" src="{{asset('assets/images/uploads/books/origen-dan-brown.png')}}" width="120" height="120">
                        </picture>
                        <label class="col-md-4 align--center">{{$libros[$linea->fk_libros]}}</label>
                        <label class="col-md-1 align--center">{{$linea ->cantidad}}</label>
                        <label class="col-md-1 align--center">{{$linea->precio}}</label>
                    </div>
                @endforeach
            </div>
            <label class="align--right">Total: {{$pedido->total}}</label>
        </div>
    @endforeach
    </div>
</div>