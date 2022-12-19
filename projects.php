<?php
/*** Template Name: Projects */
get_header();
?>

<div class="project">
    <div class="project__banner">
        <div class="project__container">
            <div class="project__banner--title">
                <h2>
                    Projects
                </h2>
            </div>
        </div>
    </div>
    <div class="project__container">
        <div class="project__content">
            <div class="project__content--header">
                <h3>Projects</h3>
            </div>
            <div class="project__content--item">
                <div class="project__content--img">
                    <img src="<?php echo THEME_DIR; ?>/assets/img/projects/project_1.jpg" alt="Algacon Aquafeeds">
                </div>
                <div class="project__content--info">
                    <div class="info-title">
                        Algacon Aquafeeds
                    </div>
                    <div class="info-desc">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut
                        laoreet dolore magna veniam, quis nostrud exerci tation ullamcorper suscipit nonummy nibh
                        euismod
                        tincidunt ut laoreet dolore magna veniam lobortis nisl ut aliquip ex ea commodo consequat
                    </div>
                    <div class="info-btn">
                        <a href="">View Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();