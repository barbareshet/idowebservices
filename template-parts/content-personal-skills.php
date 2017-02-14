<?php
$skills_section_title = get_post_meta($post->ID, 'skills_section_title', true);

?>
    <section id="per-skills">
        <div class="container">
            <div class="row">
                <div class="col m12">
                    <h3 class="section-title">
                   <?php echo $skills_section_title . ' ' ;?>
               </h3>
                </div>
            </div>
            <div class="row">
                <ul class="collection">
                    <?php
                    
                    $args = array( 
                        'post_type' => 'personalskills',
                        'orderby' => 'post_id',
                        'posts_per_page' => 10,
                        'order' => 'asc');
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $skill_ex = get_field('skill_experience');
                    $skill_class = get_field('skill_class');
                    $skill_icon = get_field('skill_icon');
                    $skill_icon_color = get_field('skill_icon_color');
                    ?>
                        <li class="collection-item avatar">

                            <i class="devicons devicons-<?php echo $skill_icon; ?> circle" style="color: <?php echo $skill_icon_color;?>;"></i>
                            <span class="title"><?php the_title();?></span>
                            <div class="progress">

                                <div class="progress-bar progress-bar-<?php echo $skill_class ;?>" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill_ex ;?>">
                                    <?php echo $skill_ex ;?>
                                </div>
                            </div>
                        </li>
                        <?php endwhile;?>
                            <?php wp_reset_query();?>
                </ul>

            </div>
        </div>


    </section>