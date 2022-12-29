@extends('layouts/master')

@section('content')

{{-- TODO query naar database voor ophalen product --}}



<?php print_r($product) ?>

<p>Number added: <?php if(isset($_POST["currentNumber"])) echo $_POST["currentNumber"] ?></p>
    
<p>This is te product page of  {{ $product }}</p>

<div class="productContainer">
    <div class="bigProductImage">
        <img src='{{asset('images/products/' . $product . '.png')}}' alt="drumkey">
    </div>
    <div class="productInformation">
        <div class="productName">{{$product}}</div>
        <div class="productDescription">{{$description}}</div>
        <form action="product" method="POST" class="addToCartSelector">
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