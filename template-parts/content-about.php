<?php
$about_title = get_post_meta($post->ID, 'about_title', true);
 while ( have_posts() ) : the_post();

?>
    <div class="container">
        <div class="row">
            <div class="col m12">
                <h2><?php echo $about_title;?></h2>
            </div>
        </div>
        <div class="row">

            <div class="col m12">
                <?php the_content();?>
            </div>
        </div>
    </div>
    <!--.container-->


    <?php endwhile;?>