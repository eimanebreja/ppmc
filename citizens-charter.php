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
            <div class="about__tab">
                <!--- Button TAB --->
                <ul class="about__tab--btn">
                    <li data-tab-target="#ch" class="active">
                        Citizen's Charter
                    </li>
                    <li data-tab-target="#download">
                        Downloadable Forms
                    </li>

                </ul>
                <div class="about__tab--content">
                    <div id="ch" data-tab-content class="active">
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
                                    <div class="object-download"><a href="<?php echo esc_attr($url); ?>"
                                            download>Download</a></div>
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
                    <div id="download" data-tab-content>
                        <div class="download__content">
                            <div class="download__content--header">
                                <h3>Downloadable Forms</h3>
                            </div>

                            <div class="download-forms">
                                <div class="download-forms__body">
                                    <?php
query_posts(array(
    'post_type' => 'downloadable-form',
    'posts_per_page' => 20,
));

if (have_posts()): ?>
                                    <?php while (have_posts()): the_post();?>
                                    <div class="download-forms__body--content">
                                        <div class="download-forms__body--title">
                                            <h4><?php the_title();?></h4>
                                        </div>
                                        <div class="download-forms__body--list">
                                            <?php if (have_rows('upload_files')): ?>
                                            <ul>
                                                <?php while (have_rows('upload_files')): the_row();?>
                                                <li>
                                                    <?php
        $file = get_sub_field('downloadable_files');
        $url = $file['url'];
        $title = $file['title'];
        $caption = $file['caption'];
        ?>
                                                    <a href="<?php echo $url; ?>"><?php echo $title; ?></a>

                                                </li>
                                                <?php endwhile;?>
                                            </ul>
                                            <?php endif;?>
                                        </div>
                                    </div>

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
                </div>
            </div>


        </div>
    </div>
</section>

<?php get_footer();