<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); //cambiamos <meta charset="utf-8"> por su                ?>" />

        <meta name="viewport" content="width=1024" />
        <meta name="apple-mobile-web-app-capable" content="yes" />        
        <meta name="author" content="Anibal Copitan" />
        <link rel="shortcut icon" href="favicon.png" />
        <link rel="apple-touch-icon" href="apple-touch-icon.png" />        
        <title>
            <?php
            global $page, $paged;
            wp_title('|', true, 'right');
            bloginfo('name');

            // Agrega la descripción del blog, en la página principal.
            $site_description = get_bloginfo('description', 'display');
            if ($site_description && ( is_home() || is_front_page() ))
                echo " | $site_description";
            // Agrega el número de página si es necesario:
            if ($paged >= 2 || $page >= 2)
                echo ' | ' . sprintf(__('Page %s', 'twentyten'), max($paged, $page));
            ?>         
        </title>        
        <link href='<?php bloginfo('stylesheet_url'); ?>' rel="stylesheet" />
        <link href='<?php bloginfo('template_url'); ?><?php echo "/css/main.css"; ?>' rel="stylesheet" />
        <!-- /CSS -->


        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
        <!-- /RSS & PINGBACKS -->

        <?php /* Para compatibilizar HTML5 con navegadores antiguos */ ?>
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <?php
        /* Siempre agrege wp_head antes del cierre de </ head> de su thema,
         * si no lo agrega puede que muchos plugins no funcionen ya que
         * lo utilizan este gancho (hook)para agregar elementos al head.
         */
        wp_head();
        ?>
    </head>
    <body>
        <div>
            <nav>
                <?php
                $parametros = array(
                    'menu' => 'false',
                    'menu_class' => 'group',
                    'menu_id' => 'example-one',
                    'container' => 'div',
                    'container_class' => 'nav-wrap wrapper clearfix',
                    'container_id' => ''
                );
                wp_nav_menu($parametros);
                ?>            
            </nav>