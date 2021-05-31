<section class="banner-area">
    <?php
        $slider = get_field('slider', 7);
        if($slider) {
            ?>
            <div id="slider" class="owl-carousel owl-theme">
                <?php
                    foreach($slider as $s) {
                        ?>
                        <div class="box-slider">
                            <?php echo wp_get_attachment_image($s['imagem'],'img-banner-home',false, array('title' => get_bloginfo('name'), 'aria-label' => get_bloginfo('name'), 'alt' => get_bloginfo('name'), 'class' => 'logo img-responsive')); ?>
                            <div class="box-infos">
                                <h2 data-aos="fade-right" data-aos-duration="3000"><?php echo $s['texto_01']; ?></h2>
                                <span data-aos="fade-left" data-aos-duration="3000"><?php echo $s['texto_02']; ?></span>
                                <?php
                                    if($s['video_conferencia']) {
                                        ?>
                                        <div class="botao" data-aos="fade-up" data-aos-duration="3000">
                                            <a class="btn-default" href="<?php echo $s['botao_banner']['url']; ?>" title="<?php echo $s['botao_banner']['title']; ?>" rel="nofollow"><?php echo $s['botao_banner']['title']; ?></a>
                                        </div>
                                        <?php
                                    }
                                ?>
                            </div>

                            <?php
                                if($s['video_conferencia']) {
                                    ?>
                                    <div class="btn-video-conferencia">
                                        <a class="btn-video-banner" href="<?php echo $s['video_conferencia']['url']; ?>" title="Agende uma reunião online" rel="nofollow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29">
                                                <defs>
                                                    <style>
                                                        .cls-1 {
                                                            fill: #1b1b1b;
                                                            fill-rule: evenodd;
                                                        }
                                                    </style>
                                                </defs>
                                                <path id="Elipse_11" data-name="Elipse 11" class="cls-1" d="M20,15l-8,5V10ZM14.5,0A14.5,14.5,0,1,1,0,14.5,14.5,14.5,0,0,1,14.5,0Z"></path>
                                            </svg>
                                            <?php echo $s['video_conferencia']['title']; ?>
                                        </a>
                                    </div>
                                    <?php 
                                }
                            ?>
                        </div>
                        <?php
                        wp_reset_query();
                    }
                ?>
            </div>
            <?php
        }
        
    ?>  
</section> 