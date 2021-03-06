<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <!--Force IE to load in latest version w/out compatibility mode-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
    <!--Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <!--Styles-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
    <!--Javascripts-->
    <script src="<?php bloginfo('template_url'); ?>/javascripts/vendor/requirejs/require.js" data-main="wp-content/themes/common_3.5_home/javascripts/main.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico" />

    <?php wp_head(); ?>
</head>
<body>
    <header id="global">
        <div class="enclosure">
            <div class="navigation">
                <div class="row">
                    <div class="twelve columns">
                        <div style="height:20px; float:left; margin-top:4px; margin-right:7px;">
                            <img src="<?php bloginfo('template_url'); ?>/images/dome.png" alt="University of Iowa Foundation"/>
                        </div>
                        <h1 class="left"><a href="<?php echo network_site_url(); ?>">University of Iowa Foundation</a></h1>
                        <a class="reveal_menu show-for-small" style="float:right;" href="#"  data-reveal-id="global_mobile">&#155;</a>
                        <ul class="global_nav right hide-for-small">
                            <?php
                            wp_nav_menu( array(
                                    'theme_location' => 'primary_navigation',
                                    'container' =>false,
                                    'menu_class' => '',
                                    'echo' => true,
                                    'before' => '',
                                    'after' => '',
                                    'link_before' => '',
                                    'link_after' => '',
                                    'depth' => 0,
                                    'items_wrap' => '%3$s',)
                            ); ?>
                        </ul>
                    </div>
                </div>
            </div> <!--END NAVIGATION-->
        </div>  <!--END ENCLOSURE-->
    </header>