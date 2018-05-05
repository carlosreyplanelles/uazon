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
        Stripe::setApiKey(env('STRIPE_KEY'));
        $token = $request->input('stripeToken');
        $charge = \Stripe\Charge::create(array(
            "amount" => Cart::total(),
            "currency" => "eur",
            "description" => "Order",
            "source" => $token,
        ));
        return $charge;
    }
}