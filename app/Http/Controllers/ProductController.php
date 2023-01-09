<?php

namespace App\Http\Controllers;
use App\Models\Products;

class ProductController extends Controller {


    // public function __construct($product) {
    //     $this->product = $product;
    // }

    public function getProductNameById($id) {
        $productName = Products::where('id', $id)->first();
        return $productName;
    }





    public function show($id) {

        $product = $this->getProductNameById($id);
        
        return view('product', compact(['product']));
    }
}