<?php
/*** Template Name: Citizens Charter */
get_header();
?>
<section>
    <div class="citizen">
        <div class="citizen__banner">
            <div class="citizen__container">
                <div class="citizen__banner--title">
                    <h2>
                        Citizen’s Charter
                    </h2>
                </div>
            </div>
        </div>
        <div class="citizen__container">
            <div class="citizen__content">
                <div class="citizen__content--header">
                    <h3>Citizen’s Charter</h3>
                </div>
                <div class="citizen__content--body">


                    <?php
query_posts(array(
    'post_type' => 'citizen-charter',
));

if (have_posts()): ?>
                    <?php while (have_posts()): the_post();?>
                    <?php
    $file = get_field('add_file');
    ?>

                    <?php
    if ($file):
        // Extract variables.
        $url = $file['url'];
        $title = $file['title'];
        ?>
                    <div class="citizen__content--object">
                        <div class="object-download"><a href="<?php echo esc_attr($url); ?>" download>Download</a></div>
                        <div class="object-content">
                            <object data="<?php echo esc_attr($url); ?>" type="application/pdf">
                            </object>
                        </div>
                    </div>
                    <?php endif;?>
                    <?php endwhile;?>
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