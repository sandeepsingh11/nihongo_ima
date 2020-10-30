<?php

include_once(__DIR__ . "/../inc/comp.php");




htmlHeader("Nihongo Ima! | Verbs", []);

?>

    <h1>Vewerbs!</h1>
    
    <?php 
        foreach ($vocab_arr as $vocab) {
            $furigana_arr = explode('ー', $vocab['furi']);
            
            // split utf-8 multibyte chars (get each kanji / kana)
            $pattern = '/(?<!^)(?!$)/u';
            $kanji_arr = preg_split($pattern,$vocab['kanji']);

            ?>
            <ruby>
                <?php
                    for ($i = 0; $i < sizeof($kanji_arr); $i++) {
                        echo htmlentities($kanji_arr[$i]);
                        ?>
                        <rt><?php 
                            if ($i < sizeof($furigana_arr)) {
                                echo htmlentities($furigana_arr[$i]); 
                            }
                        ?></rt>
                        <?php
                    }
                ?>
            </ruby>

            <div class="romaji">
                <?php echo htmlentities($vocab['romaji']); ?>
            </div>

            <div class="def-container">
                <div class="def">Definition: <?php echo $vocab['definition'] ?></div>
            </div>
            <?php
        } 
    ?>

</body>
</html>