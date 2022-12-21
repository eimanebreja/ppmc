<?php
/*** Template Name: Procurement */
get_header();
?>

<div class="procurement">
    <div class="procurement__banner">
        <div class="procurement__container">
            <div class="procurement__banner--title">
                <h2>
                    Procurement
                </h2>
            </div>
        </div>
    </div>
    <div class="procurement__container">
        <div class="procurement__body">
            <!---- MAIN CONTENT   ---->

            <div class="procurement__content">
                <div class="procurement__content--header">
                    <h3>Procurement Notice</h3>
                </div>
                <?php
query_posts(array(
    'post_type' => 'procurement',
    'posts_per_page' => 7,
    'orderby' => 'DESC',
));

if (have_posts()): ?>
                <?php while (have_posts()): the_post();?>
                <div class="procurement__content--tem">
                    <div class="procurement__content--title">
                        <a href="<?php the_permalink();?>">
                            <?php the_title();?>
                        </a>
                    </div>
                    <div class="procurement__content--desc">
                        <p>
                            <?php echo wp_trim_words(get_the_content(), 30, '...'); ?>
                        </p>
                    </div>
                    <div class="procurement__content--details">
                        <div class="details-date">
                            <span class="date">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_date.svg" alt="Icon Date">
                            </span>
                            <?php the_time('F j, Y');?>
                        </div>
                        <div class="details-documents">
                            <span class="documents">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_document.svg" alt="Icon Date">
                            </span>
                            <?php
    $field = get_field_object('document_type');
    $value = $field['value'];
    $label = $field['choices'][$value];
    ?>
                            <?php echo esc_html($label); ?>
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
            <!---- END OF MAIN CONTENT   ---->

            <!----   SIDEBAR   ---->
            <div class="procurement__sidebar">
                <div class="procurement__sidebar--header">
                    Older Posts
                </div>
                <div class="procurement__sidebar--item">
                    <div class="procurement__sidebar--title">
                        <a href="">Website Design and development</a>
                    </div>
                    <div class="procurement__sidebar--details">
                        <div class="details-date">
                            <span class="date">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_date.svg" alt="Icon Date">
                            </span>
                            November 18, 2022
                        </div>
                        <div class="details-documents">
                            <span class="documents">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_document.svg" alt="Icon Date">
                            </span>
                            Bidding Documents
                        </div>
                    </div>
                </div>




                <?php

$args = array(
    'posts_per_page' => 5,
    'offset' => -1,
    'post_status' => "publish",
    'post_type' => "procurement",
    'orderby' => "post_date",
);

