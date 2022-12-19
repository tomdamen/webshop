<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="resources/css/app.css"> -->
    <style>
        /* h2 {color: green} */
    </style>
    <title>Test</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="container">
        <?= makeHeader() ?>
        <div class="content">
            <p>Test for content</p>
            <h2>About!</h2>
            <p>Dit is de about pagina</p>
        </div>

        <?= makeFooter() ?>
    </div>

</body>
</html>