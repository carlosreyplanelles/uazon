<!-- Content -->
<div class="row">
@foreach($libros as $book)

        <div class="text-align--center list-element__background col-md-1">
            <img class="image-align--center" src="{{asset('assets/images/uploads/books/origen-dan-brown.png')}}" alt="Logo" heigth="120" width = "120">
            <p>{{$book->isbn}}</p>
            <p>{{$book->titulo}}</p>
            <p>{{$book->precio}}</p>
            <p><button>Add to Cart</button></p>
        </div>
@endforeach
</div>
</div>
