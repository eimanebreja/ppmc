<?php
/*** Template Name: Gallery */
get_header();
?>
<section>
    <div class="gallery">
        <div class="gallery__banner">
            <div class="gallery__container">
                <div class="gallery__banner--title">
                    <h2>
                        Gallery
                    </h2>
                </div>
            </div>
        </div>
        <div class="gallery__container">
            <div class="gallery__content">
                <div class="gallery__content--header">
                    <h3>Gallery</h3>
                </div>
                <div class="gallery__content--body">
                    <?php
query_posts(array(
    'post_type' => 'gallery',
    'posts_per_page' => 7,
));

if (have_posts()): ?>
                    <div class="gallery__content--row">
                        <?php while (have_posts()): the_post();?>
                        <a href="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
                            class="gallery__content--item">
                            <?php if (has_post_thumbnail()) {
        the_post_thumbnail();
    } else {?>
                            <img src="<?php echo THEME_DIR; ?>/assets/img/gallery_1.png" alt="Algacon Aquafeeds">
                            <?php }?>

                            <div class="gallery__content--logo">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/logo/ppmc_logo.png" alt="PPMC Logo">
                            </div>
                        </a>
                        <?php endwhile;?>
                    </div>
                    <?php else: ?>
                    <div class="no-result">
                        <h1>No results found</h1>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();