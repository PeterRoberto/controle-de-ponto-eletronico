<?php
    $bg_footer = get_field('bg_footer', 'option'); 
    $logo_footer = get_field('logo_footer', 'option'); 
?>



<footer class="footer-area" style="background-image: url('<?php echo wp_get_attachment_image_src($bg_footer,'img-footer')[0]; ?>">
<!-- <?php 
    $html_footer = get_field('html_footer','options');
    if($html_footer) {
        echo $html_footer;
    }
?> -->
  <div class="container">
    <div class="row">

      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12">
        <div class="box-logo-footer">
          <?php echo wp_get_attachment_image($logo_footer, 'logo-footer'); ?> 
        </div>
      </div>

      <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12">
        <div class="box-infos-footer">
          <h3 class="titles-footer">O Escritório</h3>

          <div class="box-menu-footer">
							<?php
								$defaults = array(
									'menu' => 'menu',
									'container' => '',
									'items_wrap' => '<ul class="menu-footer">%3$s</ul>',
									'depth' => 0,
									'walker' => ''
								);
								wp_nav_menu($defaults);
							?>
						</div>
        </div>
      </div>

      <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12">
        <div class="box-infos-footer">
          <h3 class="titles-footer">Áreas de atuação</h3>

          <div class="box-menu-footer">
            <ul class="menu-footer menu-areas-footer">

              <?php
								$footer_areas = get_field('footer_area_de_atuacao', 'option');
								foreach($footer_areas as $l) {
                  ?>
                  <li>  
                    <a href="<?php echo $l['link']['url']; ?>" title="<?php echo $l['link']['title']; ?>"><?php echo $l['link']['title']; ?></a>		
                  </li>
                  <?php
                }
							?>	
            </ul>
          </div>
        </div>
      </div>

      <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12">         
        <div class="row">
          <div class="box-infos-footer box-phones-right">
            <div class="box-contact box-fix-phone">
              <?php $phone = get_field('telefone_fixo', 'option'); ?>
              <a class="box-icon" href="tel:<?php echo $phone[0]['telefone']; ?>" title="Telefone" rel="nofollow">
                <i class="fas fa-phone-alt"></i>
              </a>
              
              <div class="infos">
                <a href="tel:<?php echo get_field('telefone', 'option'); ?>" title="Telefone" rel="nofollow">
                  <h4>Entre em contato</h4>
                  <?php echo $phone[0]['telefone']; ?>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="box-contact box-whats box-phones-right">
            <?php
              $whats = get_field('whats', 'option');
              foreach($whats as $w) {
                if(wp_is_mobile()) {
                  ?>
                  <a class="box-icon" href="https://api.whatsapp.com/send?phone=55<?php echo $w['whatsapp_captura']; ?>&amp;text=Olá! Quero falar com um advogado." target="_blank" title="Whatsapp" rel="nofollow">
                    <i class="fab fa-whatsapp"></i>
                  </a>
                  <div class="infos">
                    <a href="https://api.whatsapp.com/send?phone=55<?php echo $w['whatsapp_captura']; ?>&amp;text=Olá! Quero falar com um advogado." target="_blank" title="Whatsapp" rel="nofollow">
                      <h4>WhatsApp</h4>
                      <?php echo $w['whatsapp']; ?> 
                    </a>
                  </div>
                  <?php
                } else {
                  ?>
                  <a class="box-icon" href="https://web.whatsapp.com/send?phone=55<?php echo $w['whatsapp_captura']; ?>&amp;text=Olá! Quero falar com um advogado." target="_blank" title="Whatsapp" rel="nofollow">
                    <i class="fab fa-whatsapp"></i>
                  </a>
                  <div class="infos">
                    <a href="https://web.whatsapp.com/send?phone=55<?php echo $w['whatsapp_captura']; ?>&amp;text=Olá! Quero falar com um advogado." target="_blank" title="Whatsapp" rel="nofollow">
                      <h4>WhatsApp</h4>
                      <?php echo $w['whatsapp']; ?> 
                    </a>
                  </div>
                  <?php
                }
              }
            ?>  
          </div> 
        </div>

        <?php
          $reuniao = get_field('agende_sua_reuniao', 'option');
          if($reuniao) {
            ?>
            <div class="row">
              <div class="col-xxl-12">
                <div class="box-reuniao-area">
                  <a class="btn-default btn-reuniao" href="<?php echo $reuniao['url']; ?>" title="Agendar reunião" rel="nofollow"><?php echo $reuniao['title']; ?></a>		
                </div>
              </div>
            </div>
            <?php
          }
        ?>

      </div>

    </div>


    <div class="row">
      <div class="col-xl-12">
      <div class="box-divider"></div>
      </div>
    </div>
     
    <div class="row">

      <div class="col-xxl-4 col-xl-4 col-lg-5">
        <div class="box-infos-footer box-bootom-footer">
          <div class="box-contact">
            <a class="box-icon" href="mailto:<?php echo get_field('email', 'option'); ?>" title="E-mail" rel="nofollow">
              <i class="fas fa-envelope"></i>
            </a>

            <div class="infos">
              <a href="mailto:<?php echo get_field('email', 'option'); ?>" title="E-mail" rel="nofollow">
                <h4>Envie um email<br> para nossa equipe</h4>
                <?php echo get_field('email', 'option'); ?>
              </a>
            </div>
          </div>      
        </div>     
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-3">
        <div class="box-infos-footer box-bootom-footer">
          <div class="box-contact">
            <?php
              $localizacao = get_field('onde_estamos', 'option');
              foreach($localizacao as $l) {
                ?>
                <a class="box-icon" href="<?php echo $l['link_do_local']; ?>" title="Endereço" target="_blank" rel="nofollow">
                  <i class="fas fa-map-marker-alt"></i>
                </a>
                <div class="infos">
                  <a href="<?php echo $l['link_do_local']; ?>" target="_blank" title="Endereço" rel="nofollow"> 
                    <h4>Onde estamos</h4>
                    <span class="text-onde-estamos"><?php echo $l['endereco']; ?></span>
                  </a>
                </div>
                <?php
              }
            ?>       
          </div>      
        </div>     
      </div>   

      <div class="col-xxl-3 col-xl-3 col-lg-4">
        <div class="box-infos-footer box-bootom-footer">
          <?php $horario_atend = get_field('horario_funcionamento', 'option'); ?>
          <div class="box-contact">
            <p class="box-icon">
                <i class="far fa-clock"></i>
            </p>
            <div class="infos">
				<a href="#" title="Horário de atendimento" rel="nofollow">
                  <h4>Horário de atendimento</h4>
                  <?php echo $horario_atend[0]['horario']; ?>
				</a>
            </div>     
          </div>      
        </div>     
      </div> 
      
    
      <div class="col-xxl-2 col-xl-2 col-lg-12">
        <div class="socials-box-footer">
          <div class="socials-box-bottom">
            <?php
              $face = esc_url(get_field('facebook', 'option'));
              $insta = esc_url(get_field('instagram', 'option'));
              $twitter = esc_url(get_field('twitter', 'option'));
              $linkedin = esc_url(get_field('linkedin', 'option'));
              $youtube = esc_url(get_field('youtube', 'option'));
              if($face) {
                ?>
                <a href="<?php echo $face; ?>" title="Facebook" target="_blank" rel="nofollow" class="box-icons">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <?php
              }

              if($insta) {
                ?>
                <a href="<?php echo $insta; ?>" title="Instagram" target="_blank" rel="nofollow" class="box-icons">
                  <i class="fab fa-instagram"></i>
                </a>
                <?php
              }

              if($linkedin) {
                ?>
                <a href="<?php echo $linkedin; ?>" title="Linkedin" target="_blank" rel="nofollow" class="box-icons">
                  <i class="fab fa-linkedin"></i>
                </a>
                <?php
              }

              if($twitter) {
                ?>
                <a href="<?php echo $twitter; ?>" title="Twitter" target="_blank" rel="nofollow" class="box-icons">
                  <i class="fab fa-twitter"></i>
                </a>
                
                <?php
              }	
              if($youtube) {
                ?>
                <a href="<?php echo $youtube; ?>" title="Youtube" target="_blank" rel="nofollow" class="box-icons">
                  <i class="fab fa-youtube"></i>
                </a>
                <?php
              }	
            ?> 
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xl-12">
      <div class="box-divider"></div>
      </div>
    </div>

    <div class="row">
      <div class="col-col-xl-12">
        <div class="box-copyright">
          <p>&copy; Copyright - <?php echo get_bloginfo('title'); ?> <?php echo date("Y"); ?>. Todos os direitos reservados.</p>
          <p class="sr-only">Otimizado por <a href="https://lucasferraz.com.br" title="Lucas Ferraz" target="_blank" rel="external noopener">Lucas Ferraz</a>.</p>
        </div>
      </div>
    </div>
  </div>


  <!-- Up to scroll page -->
  <button class="box-up-to-scroll"  id="button">
    <i class="fas fa-angle-up"></i>          
  </button>


  <?php
    $whats_scroll = get_field('whats_fixo', 'option');
    if($whats_scroll) {
      foreach($whats_scroll as $w) {
        if(wp_is_mobile()) {
          ?>
          <div class="box-whats-scroll">
            <a class="box-icon" href="https://api.whatsapp.com/send?phone=55<?php echo $w['whatsapp_rolagem']; ?>&amp;text=Olá! Quero falar com um advogado." title="Whatsapp" target="_blank" rel="nofollow">
              <svg style="pointer-events:none;display: block;height:32px;width:32px;" width="32px" height="32px" viewBox="0 0 1219.547 1225.016">
                  <path fill="#E0E0E0" d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z"></path>
                  <linearGradient id="htwaicona-chat-s4" gradientUnits="userSpaceOnUse" x1="609.77" y1="1190.114" x2="609.77" y2="21.084">
                      <stop offset="0" stop-color="#20b038"></stop>
                      <stop offset="1" stop-color="#60d66a"></stop>
                  </linearGradient>
                  <path fill="url(#htwaicona-chat-s4)" d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z"></path>
                  <image overflow="visible" opacity=".08" width="682" height="639" transform="translate(270.984 291.372)"></image>
                  <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z"></path>
                  <path fill="#FFF" d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z"></path>
              </svg>
              <span><?php echo $w['frase']; ?></span>
            </a>
          </div> 
          <?php
        } else {
          ?>
          <div class="box-whats-scroll">
            <a class="box-icon" href="https://web.whatsapp.com/send?phone=55<?php echo $w['whatsapp_rolagem']; ?>&amp;text=Olá! Quero falar com um advogado." title="Whatsapp" target="_blank" rel="nofollow">
              <svg style="pointer-events:none;display: block;height:32px;width:32px;" width="32px" height="32px" viewBox="0 0 1219.547 1225.016">
                  <path fill="#E0E0E0" d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z"></path>
                  <linearGradient id="htwaicona-chat-s4" gradientUnits="userSpaceOnUse" x1="609.77" y1="1190.114" x2="609.77" y2="21.084">
                      <stop offset="0" stop-color="#20b038"></stop>
                      <stop offset="1" stop-color="#60d66a"></stop>
                  </linearGradient>
                  <path fill="url(#htwaicona-chat-s4)" d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z"></path>
                  <image overflow="visible" opacity=".08" width="682" height="639" transform="translate(270.984 291.372)"></image>
                  <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z"></path>
                  <path fill="#FFF" d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z"></path>
              </svg>
              <span><?php echo $w['frase']; ?></span>
            </a>
          </div> 
          <?php
        }
      }
    }          
  ?>


