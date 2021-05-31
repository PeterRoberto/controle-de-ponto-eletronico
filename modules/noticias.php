<?php
    $bg_noticias = get_field('background_noticias', 7); 
?>

<section class="noticias-area" style="background-image: url('<?php echo wp_get_attachment_image_src($bg_noticias,'bg-disco-home')[0];?>">
    <div class="container">
        <div class="row">
            <h2 class="title-sections" data-aos="fade-up" data-aos-duration="3000"><?php echo get_field('titulo_noticias', 7); ?></h2>
            <div class="serch-home">
                <?php get_template_part( './includes/search-assunto', 'page' ); ?>
            </div>
        </div>

        <div class="row">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'order' => 'DESC',
                );
                query_posts($args);
                if(have_posts()) {
                    ?>
                    <div id="carousel-noticias" class="owl-carousel owl-theme" data-aos="fade-up" data-aos-duration="3000">
                        <?php 
                            while(have_posts()) {
                                the_post();
                                ?>
                                <?php get_template_part( './includes/box-model-noticias', 'page' ); ?> 
                                <?php  
                            }
                        ?> 
                    </div>
                    <?php 
                }
            ?>
        </div>
    </div>
</section>