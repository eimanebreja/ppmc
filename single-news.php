<?php get_header();?>
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
    <?php
while (have_posts()) {
    the_post();
    ?>
    <div class="news__container">
        <div class="news__single">
            <div class="news__single--header">
                <h2><?php the_title();?></h2>
            </div>
            <div class="status-date">
                <p class="date"> <?php the_time('F j, Y');?></p>
                <p class="dash"></p>
                <p class="author">
                    <span>AUTHOR: </span> <?php the_author();?>
                </p>
            </div>
            <div class="news__single--img">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title();?>">
            </div>
            <div class="news__single--body">
                <div class="news__single--title">
                    <h4>Algacon Aquafeeds</h4>
                </div>
                <div class="news__single--desc">
                    <p class="desc">
                        Description:
                    </p>
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </div>
    <?php }?>

</div>

<?php get_footer();?>