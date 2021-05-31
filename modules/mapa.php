<?php
    $map = get_field('mapa', 7); 
?>

<section class="map-area" style="background-image: url('<?php echo wp_get_attachment_image_src($map,'img-map')[0]; ?>"></section>
