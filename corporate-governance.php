<?php
/*** Template Name: Corporate Governance */
get_header();
?>
<section>
    <div class="governance">
        <div class="governance__banner">
            <div class="governance__container">
                <div class="governance__banner--title">
                    <h2>
                        Corporate Governance
                    </h2>
                </div>
            </div>
        </div>
        <div class="governance__container">
            <div class="governance__content">
                <div class="governance__content--header">
                    <h3> Corporate Governance Scorecard</h3>
                </div>
                <div class="governance__content--body">

                    <?php

$arg_archives = array(
    'post_type' => 'corporate-governance',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'ASC',

);
$arg_query = new WP_Query($arg_archives);
?>
                    <?php if ($arg_query->have_posts()) {$i = 1;?>
                    <div class="governance__corporate">
                        <?php while ($arg_query->have_posts()) {
    $arg_query->the_post();?>
                        <div class="governance__corporate--collapse" id="showmenus<?php echo $i; ?>">
                            <div class="collapse-title">
                                <?php the_title();?>
                                <!-- <p class="date-posted"><span>Date Posted: </span><?php the_time('F j, Y');?></p> -->
                            </div>
                            <div class="collaps-icon">
                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_chevron.svg" alt="Icon Chevron">
                            </div>
                        </div>
                        <div class="governance__corporate--desc menus<?php echo $i; ?>">
                            <div class="desc-content">
                                <?php the_content();?>
                            </div>
                        </div>
                        <script>
                        $(document).ready(function() {
                            $("#showmenus<?php echo $i; ?>").click(function() {
                                $(".menus<?php echo $i; ?>").slideToggle("fast");
                            });
                        });
                        </script>
                        <?php
$i++;
}
    ?>
                    </div>
                    <?php

}
?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();