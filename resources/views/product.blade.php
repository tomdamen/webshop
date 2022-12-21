@extends('layouts/master')

@section('content')

{{-- TODO query naar database voor ophalen product --}}
    
<p>This is te product page of  {{ $product }}</p>

<div class="productContainer">
    <div class="bigProductImage">
        <img src='{{asset('images/{{$product}}.png')}}' alt="drumkey">
    </div>
    <div class="productInformation">
        <div class="productName">{{$product}}</div>
        <div class="productDescription">{{$description}}</div>
    
    </div>
</div>   




<!-- <?= bigProduct() ?> -->
@endsection