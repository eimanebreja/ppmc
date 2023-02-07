<?php
/*** Template Name: Transparency Seal */
get_header();
?>
<section>
    <div class="governance">
        <div class="governance__banner">
            <div class="governance__container">
                <div class="governance__banner--title">
                    <h2>
                        Transparency Seal
                    </h2>
                </div>
            </div>
        </div>
        <div class="governance__container">
            <div class="governance__content">
                <div class="governance__content--header">
                    <h3>Transparency Seal</h3>
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