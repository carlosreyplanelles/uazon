<!-- Content -->
<div class="container">
    <form method="post" action="{{route('updateProfile', $user->id)}}">
        {{ csrf_field() }}
        <input name="name"  type ="text" value="{{$user->name}}">
        <input name="email"  type ="email" value="{{$user->email}}">

        <button type="submit">Actualizar</button>
    </form>

</div>