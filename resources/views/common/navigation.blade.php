<style>
    .navigation {

    }

    .navigation__list {
        margin: 0;
        padding: 0;
    }

    .navigation__item {
        display: inline-block;
        margin-right: 2%;
    }
</style>

<!-- Main navigation -->
<nav class="navigation">
        <ul class="navigation__list">
                <li class="navigation__item"><a class="navigation__link navigation__link--active" href="{{route('books')}}">Libros</a></li>
                <li class="navigation__item"><a class="navigation__link" href="authors.html">Autores</a></li>
                <li class="navigation__item"><a class="navigation__link" href="{{route('books')}}")>Lo más leído</a></li>
                <li class="navigation__item"><a class="navigation__link" href="reviews.html">Críticas de libros</a></li>
                <li class="navigation__item"><a class="navigation__link" href="contact.html">Contacto</a></li>
        </ul>
</nav>