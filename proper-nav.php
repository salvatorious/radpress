<!-- Sets up two navs which are both editable from the wordpress backend. 
     mmenu loading and menu theme locations are in function-snippets.js -->

<nav id="site-navigation" class="main-navigation" role="navigation">
    <div class="nav-logo">
        <a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.svg"></a>
    </div>
    <?php

    $defaults = array(
        'theme_location'  => 'primary',
        'menu'            => '',
        'container'       => false,
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => '',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
    );

    wp_nav_menu( $defaults );

    ?>
</nav>

<nav id="mobile-nav" class="mobile-nav" role="navigation">
    <?php

    $defaults = array(
        'theme_location'  => 'mobile',
        'menu'            => '',
        'container'       => false,
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => '',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
    );

    wp_nav_menu( $defaults );

    ?>
</nav>

<style>
    #mobile-nav {
        display: none;
    }
    @media screen and (max-width: 420px) {
        #mobile-nav {

        }
        #site-navigation {
            display: none;
        }
    }
</style>
<script>
    jQuery(document).ready(function($){
        // This code assumes you are using the properly-enqueued version of jQuery
        // More exploration of options at http://mmenu.frebsite.nl/documentation/options/

        // simple mmenu
        $('#mobile-nav').mmenu();
    }); 
</script>