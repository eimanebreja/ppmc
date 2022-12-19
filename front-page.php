<?php get_header();?>

<div class="homebanner">
    <div class="homebanner__bg">
        <div class="homebanner__container">
            <div class="homebanner__title">
                <h2>Learn more about Poro Point <br>
                    and its many advantages now!</h2>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="homenews">
        <div class="homenews__container">
            <div class="homenews__row">
                <div class="homenews__content">
                    <div class="homenews__content--title">
                        <h3>Featured News</h3>
                        <div class="homenews__content--viewmore">
                            <a href="<?php echo site_url('/news'); ?>">View more news</a>
                        </div>
                    </div>
                    <?php
query_posts(array(
    'post_type' => 'news',
    'posts_per_page' => 3,
));

if (have_posts()): ?>
                    <?php while (have_posts()): the_post();?>
                    <div class="homenews__content--body">
                        <div class="homenews__content--img">
                            <?php if (has_post_thumbnail()) {
        the_post_thumbnail();
    } else {?>
                            <img src="<?php echo THEME_DIR; ?>/assets/img/news_img1.jpg" alt="<?php the_title();?>">
                            <?php }?>
                        </div>
                        <div class="homenews__content--desc">
                            <p class="title">
                                <?php the_title();?>
                            </p>
                            <p class="desc">
                                <?php echo wp_trim_words(get_the_content(), 30, '...'); ?>
                            </p>
                            <div class="viewmore-btn">
                                <a href="<?php the_permalink();?>" class="viewmore">View more</a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>
                    <?php else: ?>
                    <div class="no-result">
                        <h1>No results found</h1>
                    </div>
                    <?php endif;?>
                </div>
                <div class="homenews__about">
                    <div class="homenews__about--desc">
                        <p>
                            <span> The Poro Point Freeport Zone </span> is located at Poro Point, San Fernando City, La
                            Union.
                            Its close
                            proximity to the thriving economies of the Southeast Asian region makes it an ideal
                            springboard
                            for
                            access to these markets: only 1.5 hours away from Hong Kong, Vietnam, and Taipei; 3.5 hours
                            away
                            from Japan, Singapore, and Korea; and 4 hours away from Malaysia, Thailand, and Indonesia.

                        </p>
                        <div class="homenews__about--readmore">
                            <a href="" class="viewmore">Read more</a>
                        </div>
                    </div>
                    <a href="" class="homenews__about--morelink">
                        CITIZEN’S CHARTER
                    </a>
                    <a href="" class="homenews__about--morelink">
                        FAQs
                    </a>
                    <a href="" class="homenews__about--morelink">
                        PRIVACY NOTICE
                    </a>

                    <div class="homenews__about--logos">
                        <div class="homenews__about--logo">
                            <img src="<?php echo THEME_DIR; ?>/assets/img/logo/foi_logo.png"
                                alt="Freedom of Information">
                        </div>
                        <div class="homenews__about--logo">
                            <img src="<?php echo THEME_DIR; ?>/assets/img/logo/tuv_nord_logo.png" alt="TUV Nord">
                        </div>
                        <div class="homenews__about--logo">
                            <img src="<?php echo THEME_DIR; ?>/assets/img/logo/gcg_logo.png"
                                alt="GCG Whistleblowing Web Portal">
                        </div>
                        <div class="homenews__about--logo">
                            <img src="<?php echo THEME_DIR; ?>/assets/img/logo/ppmc_advisory_logo.png"
                                alt="PPMC Public Advisory">
                        </div>
                        <div class="homenews__about--logo">
                            <img src="<?php echo THEME_DIR; ?>/assets/img/logo/disclosure_requirements.png"
                                alt="Good Governance">
                        </div>
                        <div class="homenews__about--logo">
                            <img src="<?php echo THEME_DIR; ?>/assets/img/logo/transparency_logo.png"
                                alt="Transparency">
                        </div>
                        <div class="homenews__about--logo">
                            <img src="<?php echo THEME_DIR; ?>/assets/img/logo/corporate_logo.png"
                                alt="Corporate Governance">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="homelocators">
        <div class="homelocators__bg">
            <div class="homelocators__container">
                <div class="homelocators__title">
                    <p>Zone Locators</p>
                </div>
                <div class="homelocators__row">
                    <a href="" class="homelocators__row--item">

                        <div class="homelocators__row--content">
                            <p>
                                Profile <br>
                                Locators
                            </p>
                            <span>Click here to learn more</span>
                        </div>

                    </a>
                    <a href="" class="homelocators__row--item">
                        <div class="homelocators__row--content">
                            <p>
                                Application <br>
                                FOR PERMITS
                            </p>
                            <span>Click here for Online Permit Applications</span>
                        </div>
                    </a>
                    <a href="" class="homelocators__row--item">
                        <div class="homelocators__row--content">
                            <p>
                                JOB <br>
                                OPENINGS
                            </p>
                            <span>Click here to for Job Opportunities</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="homegallery">
        <div class="homegallery__container">
            <div class="homegallery__title">
                <h3>
                    Gallery
                </h3>
                <div class="homegallery__viewmore">
                    <a href="<?php echo site_url('/gallery'); ?>">View more galllery</a>
                </div>
            </div>
            <div class="homegallery__row">
                <div class="homegallery__item large">
                    <div class="homegallery__item--img">
                        <img src="<?php echo THEME_DIR; ?>/assets/img/gallery_1.png" alt="Algacon Aquafeeds">
                    </div>
                    <div class="homegallery__item--title">
                        <p>Algacon Aquafeeds</p>
                    </div>
                </div>
                <div class="homegallery__item small">
                    <div class="homegallery__item--img">
                        <img src="<?php echo THEME_DIR; ?>/assets/img/gallery_2.png" alt="Consectetuer adipiscing">
                    </div>
                    <div class="homegallery__item--title">
                        <p>Consectetuer adipiscing</p>
                    </div>
                </div>
                <div class="homegallery__item small">
                    <div class="homegallery__item--img">
                        <img src="<?php echo THEME_DIR; ?>/assets/img/gallery_3.png" alt="Station ullamcorper">
                    </div>
                    <div class="homegallery__item--title">
                        <p>Station ullamcorper</p>
                    </div>
                </div>
                <div class="homegallery__item large">
                    <div class="homegallery__item--img">
                        <img src="<?php echo THEME_DIR; ?>/assets/img/gallery_4.png" alt="Nostrud exerci tation">
                    </div>
                    <div class="homegallery__item--title">
                        <p>Nostrud exerci tation</p>
                    </div>
                </div>
                <div class="homegallery__item small">
                    <div class="homegallery__item--img">
                        <img src="<?php echo THEME_DIR; ?>/assets/img/gallery_5.png" alt="Suscipit lobortis nisl">
                    </div>
                    <div class="homegallery__item--title">
                        <p>Suscipit lobortis nisl</p>
                    </div>
                </div>
                <div class="homegallery__item small">
                    <div class="homegallery__item--img">
                        <img src="<?php echo THEME_DIR; ?>/assets/img/gallery_6.png" alt="Dolor sit amet">
                    </div>
                    <div class="homegallery__item--title">
                        <p>Dolor sit amet</p>
                    </div>
                </div>
                <div class="homegallery__item small">
                    <div class="homegallery__item--img">
                        <img src="<?php echo THEME_DIR; ?>/assets/img/gallery_7.png" alt="Sullamcorper suscipit">
                    </div>
                    <div class="homegallery__item--title">
                        <p>Sullamcorper suscipit</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



