<?php
/*** Template Name: Feedback */
get_header();
?>

<section>
    <div class="feedback">
        <div class="feedback__banner">
            <div class="feedback__container">
                <div class="feedback__banner--title">
                    <h2>
                        Feedback
                    </h2>
                </div>
            </div>
        </div>
        <div class="feedback__container">
            <div class="feedback__content">
                <div class="feedback__content--header">
                    <h3>Feedback</h3>
                </div>
                <div class="feedback__content--body">
                    <div class="feedback__content--info">
                        <div class="feedback__content--title">
                            Stakeholder feedback form
                        </div>
                        <div class="feedback__content--desc">
                            <p>
                                <!-- Please fill out this brief feedback form so we can ensure a top quality experience
                                to all of our visitors. -->
                            </p>
                        </div>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="170" title="Feedback Form"]'); ?>

                </div>
            </div>
        </div>
    </div>
</section>




<?php get_footer();