<?php

include_once(__DIR__ . "/../inc/comp.php");




htmlHeader("Nihongo Ima! | Shunin", []);

?>

    <h1>Shunin</h1>
    <h3>Submit a vocab</h3>

    <form method="post">
        <input type="radio" name="vocab-type" id="noun" value="noun">
        <label for="noun">Noun</label><br>
        <input type="radio" name="vocab-type" id="verb" value="verb">
        <label for="verb">Verb</label><br>
        <input type="radio" name="vocab-type" id="adj" value="adj">
        <label for="adj">Adjective</label><br><br>

        Kanji: <input type="text" name="kanji" id="kanji"><br>
        Furi: <input type="text" name="furi" id="furi">
        <label for="kana">Type "ー" after every furigana break. Ex: べんーきょうー</label><br>
        Romaji: <input type="text" name="roma" id="roma"><br>
        Definition: <input type="text" name="def" id="def"><br><br>

        Type (verbs and adj): <input type="number" name="type" id="type">
        <label for="type">1, 2, 3 for verbs. i, na for adjectives</label><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>