@extends('layouts/master')

@section('content')
<div class="productsGrid">

<?= print_r(makeData()); ?>

    <?= thumbnail(1,300) ?>
    <?= thumbnail(3,300) ?>
    <?= thumbnail(1,300) ?>
    <?= thumbnail(3,300) ?>    
    <?= thumbnail(1,300) ?>
    <?= thumbnail(3,300) ?>    
    <?= thumbnail(1,300) ?>
    <?= thumbnail(3,300) ?>
</div>
@endsection