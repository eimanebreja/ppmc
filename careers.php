<?php
/*** Template Name: Careers */
get_header();
?>
<div class="career">
    <div class="career__banner">
        <div class="career__container">
            <div class="career__banner--title">
                <h2>
                    Careers
                </h2>
            </div>
        </div>
    </div>
    <div class="career__container">
        <div class="career__content">
            <div class="career__content--header">
                <h3>Vacant Position</h3>
            </div>

            <div class="career__content--body">

                <?php
query_posts(array(
    'post_type' => 'career',
    'posts_per_page' => 10,
));

if (have_posts()): ?>
                <?php while (have_posts()): the_post();?>
                <div class="career__content--item">
                    <div class="career__content--title">
                        <div class="title-icon">
                            <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_pdf_colored.svg" alt="PDF Icon">
                        </div>
                        <div class="title-area">
                            <?php the_title();?>
                        </div>
                    </div>
                    <div class="career__content--btn">
                        <?php
    $file = get_field('career_file');
    if ($file):
        $url = wp_get_attachment_url($file);?>
                        <a href="<?php echo $file['url']; ?>" target="_blank" class="btn preview">Preview</a>
                        <a href="<?php echo $file['url']; ?>" class="btn downloads" download>Download</a>
                        <?php endif;?>
                    </div>
                </div>
                <?php endwhile;?>
                <?php else: ?>
                <div class="no-result">
                    <h1>No results found</h1>
                </div>
                <?php endif;?>


                <!-- <div class="career__content--item">
                    <div class="career__content--title">
                        <div class="title-icon">
                            <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_pdf_colored.svg" alt="PDF Icon">
                        </div>
                        <div class="title-area">
                            Accountant
                        </div>
                    </div>
                    <div class="career__content--btn">
                        <a href="" class="btn preview">Preview</a>
                        <a href="" class="btn download">Download</a>
                    </div>
                </div>
                <div class="career__content--item">
                    <div class="career__content--title">
                        <div class="title-icon">
                            <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_pdf_colored.svg" alt="PDF Icon">
                        </div>
                        <div class="title-area">
                            Developer
                        </div>
                    </div>
                    <div class="career__content--btn">
                        <a href="" class="btn preview">Preview</a>
                        <a href="" class="btn download">Download</a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<?php get_footer();