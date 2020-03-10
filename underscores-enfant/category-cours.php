<?php
get_header();
?>
<div id="primary" class ="contenu-evenement">

    <h1>Tous les cours</h1>
        <main id="main" class="tableau-grid">
        <?php
        
        while ( have_posts() ){
            the_post();
            $titreCours = substr(get_the_title(), 0, 7);
            $sessionCours = substr(get_the_title(), 4, 1);
            $domaineCours = substr(get_the_title(), 5, 1);

            echo "<h3 style = grid-row:". $sessionCours .";grid-column:" .$domaineCours .';>'. $titreCours ."</h3>";
        }

        ?>

    </main>

</div>