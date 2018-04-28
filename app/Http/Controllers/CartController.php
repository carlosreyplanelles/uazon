<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Libro;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function add(Request $request){
        $book = $libro=Libro::find($request->bookId);
        Cart::add($book->isbn, $book, 1, $book->precio)->associate('Libro');
        return redirect('/books');
    }

    public function show(){
        $cart = Cart::Content();
        foreach($cart as $product){
            var_dump($product->name);
        }
        //return view('/cart.content', ['seo_title'=>'Carrito', 'cart'=>Cart::content()]);
    }

}