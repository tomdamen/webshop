<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="container">

        <header>
            <a href="home">
                <img src="{{asset('images/drumstick.png')}}" alt="drumstick icoon" height="50">
            </a>
            <nav>
                <a href="home">Home</a>
                <a href="catalogue">Catalogus</a>
                <a href="about">About</a>
                <a href="shoppingcart">
                    <img src="{{asset('images/shopping-cart.png')}}" alt="shopping cart" height="25">
                </a>
            </nav>
        </header>


        <div class="product-information">
            <p>Dit is de product pagina</p>
            <p>placeholder for product information</p>

        </div>

    </div>

</body>
</html>