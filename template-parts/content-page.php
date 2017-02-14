<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package idowebservices
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 entry-header">
            <h1><?php echo $post_title_h1; ?></h1>
        </div>
    </div>
</div>
    <div class="container entry-content">

	 

	
		<?php
			the_content();

			
		?>
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
