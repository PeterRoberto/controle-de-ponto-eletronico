<?php
    $checkbox = get_field('reuniao_online');
    $bg_reuniao = get_field('bg_reuniao');
    if($checkbox) {
        ?>
        <section class="agende-visita-area area-reuniao-online" style="background-image: url(<?php echo wp_get_attachment_image_src($bg_reuniao, '')[0]; ?>)">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="box-infos">
                            <div class="box-content"> 
                                <h2 class="title-sections white <?php if(!is_front_page()) { echo 'title-internas-reuniao';} else { echo '';}?>"><?php echo get_field('frase_curta'); ?></h2>
                            </div>
                            <?php
                                $link = get_field('botao');
                                if($link) { 
                                    ?>
                                    <div class="button-mais-posts <?php if(!is_front_page()) { echo 'btn-internas-reuniao';} else { echo '';}?>">
                                        <a class="btn-default btn-white" title="Solicitar reunião" href="<?php echo esc_url($link['url']); ?>" rel="nofollow"><?php echo esc_html($link['title']); ?></a>  
                                    </div> 
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
        <?php
    }
?>





