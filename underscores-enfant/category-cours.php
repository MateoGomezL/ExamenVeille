<?php
get_header();
?>
<div id="primary" class ="contenu-evenement">

    <h1>Tous les cours</h1>
        <main id="main" class="tableau-grid">
        <?php
        echo '<h3 class=headerGrid style = grid-row:1; grid-column:1>Environnement</h3>';
        echo '<h3 class=headerGrid style = grid-row:1; grid-column:2>Animation</h3>';
        echo '<h3 class=headerGrid style = grid-row:1; grid-column:3>Design</h3>';
        echo '<h3 class=headerGrid style = grid-row:1; grid-column:4>Programmation</h3>';
        echo '<h3 class=headerGrid style = grid-row:1; grid-column:5>Intégration</h3>';

        while ( have_posts() ){
            the_post();
            $titreCours = substr(get_the_title(), 0, 7);
            $sessionCours = substr(get_the_title(), 4, 1) + 1;
            $domaineCours = substr(get_the_title(), 5, 1);

            if($domaineCours == 1){
                $style = "Rangee1";
            }
            if($domaineCours == 2){
                $style = "Rangee2";
            }
            if($domaineCours == 3){
                $style = "Rangee3";
            }
            if($domaineCours == 4){
                $style = "Rangee4";
            }
            if($domaineCours == 5){
                $style = "Rangee5";
            }

            echo "<h3 class=".$style ." style = grid-row:". $sessionCours .";grid-column:" .$domaineCours .';>'. $titreCours ."</h3>";
        }

        ?>

    </main>

</div>

<?php
get_footer();