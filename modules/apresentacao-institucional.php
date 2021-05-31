<?php
    $bg_institucional = get_field('institucional_home', 7); 
?>
<section class="institucional-area" style="background-image: url('<?php echo wp_get_attachment_image_src($bg_institucional, 'bg-inst-home')[0]; ?>">
    <div class="box-conteudo">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 box-img-left"></div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 box-infos-right">
            <h2 class="title-sections" data-aos="fade-left" data-aos-duration="3000"><?php echo get_field('titulo_institucional', 7); ?></h2>
            <div class="box-content">
                <?php echo get_field('texto_institucional', 7); ?>
                <div class="button-read-more">
                    <a class="btn-default" title="Institucional" data-aos="fade-left" data-aos-duration="3000" href="<?php the_permalink(76); ?>" rel="nofollow">Veja mais</a>
                </div>
            </div> 
        </div>
    </div>
    <?php wp_reset_query(); ?>
</section>
