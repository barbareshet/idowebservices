<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package idowebservices
 */

get_header(); ?>

	

		<?php
		if ( have_posts() ) : ?>
<section class="center-align" id="blog-page-title" data-type="background" data-speed="2">

        <?php 
        
        the_archive_title( '<h1 class="page-title">', '</h1>' ); 
        the_archive_description( '<p class="lead taxonomy-description">', '</p>' );
        
        ;?>
   

    </section>
    <div id="primary" class="content-area">
        <main id="main" class="site-main container" role="main">
            <div class="row">
                <div class="col-md-12"   >
                    <header class="page-header">
				<?php
					
					
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();
;?>
		
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
else :

			get_template_part( 'template-parts/content', 'none' );

		endif; 

get_footer();
