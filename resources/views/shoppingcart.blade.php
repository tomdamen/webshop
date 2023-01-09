@extends('layouts/master')

@section('content')
    <p>this is the shopping cart</p>
    <?= $cart ?>

    <p>Dit zijn de producten</p>
    <?= $products ?>

    <?php 
        foreach ($products as $product) {
           echo thumbnail($product["product_id"],400);
        }

    ?>

    

    
 @endsection