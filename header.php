<!DOCTYPE html>

<html class="no-js gt-ie8">
<head>
    <meta charset="UTF-8"> 
    <title><?php wp_title('-') ?></title>
    <?php include('includes/metas.php'); ?>
    <?php if (get_field('favicon','options')): ?>
        <meta content="<?php echo get_field('favicon','options'); ?>" itemprop="image">
        <link href="<?php echo get_field('favicon','options'); ?>" rel="shortcut icon">
    <?php endif; ?>



    <!-- CSS -->
    <?php wp_enqueue_style('owldefault',  '/wp-content/themes/danielfrederighiadvogados/assets/lib/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css', array(), '1.0', 'all'); ?>
    <?php wp_enqueue_style('owlcarouselcss',  '/wp-content/themes/danielfrederighiadvogados/assets/lib/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css', array(), '1.0', 'all'); ?>
    <?php wp_enqueue_style('font-awesome', '/wp-content/themes/danielfrederighiadvogados/css/fontawesome-free-5.15.2-web/css/all.css', array(), '1.0', 'all'); ?>
    <?php wp_enqueue_style('boot',  '/wp-content/themes/danielfrederighiadvogados/css/bootstrap/css/bootstrap.min.css', '', '1.0') ?>
    <!-- <?php wp_enqueue_style('animate',  '/wp-content/themes/danielfrederighiadvogados/assets/lib/animate/animate.min.css', '', '1.0') ?> -->
    <?php wp_enqueue_style('aos-css',  '/wp-content/themes/danielfrederighiadvogados/assets/lib/AOS/aos.css', '', '1.0') ?>
    <?php wp_enqueue_style('intlTelInput',  '/wp-content/themes/danielfrederighiadvogados/assets/lib/intl-tel-input/build/css/intlTelInput.css', '', '1.0') ?>
    <?php wp_enqueue_style('fancyboxCss',  '/wp-content/themes/danielfrederighiadvogados/assets/lib/fancybox/jquery.fancybox.min.css', '', '1.0') ?>
    <?php wp_enqueue_style('jquery-filestyleCss',  '/wp-content/themes/danielfrederighiadvogados/assets/lib/jquery-filestyle-2.1.0/src/jquery-filestyle.css', '', '1.0') ?>
    <?php wp_enqueue_style('style-default', '/wp-content/themes/danielfrederighiadvogados/css/style-default.css', array(), '1.0', 'all'); ?>

    <?php wp_head(); ?>


    <!--<?php if (get_field('analytics','options')): ?>-->
    <!--    <sript async src="https://www.googletagmanager.com/gtag/js?id=G-NT2Q656GW4"></script>-->
    <!--    <script>-->
    <!--        window.dataLayer = window.dataLayer || [];-->
    <!--        function gtag(){dataLayer.push(arguments);}-->
    <!--        gtag('js', new Date());-->
    <!--        gtag('config', '<?php echo get_field('analytics','options'); ?>');-->
    <!--    </script>-->
    <!--<?php endif; ?>  -->
    
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NT2Q656GW4"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-NT2Q656GW4');
    </script>

    <!--SEO HEADER-->
    <!-- <?php 
        $html_head = get_field('html_head','options');
        if($html_head) {
            echo $html_head;
        }
    ?> -->
    
</head>

     
<body>

<?php include('includes/header01.php'); ?>