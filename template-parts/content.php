<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package idowebservices
 */

?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="post-wrapp">
           
            <div class="col m6 s12">
                <div class="entry-content">
                    <div class="entry-header">
                        <?php
			if ( is_single() ) {
				the_title( '<h3 class="entry-title">', '</h3>' );
			} else {
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			}

		if ( 'post' === get_post_type() ) : ?>
                            <div class="entry-meta">
                                <div class="post-details">
                                    <i class="fa fa-user"></i>
                                    <?php the_author();  ?>
                                        <i class="fa fa-clock-0"></i>
                                        <time>
                                            <?php the_date(); ?>
                                        </time>
                                        <i class="fa fa-folder"></i>
                                        <?php the_category(', '); ?>
                                            <i class="fa fa-tags"></i>
                                            <?php the_tags('', ', ', ''); ?>

                                                <div class="post-comments-badge left">
                                                    <a href="<?php comments_link();?>"><span class="fa fa-comments"></span> <?php comments_number(0, 1, '%'); ?></a>
                                                </div>
                                                <!--end post-comments-->
                                                <?php edit_post_link('Edit', '<div><i class="fa fa-pencil"></i>','</div>'  ); ?>
                                                    <!-- a WP function that lets the admin edit the post, bu default has value, so if you need it to be personalize you can the <div> are before and after arguments-->

                                </div>
                                <!--post-details-->
                            </div>
                            <!-- .entry-meta -->
                            <?php
		endif; ?>
                    </div>
                    <!-- .entry-header -->
                    <?php
			the_excerpt( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'idowebservices' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'idowebservices' ),
				'after'  => '</div>',
			) );
		?>
                </div>
                <!-- .entry-content -->
            </div>
            <!--/.col m6-->
 <div class="col m6 s12">
                <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail(array(650, 350)); ?>
                    </a>
                    <?php endif; ?>
            </div>
            <!--/.col m6-->
        </div>




    </article>
    <!-- #post-## -->