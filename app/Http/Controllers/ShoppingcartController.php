<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\CartsProducts;

class ShoppingcartController extends Controller {
    public function show() {
        $cart = Cart::where("user_id", 1)->get();
        $products = CartsProducts::where("user_id", 1)->get();
        return view('shoppingcart', compact(["cart","products"]));
    }
}