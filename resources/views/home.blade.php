<?php 
// require_once('../app/components/header.php');
?>


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
            <p>Dit is de home page</p>
        </div>

        <?= makeFooter() ?>

    </div>
</body>
</html>