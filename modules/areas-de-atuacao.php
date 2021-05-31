<?php
    $bg_areas = get_field('background_da_secao', 7); 
?>

<section class="box-areas" style="background-image: url('<?php echo wp_get_attachment_image_src($bg_areas,'bg-disco-home')[0];?>">
    <div class="container">
        <h2 class="title-sections" data-aos="fade-up" data-aos-duration="3000"><?php echo get_field('titulo_areas'); ?></h2>

        <div class="row">
            <?php
                $args = array(
                    'post_type' => 'areas',
                    'posts_per_page' => 4,
                    'order' => 'DESC',
                    'meta_query' => array(
                        array(
                            'key'   => 'destaque',
                            'value' => '1',
                        )
                    )
                );
                query_posts($args);
                if(have_posts()) {
                    $x = 0;
                    while(have_posts()) {
                        the_post();
                        ?>
                        <?php get_template_part( './includes/box-model-areas-de-atuacao', 'page' ); ?>
                        <?php
                        $x++;
                    }
                }
                wp_reset_query();
            ?>

            <div class="button-mais-posts">
                <a title="Todas as áreas de atuação" class="btn-default" data-aos="fade-up" data-aos-duration="3000" href="<?php the_permalink(78); ?>" rel="nofollow">Todas as áreas de atuação</a>
            </div>
        </div>
    </div>
</section>