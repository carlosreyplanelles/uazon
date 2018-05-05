@extends('layout')


@section('content')
    <article>
        <!-- Review Header -->
    {{-- @include('/books/detail.header')--}}

    <!-- Review Body -->
        <div>
            @include('/books/list.data')
            {{-- @include('/books/detail.aside') --}}
        </div>
        <!-- Review Footer -->
        {{--@include('/books/detail.footer')--}}

    </article>

@endsection

