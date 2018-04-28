<!-- Content -->
        <div class=" col-md-12 container container__background">
            <div class="col-md-2">
                <img class="img__bookDetail" src="{{asset('assets/images/uploads/books/origen-dan-brown.png')}}" alt="Logo" heigth="180" width = "180">
            </div>
                <div class="col-md-10 bookDetail__container-info">
                    <p>{{$book->isbn}}</p>
                    <p>{{$book->titulo}}</p>
                    <p>{{$book->precio}}</p>
                </div>
                    <div><button>Add to Cart</button></div>
        </div>
