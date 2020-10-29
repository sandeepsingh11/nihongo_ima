<?php

include_once(__DIR__ . "/../inc/comp.php");




htmlHeader("Nihongo Ima! | Shunin", []);

?>

    <h1>Shunin</h1>
    <h3>Submit a noun</h3>

    <form method="post">
        Kanji: <input type="text" name="kanji" id="kanji">
        Def: <input type="text" name="def" id="def">
        <input type="submit" value="Submit">
    </form>
</body>
</html>