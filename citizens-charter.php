<?php
/*** Template Name: Citizens Charter */
get_header();
?>
<section>
    <div class="citizen">
        <div class="citizen__banner">
            <div class="citizen__container">
                <div class="citizen__banner--title">
                    <h2>
                        Citizen’s Charter
                    </h2>
                </div>
            </div>
        </div>
        <div class="citizen__container">
            <div class="citizen__content">
                <div class="citizen__content--header">
                    <h3>Citizen’s Charter</h3>
                </div>
                <div class="citizen__content--body">
                    <object
                        data="<?php echo THEME_DIR; ?>/assets/file/FINAL_PPMC_Citizens_Charter_4thEdition_CY2022_UNCONTROLLED_COPY.pdf"
                        type="application/pdf">
                        <p>Alternative text - include a link <a href="myfile.pdf">to the PDF!</a></p>
                    </object>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();