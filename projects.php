<?php
/*** Template Name: Projects */
get_header();
?>

<div class="project">
    <div class="project__banner">
        <div class="project__container">
            <div class="project__banner--title">
                <h2>
                    Programs and Projects
                </h2>
            </div>
        </div>
    </div>
    <div class="project__container">
        <div class="about__tab">
            <ul class="about__tab--btn">
                <li data-tab-target="#insfrastructure" class="active">
                    Insfrastructure Projects
                </li>
                <li data-tab-target="#environmental">
                    Environmental Management Projects
                </li>
            </ul>
            <div class="about__tab--content">
                <div id="insfrastructure" data-tab-content class="active">
                    <div class="project__content">
                        <div class="project__content--header">
                            <h3>Insfrastructure Projects</h3>
                        </div>
                        <?php
$project = new WP_Query([
    'post_type' => 'project',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => 1,
]);
?>
                        <?php if ($project->have_posts()): ?>
                        <div class="project__content--row">
                            <?php
while ($project->have_posts()): $project->the_post();?>
                            <div class="project__content--item">
                                <div class="project__content--img">
                                    <?php if (has_post_thumbnail()) {
        the_post_thumbnail();
    } else {?>
                                    <img src="<?php echo THEME_DIR; ?>/assets/img/projects/project_2.jpg"
                                        alt="Enterprise visit to coastline">
                                    <?php }?>
                                </div>
                                <div class="project__content--info">
                                    <div class="info-title">
                                        <h4> <?php the_title();?></h4>
                                    </div>
                                    <div class="info-desc">
                                        <p>
                                            <?php echo wp_trim_words(get_the_content(), 70, '...'); ?>
                                        </p>
                                    </div>
                                    <div class="info-btn">
                                        <a href="<?php the_permalink();?>">View Project</a>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile;?>
                            <?php else: ?>
                            <div class="no-result">
                                <h1>No results found</h1>
                            </div>
                        </div>
                        <?php endif;?>
                        <?php wp_reset_postdata();?>

                        <div class="project__content--btn">
                            <a href="#!" class="btn btn__primary" id="load-more">Load more</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="about__tab--content">
                <div id="environmental" data-tab-content>
                    <div class="project__content">
                        <div class="project__content--header">
                            <h3> Environmental Management Projects</h3>
                        </div>

                        <div class="project__content--row">

                            <div class="project__content--item">
                                <div class="project__content--img">

                                    <img src="<?php echo THEME_DIR; ?>/assets/img/projects/project_2.jpg"
                                        alt="Enterprise visit to coastline">

                                </div>
                                <div class="project__content--info">
                                    <div class="info-title">
                                        <h4> </h4>
                                    </div>
                                    <div class="info-desc">
                                        <p>

                                        </p>
                                    </div>
                                    <div class="info-btn">
                                        <a href="<?php the_permalink();?>">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>