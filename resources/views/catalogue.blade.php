<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product catalogue</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="container">
        <?= makeHeader() ?>

        <div class="content">

            <div class="productsGrid">

                <?= thumbnail(1,300) ?>
                <?= thumbnail(1,300) ?>
                <?= thumbnail(1,300) ?>
                <?= thumbnail(1,300) ?>
                <?= thumbnail(1,300) ?>
                <?= thumbnail(1,300) ?>
                <?= thumbnail(1,300) ?>
                <?= thumbnail(1,300) ?>
                <?= thumbnail(1,300) ?>
            </div>
        </div>

        <?= makeFooter() ?>


    </div>
    
</body>
</html>