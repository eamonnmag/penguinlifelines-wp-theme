<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <?php wp_head(); ?>

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/penguinlifelines.css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/960.css" rel="stylesheet"/>


</head>

<body <?php body_class(); ?>>

<header id="masthead" role="banner">
    <div class="pl-header">
        <div class="site-header">
            <div style="width: 90%; margin: 0 auto">

                <ul id="site_nav" class="pull-left">
                    <li><a href="/"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/penguin-lifelines.svg"></a>
                    </li>
                </ul>
                <ul id="site_nav" class="clearfix pull-right">

                    <li><a href="https://www.campaign.ox.ac.uk/page.aspx?pid=3091"><span class="label"><span
                                    class="highlight-orange">Donate</span></span></a>
                    </li>
                    <li><a href="http://www.penguinwatch.org/"
                           target="_blank"><span
                                class="label"><span class="highlight-blue">Penguin Watch</span> </span></a></li>
                    <li><a href="/about"><span class="label">About</span></a></li>
                    <li><a href="/blog"><span class="label">Blog</span></a>
                    </li>
                    <li><a href="mailto:tom.hart@zoo.ox.ac.uk?subject=Penguin Lifelines"><span
                                class="label">Contact</span></a></li>
                </ul>
            </div>
        </div>

        <div class="info-section" id="changeable">
            <!-- Blue box - nice for page titles... -->
        </div>

        <div class="info-text" align="center">


            <p style="font-weight: lighter; font-size: 1.4em">Penguin numbers are declining globally...</p><br/>

            <div class="container_16" align="left" style="width: 100%;">
                <div class="grid_4" style="width: 30%">
                    <div align="center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front-page/reason.png"/>
                    </div>
                    <p>The main suspects are climate change, fisheries, disease, and pollution, but we need to understand
                        how
                        penguins are affected by these threats in order to mitigate them.</p>
                </div>

                <div class="grid_4" style="width: 30%">
                    <div align="center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front-page/pl-logo-sml.png"/>
                    </div>
                    <p>Penguins Lifelines is a project run by <a href="http://www.zoo.ox.ac.uk/group/oceans/people/TH.html" target="_blank">Dr. Tom Hart</a> and is a collaboration between Oxford University,
                        ZSL, Oceanites, Stony Brook and Woods Hole Oceanographic Institute, researching the threats to
                        antarctic penguins. </p>
                </div>

                <div class="grid_4" style="width: 30%">
                    <div align="center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front-page/monitor.png"/>
                    </div>
                    <p>We are using long-term monitoring in the field and genetic analysis of penguin feathers to get a
                        complete picture of how populations are changing.</p>
                </div>

                <div class="clearfix"></div>


                <div class="grid_16" style="margin-top: 20px; width: 100%;" align="center">
                    <p style="font-weight: bolder">Our findings will be used to inform policy and educate the public on the
                        impacts of climate change.</p>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- #site-navigation -->
    </div>


    <div class="clearfix"></div>

</header>
<!-- #masthead -->

<div id="page" class="hfeed site">


    <div id="main" class="wrapper">