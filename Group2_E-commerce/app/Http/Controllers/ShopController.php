<?php

namespace App\Http\Controllers;

use App\klCartItem;
use App\product;
use App\product_price;
use App\picture;
use App\Cart;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public function index() 
    {
        $items = product::all();

    	return view ('index', compact('items'));
    }

    public function getProduct()
    {
        $items = product::all();

    	return view ('products.product', compact('items'));
    }

    public function getCart()
    {
        $user = Cart::all();
        $items = klCartItem::all();

    	return view ('carts.cart', compact('items'));
    }

    public function addToCart(Request $request, $id) 
    {
        $pro = product::find($id);
            $new = new klCartItem;
                $new->product_id = $pro->id;
                $new->photo = $pro->photo;
                $new->name = $pro->name;
                $new->quantity = 1;
                $new->price = $pro->price;
                $new->save();

        return redirect('/');
    }

    public function getUser()
    {
        return view ('Users.user');
    }

    public function getSignup()
    {
        return view ('users.signup');
    }

    public function delete($id)
    {
        $car = klCartItem::where('product_id' , $id)->delete();
        return redirect ('/cart');
    }

    public function getCons()
    {
        return view ('consultation.cons');
    }

}
