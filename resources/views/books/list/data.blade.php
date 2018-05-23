<!-- Content -->
<div class="container">
    <div class="row">
        @foreach($libros as $book)
            <form class="list-element__background col-md-2" method="post" action={{route('cartAdd')}}>
                {{ csrf_field() }}
                <input type="hidden" name="bookId" value="{{$book->id}}">
                    <a href="{{route('book_Detail', $book->id)}}">
                        <img class="image-align--center" src="{{asset('assets/images/uploads/books/origen-dan-brown.png')}}" alt="Logo" heigth="120" width = "120">
                    </a>
                    <p>{{$book->isbn}}</p>
                    <p>{{$book->titulo}}</p>
                    <p>{{$book->precio}}</p>
                    <div class="input-position-bottom" ><input class="btn btn--lg btn-primary" type="submit"value="Add to Cart"></div>
            </form>
        @endforeach
    </div>
</div>