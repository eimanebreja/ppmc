<?php
/*** Template Name: Good Governance */
get_header();
?>
<section>
    <div class="governance">
        <div class="governance__banner">
            <div class="governance__container">
                <div class="governance__banner--title">
                    <h2>
                        Disclosure Requirements
                    </h2>
                </div>
            </div>
        </div>
        <div class="governance__container">
            <div class="governance__content">
                <div class="governance__content--header">
                    <h3> Disclosure Requirements</h3>
                    <!-- <p class="date">
                        <span>Date Posted :</span> <?php the_time('F j, Y');?>
                    </p> -->
                </div>
                <div class="governance__content--body">
                    <?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}
?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();