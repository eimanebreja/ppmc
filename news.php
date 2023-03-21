<?php
/*** Template Name: News */
get_header();
?>
<div class="news">
    <div class="news__banner">
        <div class="news__container">
            <div class="news__banner--title">
                <h2>
                    News and Announcement
                </h2>
            </div>
        </div>
    </div>
    <div class="news__container">
        <div class="news__content">
            <div class="news__content--header">
                <h3>News and Announcement</h3>
            </div>
            <?php
// Query the "news" posts
$news_query = new WP_Query(array(
    'post_type' => 'news',
    'posts_per_page' => 6,
));
?>
            <div class="news__content--row">
                <?php
if ($news_query->have_posts()):
    while ($news_query->have_posts()):
        $news_query->the_post();
        ?>
                <div class="news__content--item">
                    <div class="news__content--img">
                        <?php if (has_post_thumbnail()) {
            the_post_thumbnail();
        } else {?>
                        <img src="<?php echo THEME_DIR; ?>/assets/img/newss/news_2.jpg"
                            alt="Enterprise visit to coastline">
                        <?php }?>
                    </div>
                    <div class="news__content--info">
                        <div class="info-title">
                            <h4> <?php the_title();?></h4>
                        </div>
                        <div class="info-desc">
                            <p>
                                <?php echo wp_trim_words(get_the_content(), 50, '...'); ?>
                            </p>
                        </div>
                        <div class="info-btn">
                            <a href="<?php the_permalink();?>">View news</a>
                        </div>
                    </div>
                </div>
                <?php
    endwhile;
    wp_reset_postdata();
else:
?>
                <p>No news found.</p>
                <?php
endif;
?>
            </div>
            <?php
// Display the "load more" button if there are more than 3 news posts
if ($news_query->found_posts > 6):
?>
            <div class="news__content--btn">
                <button id="load-more-button">Load More</button>
                <script>
                (function($) {
                    $(document).ready(function() {
                        var page = 1;
                        var maxPages = <?php echo $news_query->max_num_pages; ?>;
                        var loading = false;
                        $('#load-more-button').click(function() {
                            if (loading) {
                                return;
                            }
                            page++;
                            if (page <= maxPages) {
                                loading = true;
                                var data = {
                                    action: 'load_more',
                                    page: page,
                                    nonce: '<?php echo wp_create_nonce('load_more_nonce'); ?>'
                                };
                                $.ajax({
                                    url: '<?php echo admin_url('admin-ajax.php'); ?>',
                                    type: 'post',
                                    data: data,
                                    beforeSend: function() {
                                        $('#load-more-button').text('Loading...');
                                    },
                                    success: function(response) {
                                        if (response) {
                                            $('.news__content--row').append(response);
                                            $('#load-more-button').text('Load More');
                                            loading = false;
                                            if (page == maxPages) {
                                                $('#load-more-button').hide();
                                            }
                                        } else {
                                            $('#load-more-button').hide();
                                        }
                                    }
                                });
                            } else {
                                $('#load-more-button').hide();
                            }
                        });
                    });
                })(jQuery);
                </script>
            </div>
            <?php
endif;
?>

        </div>
    </div>
</div>







<?php get_footer();