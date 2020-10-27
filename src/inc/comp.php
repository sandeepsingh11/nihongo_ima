<?php

function htmlHeader($title = "Nihongo Ima!", $extraCSS = array()) {

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo ($title) ?></title>

        <link rel="stylesheet" href=<?php echo "/style/css/normalize.css" ?>>
        <link rel="stylesheet" href=<?php echo "/style/css/main.css" ?>>
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
        <h1>日本語今</h1>

    <?php
}