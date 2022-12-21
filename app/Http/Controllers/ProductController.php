<?php

namespace App\Http\Controllers;

class ProductController extends Controller {


    // public function __construct($product) {
    //     $this->product = $product;
    // }

    public function getProductName() {
        return "drumkey";
    }

    public function getProductDescription() {
        return "the one and only drumkey!";
    }



    public function show() { return view('product', ['product' => $this->getProductName(),'description' => $this->getProductDescription()]);}
}