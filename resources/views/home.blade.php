


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="container">
        <?= makeHeader() ?>
        <div class="content">
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
        </div>

        <?= makeFooter() ?>

    </div>
</body>
</html>