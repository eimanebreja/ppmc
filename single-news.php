<?php get_header();?>
<div class="news">
    <div class="news__banner">
        <div class="news__container">
            <div class="news__banner--title">
                <h2>
                    News and Archives
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

            <div class="news__single--body">
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