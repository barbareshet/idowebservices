<?php
/**

Template Name: Home Page

**/

$h1      = get_post_meta($post->ID, 'h1', true);

$ido_alt = get_post_meta($post->ID, 'ido_alt', true);
 
get_header();?>


    <?php

get_template_part('template-parts/content', 'hero');
get_template_part('template-parts/content', 'about');
get_template_part('template-parts/content', 'optin');
get_template_part('template-parts/content', 'main-services');
get_template_part('template-parts/content', 'personal-skills');



get_footer();?>