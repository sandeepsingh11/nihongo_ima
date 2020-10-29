<?php

include_once(__DIR__ . "/../inc/comp.php");




htmlHeader("Nihongo Ima! | Nouns", []);

?>

    <h1>Nouwuns!</h1>
    <h3>UwU</h3>
    
    <?php 
        foreach ($nouns_arr as $noun) {
            ?>
            <ruby>
                <?php echo $noun['kanji'] ?>
            </ruby>

            <div class="def-container">
                <div class="def">Definition: <?php echo $noun['definition'] ?></div>
            </div>
            <?php
        } 
    ?>

</body>
</html>