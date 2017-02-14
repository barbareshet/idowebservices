<?php
$dev = get_post_meta($post->ID, 'dev_title', true);
$seo = get_post_meta($post->ID, 'seo_title', true);
?>
    <section id="main-services">
        <div class="container" id="services-container">
            <div class="row service-wrap" id="service-wrap-right">
                <div class="col m6" id="service-text-left">
                    <div class="row ido-services">
                        <?php
                    
                    $args = array( 
                        'post_type' => 'devservices',
                        'posts_per_page' => 4,
                        'orderby' => 'post_id',
                        'order' => 'asc');
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                   $fa = get_field('dev_icon');
                    
                    ?>
                            <div class="col m6 s6 service-img hoverable text-center">
                                <a href="#" class="service-link">
                           <i class="fa fa-<?php echo $fa;?> fa-5x"></i>
                                                       <h4><?php the_title();?></h4>
                        </a>
                            </div>
                            <!--.service-image-->
                            <?php endwhile;?>
                                <?php wp_reset_query();?>
                    </div>
                    <!--.row.ido-services-->
                </div>
                <!--#service-text-left-->
                <div class="col m6 s12 center-align" id="service-icon-right">
                    <h4><?php echo $dev; ?></h4>
                    <br/>
                    <i class="large material-icons" aria-hidden="true">code</i>

                </div>
            </div>
            <!--.row-1 -->
            <div class="row service-wrap" id="service-wrap-left">
                <div class="col m6 s12 center-align" id="service-icon-right">
                    <h4><?php echo $seo; ?></h4>
                    <i class="large material-icons" aria-hidden="true">trending_up</i>
                </div>
                <div class="col m6" id="service-text-left">
                    <div class="row ido-services">

                        <?php
                    
                    $args = array( 
                        'post_type' => 'seoservices',
                        'posts_per_page' => 4,
                        'orderby' => 'post_id',
                        'order' => 'asc');
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                   $fa = get_field('seo_icon');
                    
                    ?>
                            <div class="col m6 s6 service-img hoverable">
                                <a href="#" class="service-link">
                           <i class="fa fa-<?php echo $fa;?> fa-5x"></i>        <h4><?php the_title();?></h4>
                        </a>
                            </div>
                            <!--.service-image-->
                            <?php endwhile;?>
                                <?php wp_reset_query();?>


                    </div>
                    <!--.row.ido-services-->
                </div>
                <!--#service-text-left-->
            </div>
            <!--.row-2 -->
        </div>
        <!--#services-container-->
    </section>