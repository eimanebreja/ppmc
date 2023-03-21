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
if (have_rows('document_file_upload')) {
        while (have_rows('document_file_upload')) {
            the_row();
            $file_field = get_sub_field('document_file');
            if ($file_field) {

                $file_url = $file_field['url'];
                $file_id = $file_field['id'];
                $file_title = get_the_title($file_id);
                $file_metadata = wp_get_attachment_metadata($file_id);
                $file_uploaded = date('F j, Y', strtotime($file_metadata['file']));
                $date = get_the_date('F j, Y', $file_id);
                ?>
                <ul class="document-menu">
                    <li class="document-list">
                        <span>
                            <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_pdf.svg" alt="Icon PDF">
                        </span>
                        <a href="<?php echo $file_url; ?>" target="_blank"
                            class="document-link"><?php echo $file_title; ?>
                        </a>

                        <p class="date-post"><span>Date Posted : </span> <?php echo $date; ?></p>

                    </li>
                </ul>
                <?php }
        }
    }
    ?>
            </div>
            <div class="procurement__single--status">
                <?php
$field = get_field_object('document_status');
    $value = $field['value'];
    $label = $field['choices'][$value];
    ?>
                <p>Status : <span class="status-<?php echo esc_attr($value); ?>">
                        <?php echo esc_html($label); ?>
                    </span>
                </p>
            </div>
        </div>

        <div class="procurement__comment">
            <?php comments_template('', true);?>
        </div>

    </div>

    <?php }?>
</div>

<?php get_footer();?>