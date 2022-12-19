<?php


function bigProduct() : string {
    $product = new Product(1, "drumkey", "drumkey", "this is an awesome drum key", 2.99, 15, array("material"=>"steel","weight"=>"250gr"));


    return '<div class="bigProductImage">
            <img src=' . asset("images/products/" . $product->getImagePath() . ".png") . ' alt="drumkey">
        </div>
        <div class="productInformation">
            <div class="productName">NEw</div>
            <div class="productDescription">NEw</div>
        
        </div>';

}