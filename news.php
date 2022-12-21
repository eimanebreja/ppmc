<?php
/*** Template Name: News */
get_header();
?>
<div class="news">
    <div class="news__banner">
        <div class="news__container">
            <div class="news__banner--title">
                <h2>
                    News and Updates
                </h2>
            </div>
        </div>
    </div>
    <div class="news__container">
        <div class="news__content">
            <div class="news__content--header">
                <h3>News and Updates</h3>
            </div>
            <?php
query_posts(array(
    'post_type' => 'news',
    'posts_per_page' => 5,
));

if (have_posts()): ?>
            <?php while (have_posts()): the_post();?>
            <div class="news__content--item">
                <div class="news__content--img">
                    <?php if (has_post_thumbnail()) {
        the_post_thumbnail();
    } else {?>
                    <img src="<?php echo THEME_DIR; ?>/assets/img/newss/news_2.jpg" alt="Enterprise visit to coastline">
                    <?php }?>
                </div>
                <div class="news__content--info">
                    <div class="info-title">
                        <h4> <?php the_title();?></h4>
                    </div>
                    <div class="info-desc">
                        <p>
                            <?php echo wp_trim_words(get_the_content(), 70, '...'); ?>
                        </p>
                    </div>
                    <div class="info-btn">
                        <a href="<?php the_permalink();?>">View news</a>
                    </div>
                </div>
            </div>
            <?php endwhile;?>
            <?php else: ?>
            <div class="no-result">
                <h1>No results found</h1>
            </div>
            <?php endif;?>

            <div class="news__content--btn">
                <a href="">Load more</a>
            </div>
        </div>
    </div>
</div>
<?php get_footer();