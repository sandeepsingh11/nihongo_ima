<?php

include_once(__DIR__ . "/partials/comp.php");




htmlHeader("Nihongo Ima! | $page_title", []);

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
        Kana: <input type="text" name="kana" id="kana"><br>
        Romaji: <input type="text" name="roma" id="roma"><br>
        Definition: <input type="text" name="def" id="def"><br><br>

        <div id="verb-type-group" style="display:none">
            Verb type:<br>
            <input type="radio" name="verb-type" id="verb-1" value="1">
            <label for="verb-1">1</label><br>
            <input type="radio" name="verb-type" id="verb-2" value="2">
            <label for="verb-2">2</label><br>
            <input type="radio" name="verb-type" id="verb-3" value="3">
            <label for="verb-3">3</label>
        </div>

        <div id="adj-type-group" style="display:none">
            Adjective type:<br>
            <input type="radio" name="adj-type" id="adj-i" value="i">
            <label for="adj-i">い</label><br>
            <input type="radio" name="adj-type" id="adj-na" value="na">
            <label for="adj-na">な</label>
        </div>

        <input type="submit" value="Submit">
    </form>

<?php htmlFooter();