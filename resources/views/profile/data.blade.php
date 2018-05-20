<!-- Content -->
<div class="container">
    <label>PERFIL</label>
    <form method="post" action="{{route('updateProfile', $user->id)}}">
        {{ csrf_field() }}

        <label>
            Nombre:
            <input name = "name"  type = "text" value="{{$user->name}}">
        </label>
        <label>
            Dirección:
            <input name = "address" type = "text" value="{{$user->address}}">
        </label>
        <label>
            Nueva Contraseña:
            <input name = "newPswd" type = "password">
        </label>

        <label>
            Vuelve a introductir tu nuevo password:
            <input name = "newPswdconfirm"  type = "password" >
        </label>
        <label>Introduce tu password actual para confirmar la modificación:</label>
        <label>
            Password:
            <input name = "pswd" type = "password">
        </label>
        <button type="submit">Actualizar</button>
    </form>
    <label>PEDIDOS</label>
    @foreach($pedidos as $pedido)
        <div class="row profile-predidos__pedido">
            {{$pedido->total}}
        @foreach ($lineas[$pedido->id] as $linea)
            <div class="profile-predidos__line">
                {{$libros[$linea->fk_libros]}}
            </div>
        @endforeach
        </div>
    @endforeach



</div>