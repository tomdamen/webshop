<?php



function makeHeader() : string {
    $logo = asset('images/drumstick.png');
    $shoppingCart = asset('images/shopping-cart.png');
    $string = "<header>
            <a href='home'>
                <img src={$logo} alt='drumstick icoon' height='50'>
            </a>
            <nav>
                <a href='home'>Home</a>
                <a href='catalogue'>Catalogus</a>
                <a href='about'>About</a>
                <a href='shoppingcart'>
                    <img src='{$shoppingCart}' alt='shopping cart' height='25'>
                </a>
            </nav>
        </header>";
    return $string;
} 