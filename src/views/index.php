<?php

include_once(__DIR__ . "/partials/comp.php");




htmlHeader("Nihongo Ima!", []);



// vocab type
if (!$dailyVocab['type']) {
    $vocabType = 'Noun';
}
else {
    if ( ($dailyVocab['type'] == 1) || ($dailyVocab['type'] == 2) || ($dailyVocab['type'] == 3) ) {
        $vocabType = 'Verb - Type ' . $dailyVocab['type'];
    }
    else {
        $vocabType = $dailyVocab['type'] . ' - Adjective';
    }
}
?>


<div id="landing-container">
    
    <!-- daily word -->
    <div id="daily-container">
        <div id="daily">
            <div id="vocab">
                <?php
                    $furigana_arr = explode('ー', $dailyVocab['furi']);
                    
                    // split utf-8 multibyte chars (get each kanji / kana)
                    $pattern = '/(?<!^)(?!$)/u';
                    $kanji_arr = preg_split($pattern,$dailyVocab['kanji']);

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
            </div>

            <div id="romaji"><?php echo htmlentities($dailyVocab['romaji']) ?></div>
            <div id="vocab-type"><?php echo htmlentities($vocabType) ?></div>
            <div id="def"><?php echo htmlentities($dailyVocab['definition']) ?></div>

            <div id="jisho-link"><a href="https://jisho.org/search/<?php echo htmlentities($dailyVocab['kanji']) ?>">Jisho Definition</a></div>
        </div>
    </div>



    <!-- search -->
    <div id="search-container">
        <form method="get">
            <label for="search">Search for a vocab: </label><br>
            <input type="search" name="search" id="search">

            <label for="vocab-type">Search for this type:</label>
            <select name="vocab-type" id="vocab-type">
                <option value="any">Any</option>
                <option value="nouns">Nouns</option>
                <option value="verbs">Verbs</option>
                <option value="adjectives">Adjectives</option>
            </select>

        
            <input type="submit" value="Search">
        </form>
    </div>
</div>




<?php
if (sizeof($vocab_arr) > 0) {
    include_once __DIR__ . '/partials/vocab_list.php';
}
?>

    
<?php htmlFooter();