@extends('layout')


@section('content')
    <article>
        <!-- Review Header -->
    {{-- @include('/books/detail.header')--}}

    <!-- Review Body -->
        <div class="reviews-body">
            @include('/cart.data')
            {{-- @include('/books/detail.aside') --}}
        </div>
        <!-- Review Footer -->
        {{--@include('/books/detail.footer')--}}

    </article>

@endsection

