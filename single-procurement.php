<?php get_header();?>

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

    <?php
while (have_posts()) {
    the_post();
    ?>
    <div class="procurement__container">
        <div class="procurement__single">
            <div class="procurement__single--header">
                <h3> <?php the_title();?></h3>
            </div>
            <div class="procurement__single--document">
                <?php
if (have_rows('document_file_upload')):
        while (have_rows('document_file_upload')): the_row();
            $sub_value = get_sub_field('document_file');?>
                <ul class="document-menu">
                    <li class="document-list">
                        <span>
                            <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_pdf.svg" alt="Icon PDF">
                        </span>
                        <a href="<?php echo $sub_value['url']; ?>" target="_blank"
                            class="document-link"><?php echo $sub_value['title']; ?>
                        </a>
                    </li>
                </ul>
                <?php if ($sub_value): ?>
                <?php endif;?>
                <?php
endwhile;
    else:
    endif;
    ?>
            </div>
        </div>

        <div class="procurement__comment">
            <?php comments_template('', true);?>
        </div>

    </div>

    <?php }?>
</div>

<?php get_footer();?>