<?php
/**
 * Created by PhpStorm.
 * User: proweb
 * Date: 29/04/18
 * Time: 3:49
 */
namespace App\Http\Controllers;

use Stripe\Stripe;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use App\Libros_pedidos;
use App\Order;
use Carbon\Carbon;


class orderController extends Controller
{
    public function checkout(){
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        $order= Cart::Content();
        return view('/checkout.content', ['seo_title'=>'checkout','order' =>$order,'subtotal'=>$subtotal, 'total'=> $total] );

    }

    /**
     * @param Request $request
     * @return \Stripe\ApiResource
     */
    public function stripePayment(Request $request){
        $order = $this->store();
        foreach(Cart::content() as $item){
            $this->store_line($item, $order->id);
        }


        Stripe::setApiKey(env('STRIPE_SECRET'));
        $token = $request->input('stripeToken');
        print_r(array(
            "amount" => Cart::total(),
            "currency" => "eur",
            "description" => "Order",
            "source" => $token,));
        $charge = \Stripe\Charge::create(array(
            "amount" => Cart::total(),
            "currency" => "eur",
            "description" => "Order",
            "source" => $token,
        ));
        $order->pagado = true;
        $order->save();
        return $charge;
    }
    public function store(){
        $order = new Order();
        $order->fk_usuarios = Auth::id();
        $order->total = Cart::total();
        $order->pagado = 0;
        $order->fecha = Carbon::now();
        if($order->save()){
            return $order;
        }
        else{
            echo 'ERROR';
        }
    }

    public function store_line($item, $id){
        $linea = new Libros_pedidos();
        $linea->fk_pedidos = $id;
        $linea->fk_libros = $item->id;
        $linea->cantidad = $item->qty;
        $linea->precio = $item->price;

            if($linea->save()) {
                return $linea;
            }
    }
}