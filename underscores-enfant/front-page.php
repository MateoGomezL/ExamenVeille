<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
        echo '<ul class=menuCours><li><a href=category/cours>Cours</a></li><li><a href=#>Ateliers</a></li><li><a href=#>Évènements</a></li><li><a href=#>Nouvelles</a></li></ul>';
        
        //Nom de la question
        echo '<h1>Question 3</h4>';

        // The Query
        $args = array(
            "category_name" => "cours",
            "posts_per_page" => 29,
            "orderby" => "title",
            "order" => "ASC"
        );
        $query1 = new WP_Query( $args );

        // The Loop
        $idCours = 1;
        while ( $query1->have_posts() ) {
            $query1->the_post();
            $sessionCours = substr(get_the_title(), 4, 1);
            $domaineCours = substr(get_the_title(), 5, 1);

            //echo '<h4>'.$idCours .". " .get_the_title() .' - session: ' .$sessionCours .' - domaine: ' .$domaineCours .'</h4>';

            echo '<h4>'.$idCours .". " .'<a href=' .get_post_permalink() .'>' .get_the_title() .'</a>' .'<span class="couleurSession">' .' - session: ' .$sessionCours .'</span>' .'<span class="couleurdomaine">' .' - domaine: ' .$domaineCours .'</span>' .'</h4>';

            $idCours++;
        }
        
        /* Restore original Post Data 
        * NB: Because we are using new WP_Query we aren't stomping on the 
        * original $wp_query and it does not need to be reset with 
        * wp_reset_query(). We just need to set the post data back up with
        * wp_reset_postdata().
        */
        wp_reset_postdata();
        ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
//get_footer();
