<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Libro;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function add(Request $request){
        $book = Libro::find($request->bookId);
        Cart::add($book->id,$book->titulo,1,$book->precio);
        return redirect('/books');
    }

    public function show(){
        $pedido = Cart::Content();
        return view('/cart.content', ['seo_title'=>'Carrito', 'pedido'=>$pedido]);
    }

}