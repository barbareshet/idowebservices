<?php
/**
 * @package bootstrap to wordpress
 */
$post_title_h1 = get_post_meta($post->ID, 'h1', true);
$img_id = get_post_thumbnail_id($post->ID);
$image = wp_get_attachment_image_src($img_id, $optional_size);
$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);

?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-header">
            <h1><?php echo $post_title_h1; ?></h1>

            <?php if ( 'post' == get_post_type() ) : ?>




                <div class="post-details">
                    <div class="chip">
                        <i class="fa fa-user"></i>
                        <?php the_author();?>
                    </div>
                    <div class="chip">
                        <i class="fa fa-folder"></i>
                        <?php the_category(', '); ?>
                    </div>
                    <div class="chip">
                        <i class="fa fa-tags"></i>
                        <?php the_tags('', ', ', ''); ?>
                    </div>

                    <div class="chip">
                        <i class="fa fa-clock-o"></i>
                        <time>
                            <?php the_date(); ?>
                        </time>
                    </div>



                    <div class="post-comments-badge left">
                        <a href="<?php comments_link();?>" class="btn-floating btn-large waves-effect waves-light grey darken-2
"><span class="fa fa-comments"></span> <?php comments_number(0, 1, '%'); ?></a>
                    </div>
                    <!--end post-comments-->
                    <?php edit_post_link('Edit', '<div><i class="fa fa-pencil"></i>','</div>'  ); ?>
                        <!-- a WP function that lets the admin edit the post, bu default has value, so if you need it to be personalize you can the <div> are before and after arguments-->

                </div>
                <!--post-details-->

                <?php endif; ?>
        </div>
        <!-- .entry-header -->

        <?php if (has_post_thumbnail() ) {//check for feature image?>
            <div class="post-image">

                <img src="<?php echo($image[0]); ?>" alt="<?php echo $alt_text; ?>" />
            </div>
            <!--end post-image-->
            <?php } ?>
                <div class="post-body">
                    <?php the_content();?>
                </div>
                <!--end excerpt-->

    </article>
    <!-- #post-## -->