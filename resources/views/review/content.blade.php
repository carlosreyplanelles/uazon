@extends('layout')


@section('content')
    <article>

        <!-- Review Header -->
        @include('review.header')

    <!-- Review Body -->
        <div class="reviews-body">
            @include('review.data')
            @include('review.aside')
        </div>

        <!-- Review Footer -->
        @include('review.footer')

    </article>

@endsection

