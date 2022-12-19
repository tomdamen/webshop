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
            <div class="grid2columns">
                <div class="gridLeft">
                    <p>Niets is zo irritant als kapotte muziekinstrumenten. Daarom kun je hier vervangende producten bestellen.</p>

                </div>
                <div class="gridRight">
                    <p>Contactinformatie:</p>
                    <p>Tom Damen</p>
                    <p>CapTrack gebouw</p>
                </div>
            </div>
        </div>

        <?= makeFooter() ?>
    </div>

</body>
</html>