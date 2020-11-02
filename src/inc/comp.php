<?php

function htmlHeader($title = "Nihongo Ima!", $extraCSS = array()) {

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo ($title) ?></title>
        <base href="http://nihongoima.xyz/">

        <!-- <link rel="stylesheet" href=<?php // echo "/style/css/normalize.css" ?>> -->
        <!-- <link rel="stylesheet" href="/style/css/main.css"> -->
        <?php

        if (sizeof($extraCSS) > 0) {
            foreach ($extraCSS as $css) {
                ?>

                <script src="<?php echo "/style/css/$css" ?>"></script>
                
                <?php
            }
        }

        ?>

    </head>
    <body>
        <?php include_once __DIR__ . '/nav.php' ?>
        <h1>日本語今！</h1>

    <?php
}



function htmlFooter() {
    ?>

    <script type="text/javascript" src="/js/shunin.js"></script>

    </body>
    </html>
    
    <?php
}