if (have_posts()): ?>
                <?php while (have_posts()): the_post();?>
                <ul>
                    <li>
                        <?php the_title();?>
                    </li>
                </ul>
                <?php endwhile;?>


                <?php else: ?>
                <div class="no-result">
                    <h1>No results found</h1>
                </div>
                <?php endif;?>




                <!-- <div class="procurement__sidebar--item">
                    <div class="procurement__sidebar--title">
                        <a href="">Supply and Delivery of Water</a>
                    </div>
                    <div class="procurement__sidebar--details">
                        <div class="details-date">
                            <span class="date">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_date.svg" alt="Icon Date">
                            </span>
                            November 18, 2022
                        </div>
                        <div class="details-documents">
                            <span class="documents">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_document.svg" alt="Icon Date">
                            </span>
                            Bidding Documents
                        </div>
                    </div>
                </div>
                <div class="procurement__sidebar--item">
                    <div class="procurement__sidebar--title">
                        <a href="">Supply, Delivery and Installation of Airconditioning Units</a>
                    </div>
                    <div class="procurement__sidebar--details">
                        <div class="details-date">
                            <span class="date">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_date.svg" alt="Icon Date">
                            </span>
                            November 18, 2022
                        </div>
                        <div class="details-documents">
                            <span class="documents">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_document.svg" alt="Icon Date">
                            </span>
                            Bidding Documents
                        </div>
                    </div>
                </div>
                <div class="procurement__sidebar--item">
                    <div class="procurement__sidebar--title">
                        <a href="">Supply and Delivery of Janitorial Supplies for 4th Quarter of CY 2022</a>
                    </div>
                    <div class="procurement__sidebar--details">
                        <div class="details-date">
                            <span class="date">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_date.svg" alt="Icon Date">
                            </span>
                            November 18, 2022
                        </div>
                        <div class="details-documents">
                            <span class="documents">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_document.svg" alt="Icon Date">
                            </span>
                            Bidding Documents
                        </div>
                    </div>
                </div>
                <div class="procurement__sidebar--item">
                    <div class="procurement__sidebar--title">
                        <a href="">Supply and Delivery of Office Supplies for 4th Quarter of CY 2022</a>
                    </div>
                    <div class="procurement__sidebar--details">
                        <div class="details-date">
                            <span class="date">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_date.svg" alt="Icon Date">
                            </span>
                            November 18, 2022
                        </div>
                        <div class="details-documents">
                            <span class="documents">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_document.svg" alt="Icon Date">
                            </span>
                            Bidding Documents
                        </div>
                    </div>
                </div>
                <div class="procurement__sidebar--item">
                    <div class="procurement__sidebar--title">
                        <a href="">Supply and Delivery of Flash Drive</a>
                    </div>
                    <div class="procurement__sidebar--details">
                        <div class="details-date">
                            <span class="date">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_date.svg" alt="Icon Date">
                            </span>
                            November 18, 2022
                        </div>
                        <div class="details-documents">
                            <span class="documents">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_document.svg" alt="Icon Date">
                            </span>
                            Bidding Documents
                        </div>
                    </div>
                </div>
                <div class="procurement__sidebar--item">
                    <div class="procurement__sidebar--title">
                        <a href="">Lease of Venue and Meals-Familiarization Tour</a>
                    </div>
                    <div class="procurement__sidebar--details">
                        <div class="details-date">
                            <span class="date">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_date.svg" alt="Icon Date">
                            </span>
                            November 18, 2022
                        </div>
                        <div class="details-documents">
                            <span class="documents">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_document.svg" alt="Icon Date">
                            </span>
                            Bidding Documents
                        </div>
                    </div>
                </div>
                <div class="procurement__sidebar--item">
                    <div class="procurement__sidebar--title">
                        <a href="">PPMC Website Design and Development Project</a>
                    </div>
                    <div class="procurement__sidebar--details">
                        <div class="details-date">
                            <span class="date">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_date.svg" alt="Icon Date">
                            </span>
                            November 18, 2022
                        </div>
                        <div class="details-documents">
                            <span class="documents">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_document.svg" alt="Icon Date">
                            </span>
                            Bidding Documents
                        </div>
                    </div>
                </div>
                <div class="procurement__sidebar--item">
                    <div class="procurement__sidebar--title">
                        <a href="">Request for Expression of Interest</a>
                    </div>
                    <div class="procurement__sidebar--details">
                        <div class="details-date">
                            <span class="date">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_date.svg" alt="Icon Date">
                            </span>
                            November 18, 2022
                        </div>
                        <div class="details-documents">
                            <span class="documents">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_document.svg" alt="Icon Date">
                            </span>
                            Bidding Documents
                        </div>
                    </div>
                </div>
                <div class="procurement__sidebar--item">
                    <div class="procurement__sidebar--title">
                        <a href="">Construction of Poro Point Baywalk Structure</a>
                    </div>
                    <div class="procurement__sidebar--details">
                        <div class="details-date">
                            <span class="date">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_date.svg" alt="Icon Date">
                            </span>
                            November 18, 2022
                        </div>
                        <div class="details-documents">
                            <span class="documents">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_document.svg" alt="Icon Date">
                            </span>
                            Bidding Documents
                        </div>
                    </div>
                </div>
                <div class="procurement__sidebar--item">
                    <div class="procurement__sidebar--title">
                        <a href="">Construction of Poro Point Baywalk Structure</a>
                    </div>
                    <div class="procurement__sidebar--details">
                        <div class="details-date">
                            <span class="date">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_date.svg" alt="Icon Date">
                            </span>
                            November 18, 2022
                        </div>
                        <div class="details-documents">
                            <span class="documents">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_document.svg" alt="Icon Date">
                            </span>
                            Bidding Documents
                        </div>
                    </div>
                </div>
                <div class="procurement__sidebar--item">
                    <div class="procurement__sidebar--title">
                        <a href="">Supply and Delivery of Painting Materials</a>
                    </div>
                    <div class="procurement__sidebar--details">
                        <div class="details-date">
                            <span class="date">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_date.svg" alt="Icon Date">
                            </span>
                            November 18, 2022
                        </div>
                        <div class="details-documents">
                            <span class="documents">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_document.svg" alt="Icon Date">
                            </span>
                            Bidding Documents
                        </div>
                    </div>
                </div> -->
            </div>

            <!---- END OF SIDEBAR   ---->
        </div>
    </div>
</div>



<?php get_footer();