</footer>




<!-- JS -->
<?php wp_enqueue_script('owlcarousel-js',  '/wp-content/themes/danielfrederighiadvogados/assets/lib/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"', array('jquery'), '1.0', 'all'); ?>
<?php wp_enqueue_script('fontawesome-js', '/wp-content/themes/danielfrederighiadvogados/css/fontawesome-free-5.15.2-web/js/all.js"', array('jquery'), '1.0', 'all'); ?>
<?php wp_enqueue_script('bootstrap',  '/wp-content/themes/danielfrederighiadvogados/css/bootstrap/js/bootstrap.min.js"', array('jquery'), '1.0', 'all'); ?>
<?php wp_enqueue_script('jquerymask',  '/wp-content/themes/danielfrederighiadvogados/assets/lib/jQuery-Mask-Plugin-master/src/jquery.mask.js"', array('jquery'), '1.0', 'all'); ?> 
<?php wp_enqueue_script('aos-js',  '/wp-content/themes/danielfrederighiadvogados/assets/lib/AOS/aos.js"', array('jquery'), '1.0', 'all'); ?> 
<?php wp_enqueue_script('stick-sidebar',  '/wp-content/themes/danielfrederighiadvogados/assets/lib/sticky-sidebar-master/dist/sticky-sidebar.js"', array('jquery'), '1.0', 'all'); ?> 
<?php wp_enqueue_script('intlTelInputJS', '/wp-content/themes/danielfrederighiadvogados/assets/lib/intl-tel-input/build/js/intlTelInput.js"', array('jquery'), '1.0', 'all'); ?> 
<?php wp_enqueue_script('utiLs',  '/wp-content/themes/danielfrederighiadvogados/assets/lib/intl-tel-input/build/js/utils.js"', array('jquery'), '1.0', 'all'); ?> 
<?php wp_enqueue_script('fancyboxJs',  '/wp-content/themes/danielfrederighiadvogados/assets/lib/fancybox/jquery.fancybox.min.js"', array('jquery'), '1.0', 'all'); ?> 
<?php wp_enqueue_script('filestyleJs',  '/wp-content/themes/danielfrederighiadvogados/assets/lib/jquery-filestyle-2.1.0/src/jquery-filestyle.min.js"', array('jquery'), '1.0', 'all'); ?> 
<?php wp_enqueue_script('scripts-default-main',  '/wp-content/themes/danielfrederighiadvogados/js/scripts-main.js"', array('jquery'), '1.0', 'all'); ?>


<?php wp_footer(); ?>


<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.0';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


</body>
</html>