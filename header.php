<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes();?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes();?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes();?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title('|', true, 'right');?></title>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
    <!--[if lt IE 9]>
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js?ver=3.7.0"></script>
	<![endif]-->
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <section>
        <div class="nav">
            <div class="nav__content">
                <div class="nav__content--top">
                    <div class="nav__top-area">
                        <div class="nav__top-area--left">
                            GOVPH
                        </div>
                        <div class="nav__top-area--right">
                            <?php get_search_form();?>
                        </div>
                    </div>
                </div>
                <div class="nav__content--middle">
                    <div class="nav__middlearea">
                        <a href="<?php echo site_url('/'); ?>" class="nav__middlearea--logo">
                            <div class="logo-img">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/logo.svg" alt="PPMC Logo">
                            </div>
                            <div class="logo-tagline">
                                <p>Poro Point Management Corporation</p>
                                <span>a subsidiary of the Bases Conversion and Development Authority</span>
                            </div>
                        </a>
                        <ul class="nav__middlearea--menu">
                            <li class="nav__middlearea--list">
                                <a href="<?php echo site_url('/'); ?>" class="nav__middlearea--link <?php if (is_front_page()) {
    echo "active";}?>">Home</a>
                            </li>
                            <li class="nav__middlearea--list">
                                <a href="<?php echo site_url('/about-us'); ?>" class="nav__middlearea--link <?php if (is_page('about-us')) {
    echo "active";}?>">About Us</a>
                            </li>
                            <li class="nav__middlearea--list">
                                <a href="<?php echo site_url('/investment-opportunities'); ?>" class="nav__middlearea--link <?php if (is_page('investment-opportunities')) {
    echo "active";}?>">Investment Opportunities</a>
                            </li>
                            <li class="nav__middlearea--list">
                                <a href="<?php echo site_url('/procurements'); ?>" class="nav__middlearea--link <?php if ((is_page('procurements')) || (is_single() && 'procurement' == get_post_type())) {
    echo "active";}?>">Procurement</a>
                            </li>
                            <li class="nav__middlearea--list">
                                <a href="<?php echo site_url('/projects'); ?>" class="nav__middlearea--link <?php if ((is_page('projects')) || (is_single() && 'project' == get_post_type())) {
    echo "active";}?>">Projects</a>
                            </li>
                            <li class="nav__middlearea--list">
                                <a href="<?php echo site_url('/csr'); ?>" class="nav__middlearea--link  <?php if (is_page('csr')) {
    echo "active";}?>">
                                    Corporate Social Responsibility
                                </a>
                            </li>
                            <li class="nav__middlearea--list">
                                <div class="nav__middlearea--link more">
                                    More
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="nav__content--bottom">

                    <div class="nav__bottomarea">
                        <div class="nav__bottomarea--conversion">
                            <div class="status">
                            </div>
                            <div class="conversion">
                                <!-- <?php
$req_url = 'https://v6.exchangerate-api.com/v6/cd86f7c7785e92c722d8ea5d/latest/USD';
$response_json = file_get_contents($req_url);
if (false !== $response_json) {
    try {
        $response = json_decode($response_json);
        if ('success' === $response->result) {
            $base_price = 1;
            $PHP_price = round(($base_price * $response->conversion_rates->PHP), 2);
        }
    } catch (Exception $e) {
    }
}
?> -->
                                1 USD = <?php echo $PHP_price; ?> PHP
                            </div>
                            <div class="date">
                                <?php the_time('F j, Y');?>
                            </div>
                        </div>
                        <ul class=" nav__bottomarea--moremenu" style="display:none">
                            <li class="nav__bottomarea--list">
                                <a href="<?php echo site_url('/gad'); ?>" class="nav__bottomarea--link <?php if (is_page('gad')) {
    echo "active";}?>">GAD</a>
                            </li>
                            <li class="nav__bottomarea--list">
                                <a href="" class="nav__bottomarea--link">Book your Events</a>
                            </li>
                            <li class="nav__bottomarea--list">
                                <a href="<?php echo site_url('/careers'); ?>" class="nav__bottomarea--link <?php if (is_page('careers')) {
    echo "active";}?>">Careers</a>
                            </li>
                            <li class="nav__bottomarea--list">
                                <a href="<?php echo site_url('/downloadables'); ?>" class="nav__bottomarea--link <?php if (is_page('downloadables')) {
    echo "active";}?>">Downloadables</a>
                            </li>
                            <li class="nav__bottomarea--list">
                                <a href="<?php echo site_url('/news'); ?>" class="nav__bottomarea--link <?php if ((is_page('news')) || (is_single() && 'news' == get_post_type())) {
    echo "active";}?>">News and Updates</a>
                            </li>
                            <li class="nav__bottomarea--list">
                                <a href="<?php echo site_url('/gallery'); ?>" class="nav__bottomarea--link <?php if (is_page('gallery')) {
    echo "active";}?>">Gallery</a>
                            </li>
                            <li class="nav__bottomarea--list">
                                <a href="<?php echo site_url('/contact-us'); ?>" class="nav__bottomarea--link <?php if (is_page('contact-us')) {
    echo "active";}?>">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>