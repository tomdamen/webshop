@extends('layouts/master')

@section('content')



{{-- TODO add JavaScript to increase/decrese product counter --}}



<?php print_r($product) ?>

<p>Number added: <?php if(isset($_POST["currentNumber"])) echo $_POST["currentNumber"] ?></p>
    
<p>This is te product page of  {{ $product["title"] }}</p>

<div class="productContainer">
    <div class="bigProductImage">
        <img src='{{asset('images/products/' . $product["title"] . '.png')}}' alt="drumkey">
    </div>
    <div class="productInformation">
        <div class="productName">{{$product["title"]}}</div>
        <div class="productDescription">{{$product["description"]}}</div>
        <form action="./" method="POST" class="addToCartSelector">
            <div class="addToCartSelectorQuantity">
                <span id="reduceNumber">-</span>
                <input type="number" value="0" id="currentNumber" name="currentNumber">
                <span id="increaseNumber">+</span>
            </div>
            <div class="addToCartButton">
                <button>Add to cart</button>
            </div>
        </form>
    
    </div>
</div>   




<!-- <?= bigProduct() ?> -->
@endsection