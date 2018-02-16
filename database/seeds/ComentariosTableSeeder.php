<?php

use Illuminate\Database\Seeder;

class ComentariosTableSeeder extends Seeder
{

    /**
     *
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comentarios')->delete();
        
        \DB::table('comentarios')->insert(array (
            0 => 
            array (
                'id' => 1,
                'autor' => 'Esther Cortés',
                'descripcion' => 'el libro de Alicia es más que recomendable, casi imprescindible; y llama para ser disfrutado en distintos momentos y situaciones, con distintas edades, porque cada vez la lectura es distinta... pero siempre maravillosa.',
                'validado' => 1,
                'fk_libros' => 2,
            ),
            1 => 
            array (
                'id' => 2,
                'autor' => 'Laura Revert',
                'descripcion' => 'A mí, personalmente, no me ha gustado mucho el libro de Alicia en el País de las Maravillas, pues aunque está bien redactado y a veces llega a ser entretenido no me ha resultado atrayente. En parte creo que ha sido por los juegos de palabras, pues al traducirlos pierden la mayoría de su gracia y se convierten en confusiones que a mi parecer resultan pesadas e ilógicas.

A mí, personalmente, no me ha gustado mucho el libro de Alicia en el País de las Maravillas, pues aunque está bien redactado y a veces llega a ser entretenido no me ha resultado atrayente. En parte creo que ha sido por los juegos de palabras, pues al traducirlos pierden la mayoría de su gracia y se convierten en confusiones que a mi parecer resultan pesadas e ilógicas.

A mí, personalmente, no me ha gustado mucho el libro de Alicia en el País de las Maravillas, pues aunque está bien redactado y a veces llega a ser entretenido no me ha resultado atrayente. En parte creo que ha sido por los juegos de palabras, pues al traducirlos pierden la mayoría de su gracia y se convierten en confusiones que a mi parecer resultan pesadas e ilógicas.

vA mí, personalmente, no me ha gustado mucho el libro de Alicia en el País de las Maravillas, pues aunque está bien redactado y a veces llega a ser entretenido no me ha resultado atrayente. En parte creo que ha sido por los juegos de palabras, pues al traducirlos pierden la mayoría de su gracia y se convierten en confusiones que a mi parecer resultan pesadas e ilógicas.

A mi, personalmente, no me ha gustado mucho el libro, pues aunque está bien redactado y a veces llega a ser entretenido, no me ha resultado atrayente.',
                'validado' => 1,
                'fk_libros' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'autor' => 'Cristina Sanchis',
                'descripcion' => 'He leído dos veces este libro y lo recomiendo sin ninguna duda. Charles Dickens, al igual que George Elliot analiza y describe la historia a través de los ojos de un niño. Es un libro entretenido y no tiene nada que ver con muchos de los bestsellers a los que estamos acostumbrados hoy en día, muy comerciales, y a los que te enganchas desde la primera hoja a la última pero que no aportan mucho más que un breve entretenimiento.',
                'validado' => 1,
                'fk_libros' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'autor' => 'Pilar Ribau',
            'descripcion' => 'Me leí Ana Karenina hace ni sé y cada año lo releo (siempre en invierno, no sé por qué). Ha sido el libro que inspiró el primer relato del que no me avergüenzo y es al que recurro cada vez que estoy triste, aunque sólo sea para tocar sus tapas',
                'validado' => 1,
                'fk_libros' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'autor' => 'Carolina Romero',
            'descripcion' => 'Hace un par de días que he terminado este libro del gran Liev (o León) Tolstói. He tenido una sensación parecida a la que solo me han dado unas pocas novelas, como la Odisea, el Quijote, Madame Bovary o Cien años de soledad. En otras palabras, es uno de los libros que definitivamente me llevaría a una isla desierta. ',
                'validado' => 1,
                'fk_libros' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'autor' => 'Andrea Zamora',
                'descripcion' => 'Es el libro que más me ha gustado hasta ahora, es un libro que te envuelve en la historia y recomiendo que se lo lea todo el mundo. ',
                'validado' => 1,
                'fk_libros' => 4,
            ),
        ));
        
        
    }
}