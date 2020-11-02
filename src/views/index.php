<?php

include_once(__DIR__ . "/partials/comp.php");




htmlHeader("Nihongo Ima!", []);

?>


<h1>Hewwo oworld</h1>


<form method="get">
    <label for="search">Search for a vocab: </label><br>
    <input type="search" name="search" id="search"><br><br>

    <input type="submit" value="Search">
</form>


<?php
if (sizeof($vocab_arr) > 0) {
    include_once __DIR__ . '/partials/vocab_list.php';
}
?>

    
<?php htmlFooter();