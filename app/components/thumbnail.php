<?php

use App\Models\Products;

function thumbnail(int $id,int $size) : string {

    // TODO Ophalen id uit database
    // TODO Dynamisch invullen $product



    $product = new Product(
        $id, 
        Products::where('id', $id)->value('title'), 
        Products::where('id', $id)->value('title'), 
        Products::where('id', $id)->value('description'), 
        Products::where('id', $id)->value('price'), 
        Products::where('id', $id)->value('stock'));

    $returnString = '<div class="product" style="width: ' . $size . 'px; height= ' . $size . 'px;"><a href="product/' . $id . '">
                <img src=' . asset("images/products/" . $product->getImagePath() . ".png") . ' alt="drumkey">
                <p class="description">
                    ' . $product->getName() . 
                '</p>
                <p class="price">
                    &euro;' . $product->getPrice() . '
                </p>
                </a>
            </div>';



    return $returnString;

}