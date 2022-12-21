<?php

function thumbnail($id,$size) : string {

    $product = new Product(1, "drumkey", "spring", "this is an awesome drum key", 2.99, 15, array("material"=>"steel","weight"=>"250gr"));

    $returnString = '<div class="product" style="width: ' . $size . 'px; height= ' . $size . 'px;"><a href="product">
                <img src=' . asset("images/products/" . $product->getImagePath() . ".png") . ' alt="drumkey">
                <p class="description">
                    ' . $product->getName() . '<br />
                    ' . $product->getDescription() . ' 
                </p>
                <p class="price">
                    &euro;' . $product->getPrice() . '
                </p>
                </a>
            </div>';



    return $returnString;

}