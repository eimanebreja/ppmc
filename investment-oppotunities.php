<?php
/*** Template Name: Investment Opportunities */
get_header();
?>

<section>
    <div class="investment">
        <div class="investment__banner">
            <div class="investment__container">
                <div class="investment__banner--title">
                    <h2>
                        Investment Opportunities
                    </h2>
                </div>
            </div>
        </div>
        <div class="investment__container">
            <div class="investment__body">
                <div class="investment__tab">
                    <!--- Button TAB --->
                    <ul class="investment__tab--btn">
                        <?php
query_posts(array(
    'post_type' => 'investments',
    'posts_per_page' => 1,
    'orderby' => array(
        'date' => 'ASC',
    ),
));?>
                        <?php if (have_posts()): ?>
                        <?php while (have_posts()): the_post();?>
                        <li data-tab-target="#<?php the_field('tab_id');?>" class="active">
                            <?php the_field('name');?>
                        </li>
                        <?php endwhile;?>
                        <?php else: ?>
                        <?php endif;?>



                        <?php
query_posts(array(
    'post_type' => 'investments',
    'posts_per_page' => 5,
    'offset' => 1,
    'orderby' => array(
        'date' => 'ASC',
    ),
));?>
                        <?php if (have_posts()): ?>
                        <?php while (have_posts()): the_post();?>
                        <li data-tab-target="#<?php the_field('tab_id');?>">
                            <?php the_field('name');?>
                        </li>
                        <?php endwhile;?>
                        <?php else: ?>
                        <?php endif;?>
                    </ul>


                    <!--- END OF TAB --->




                    <div class="investment__tab--content">

                        <?php
query_posts(array(
    'post_type' => 'investments',
    'posts_per_page' => 1,
    'orderby' => array(
        'date' => 'ASC',
    ),

));?>
                        <?php if (have_posts()): ?>
                        <?php while (have_posts()): the_post();?>
                        <div id="<?php the_field('tab_id');?>" data-tab-content class="active">
                            <div class="investment__tab--title">
                                <h3><?php the_title();?></h3>
                                <?php the_content();?>
                            </div>
                            <?php
    // using for loop, this is the one I'd prefer
    $images = get_field('gallery');
    if ($images) {
        ?>
                            <div class="investment__tab--gallery">
                                <?php
    for ($i = 0; $i < count($images) && $i < 5; $i++) {
            $image = $images[$i];
            ?>
                                <figure class="investment__tab--gallery--item <?php echo "tap" . $i; ?>">
                                    <a href="<?php echo $image['url']; ?>">
                                        <img src="<?php echo $image['sizes']['large']; ?>"
                                            alt="<?php echo $image['alt']; ?>" />
                                    </a>
                                    <div class="img-icon">
                                        <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_img.svg"
                                            alt="Gallery Icon">
                                    </div>
                                    <p class="seemore">See More Photos</p>
                                </figure>
                                <?php
    }
        ?>
                            </div>
                            <?php
    }
    ?>

                            <div class="investment__gallery popup">
                                <div class="investment__gallery--container">
                                    <div class="investment__gallery--title">
                                        <h3><?php the_title();?></h3>
                                        <div class="close">
                                            <svg class="Icon Icon--close" role="presentation" viewBox="0 0 16 14">
                                                <path d="M15 0L1 14m14 0L1 0" stroke="#8E8E8E" fill="#8E8E8E"
                                                    fill-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <?php
    $images = get_field('gallery');
    if ($images): ?>
                                    <div class="investment__gallery--row">
                                        <?php foreach ($images as $image): ?>
                                        <div class="investment__gallery--item">
                                            <a href="<?php echo esc_url($image['url']); ?>">
                                                <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                                            </a>

                                        </div>
                                        <?php endforeach;?>
                                    </div>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;?>
                        <?php else: ?>
                        <?php endif;?>




                        <?php
query_posts(array(
    'post_type' => 'investments',
    'posts_per_page' => 5,
    'offset' => 1,
    'orderby' => array(
        'date' => 'ASC',
    ),

));?>
                        <?php if (have_posts()): ?>
                        <?php while (have_posts()): the_post();?>
                        <div id="<?php the_field('tab_id');?>" data-tab-content>
                            <div class="investment__tab--title">
                                <h3><?php the_title();?></h3>
                                <?php the_content();?>
                            </div>
                            <?php
    // using for loop, this is the one I'd prefer
    $images = get_field('gallery');
    if ($images) {
        ?>
                            <div class="investment__tab--gallery">
                                <?php
    for ($i = 0; $i < count($images) && $i < 5; $i++) {
            $image = $images[$i];
            ?>
                                <figure class="investment__tab--gallery--item <?php echo "tap" . $i; ?>">
                                    <a href="<?php echo $image['url']; ?>">
                                        <img src="<?php echo $image['sizes']['large']; ?>"
                                            alt="<?php echo $image['alt']; ?>" />
                                    </a>
                                    <div class="img-icon">
                                        <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_img.svg"
                                            alt="Gallery Icon">
                                    </div>
                                    <p class="seemore">See More Photos</p>
                                </figure>
                                <?php
    }
        ?>
                            </div>
                            <?php
    }
    ?>

                            <div class="investment__gallery popup">
                                <div class="investment__gallery--container">
                                    <div class="investment__gallery--title">
                                        <h3><?php the_title();?></h3>
                                        <div class="close">
                                            <svg class="Icon Icon--close" role="presentation" viewBox="0 0 16 14">
                                                <path d="M15 0L1 14m14 0L1 0" stroke="#8E8E8E" fill="#8E8E8E"
                                                    fill-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <?php
    $images = get_field('gallery');
    if ($images): ?>
                                    <div class="investment__gallery--row">
                                        <?php foreach ($images as $image): ?>
                                        <div class="investment__gallery--item">
                                            <a href="<?php echo esc_url($image['url']); ?>">
                                                <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                                            </a>

                                        </div>
                                        <?php endforeach;?>
                                    </div>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;?>
                        <?php else: ?>
                        <?php endif;?>



                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();