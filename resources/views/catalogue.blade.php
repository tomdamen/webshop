@extends('layouts/master')

@section('content')
<div class="productsGrid">

<?= print_r(makeData()); ?>

    <?= thumbnail(1,300,makeData()) ?>
    <?= thumbnail(2,300,makeData()) ?>
    <?= thumbnail(1,300,makeData()) ?>
    <?= thumbnail(2,300,makeData()) ?>
    <?= thumbnail(1,300,makeData()) ?>
    <?= thumbnail(1,300,makeData()) ?>
    <?= thumbnail(1,300,makeData()) ?>
    <?= thumbnail(2,300,makeData()) ?>
    <?= thumbnail(1,300,makeData()) ?>
</div>
@endsection