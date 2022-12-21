@extends('layouts.master')

@section('content')
<div class="welcome">
    <h1>Welkom bij trom.com!</h1>
    <p>De plek voor allerhande drumspullen.</p>

    <p>Een greep uit ons assortiment:</p>
</div>
<div class="caroussel">
    <?= thumbnail(1,250) ?>
    <?= thumbnail(1,250) ?>
    <?= thumbnail(1,250) ?>
    <?= thumbnail(1,250) ?>
</div>
        
@endsection