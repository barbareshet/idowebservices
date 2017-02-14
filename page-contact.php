<?php

/**

Template Name: Home Page

**/

get_header();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>



<?php endwhile;  endif;?>
<?php get_footer();?>
