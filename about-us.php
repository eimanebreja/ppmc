<?php
/*** Template Name: About Us */
get_header();
?>

<section>
    <div class="investment">
        <div class="investment__banner">
            <div class="investment__container">
                <div class="investment__banner--title">
                    <h2>
                        About PPMC
                    </h2>
                </div>
            </div>
        </div>
        <div class="investment__container">
            <div class="investment__body">
                <div class="investment__tab">
                    <!--- Button TAB --->
                    <ul class="investment__tab--btn">
                        <li data-tab-target="#history" class="active">
                            History
                        </li>
                        <li data-tab-target="#landmap">
                            Land Use Map
                        </li>
                        <li data-tab-target="#disclosure">
                            Disclosure Requirements
                        </li>
                    </ul>

                    <div class="investment__tab--content">
                        <div id="history" data-tab-content class="active">
                            <h1>History</h1>
                        </div>
                        <div id="landmap" data-tab-content>
                            <h1> Land Use Map</h1>
                        </div>
                        <div id="disclosure" data-tab-content>
                            <h1> Disclosure Requirements</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();