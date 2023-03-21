<?php
/*** Template Name: Downloadables */
get_header();
?>
<div class="download">
    <div class="download__banner">
        <div class="download__container">
            <div class="download__banner--title">
                <h2>
                    Downloads
                </h2>
            </div>
        </div>
    </div>
    <div class="download__container">
        <div class="download__content">
            <div class="download__content--header">
                <h3>Downloadables</h3>
            </div>
            <!-- <div class="download__content--category">
                <form action="">
                    <div class="category-form">
                        <div class="category-form__label">
                            Category
                        </div>
                        <select name="" id="">
                            <option value="">-Any-</option>
                        </select>
                    </div>
                </form>
            </div> -->
            <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts(array(
    'post_type' => 'downloadables',
    'paged' => $paged,
    'posts_per_page' => 8,
));

if (have_posts()): ?>
            <div class="download__content--row">
                <?php while (have_posts()): the_post();?>
                <div class="download__content--item">
                    <div class="download__content--title">
                        <?php the_title();?>
                    </div>
                    <div class="download__content--link">
                        <?php
    $pdf = get_field('file');
    if ($pdf):
    ?>
                        <a href="<?php echo $pdf['url']; ?>" download>Download</a>
                        <?php endif;?>
                    </div>
                </div>
                <?php endwhile;?>

            </div>
            <div class="download__paginate">
                <div class="download__paginate--menu">
                    <?php my_pagination();?>
                </div>
            </div>
            <?php else: ?>
            <div class="no-result">
                <h1>No results found</h1>
            </div>
            <?php endif;?>
        </div>
    </div>
</div>
<?php get_footer();