<section>
    <div class="homeevents">
        <div class="homeevents__container">
            <div class="homeevents__title">
                <h3>
                    Events
                </h3>
                <div class="homegallery__viewmore">
                    <a href="<?php echo site_url('/events'); ?>">View more events</a>
                </div>
            </div>
            <?php
query_posts(array(
    'post_type' => 'event',
    'posts_per_page' => 3,
));

if (have_posts()): ?>
            <div class="homeevents__row">
                <?php while (have_posts()): the_post();?>
                <div class="homeevents__items">
                    <div class="homeevents__items--img">
                        <?php if (has_post_thumbnail()) {
        the_post_thumbnail();
    } else {?>
                        <img src="<?php echo THEME_DIR; ?>/assets/img/news_img1.jpg" alt="<?php the_title();?>">
                        <?php }?>
                    </div>
                    <div class="homeevents__items--title">
                        <h3><?php the_title();?></h3>
                    </div>
                    <div class="homeevents__items--desc">
                        <p>
                            <?php echo wp_trim_words(get_the_content(), 36, '...'); ?>
                        </p>
                    </div>

                    <div class="homeevents__items--viewmore">
                        <a href="<?php the_permalink();?>">Read more</a>
                    </div>
                </div>
                <?php endwhile;?>
                <?php else: ?>
                <div class="no-result">
                    <h1>No results found</h1>
                </div>
            </div>
            <?php endif;?>
        </div>
    </div>
</section>

<?php get_footer();?>