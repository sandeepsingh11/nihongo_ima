<?php

include_once(__DIR__ . "/partials/comp.php");




htmlHeader("Nihongo Ima! | $page_title", []);

?>

    <h1>Nouwuns!</h1>
    
    <!-- vocab list -->
    <?php include_once __DIR__ . "/partials/vocab_list.php" ?>


<?php htmlFooter();