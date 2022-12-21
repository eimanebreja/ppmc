<?php get_header();?>
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


    <?php
while (have_posts()) {
    the_post();
    ?>
    <div class="project__container">
        <div class="project__single">
            <div class="project__single--header">
                <h2><?php the_title();?></h2>
            </div>
            <div class="project__single--row">
                <div class="project__single--img">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title();?>">
                </div>
                <div class="project__single--status">
                    <div class="status-date">
                        <p class="date"> <?php the_time('F j, Y');?></p>
                        <p class="dash"></p>
                        <p class="author">
                            <span>AUTHOR: </span> <?php the_author();?>
                        </p>
                    </div>
                    <?php
if (get_field('project_status') == 'development') {?>
                    <div class="status-area">
                        <div class="status-area__circle">
                        </div>
                        <div class="status-area__dash disabled">
                        </div>
                        <div class="status-area__circle disabled">
                        </div>
                        <div class="status-area__dash disabled">
                        </div>
                        <div class="status-area__circle disabled">
                        </div>
                    </div>
                    <div class="status-name">
                        <p>Development</p>
                        <p class="disabled">Procurement</p>
                        <p class="disabled">Implementation</p>
                    </div>
                    <?php }?>

                    <?php
if (get_field('project_status') == 'procurement') {?>
                    <div class="status-area">
                        <div class="status-area__circle">
                        </div>
                        <div class="status-area__dash">
                        </div>
                        <div class="status-area__circle">
                        </div>
                        <div class="status-area__dash disabled">
                        </div>
                        <div class="status-area__circle disabled">
                        </div>
                    </div>
                    <div class="status-name">
                        <p>Development</p>
                        <p>Procurement</p>
                        <p class="disabled">Implementation</p>
                    </div>
                    <?php }?>

                    <?php
if (get_field('project_status') == 'implementation') {?>
                    <div class="status-area">
                        <div class="status-area__circle">
                        </div>
                        <div class="status-area__dash">
                        </div>
                        <div class="status-area__circle">
                        </div>
                        <div class="status-area__dash">
                        </div>
                        <div class="status-area__circle">
                        </div>
                    </div>
                    <div class="status-name">
                        <p>Development</p>
                        <p>Procurement</p>
                        <p>Implementation</p>
                    </div>
                    <?php }?>

                    <div class="project__single--map">
                        <?php the_field('project_maps');?>
                    </div>
                </div>
            </div>
            <div class="project__single--body">
                <div class="project__single--title">
                    <h4>Algacon Aquafeeds</h4>
                </div>
                <div class="project__single--desc">
                    <p class="desc">
                        Description:
                    </p>

                    <?php the_content();?>

                </div>

            </div>
        </div>
    </div>
    <?php }?>

</div>

<?php get_footer();?>