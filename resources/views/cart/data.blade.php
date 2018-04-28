<!-- Content -->
<div class="container">
    @foreach($cart as $product)
        <div class="row">
            {{$product->model}}
        </div>
    @endforeach
</div>



