<?php
acf_form_head();?>
<?php
/*** Template Name: Events */

get_header();

?>


<div class="event">
    <div class="event__banner">
        <div class="event__container">
            <div class="event__banner--title">
                <h2>
                    Events
                </h2>
            </div>
        </div>
    </div>
    <div class="event__container">
        <?php
require_once "partials/calendar.php";
$date_now = wp_date('Y-m-d');
$calendar = new Calendar($date_now);

query_posts(array(
    'post_type' => 'booking',
    'post_status' => 'any',
));

if (have_posts()): ?>
        <?php while (have_posts()): the_post();?>
        <?php
    $stat = get_post_status();
    $date_book = get_field('reservation_date');
    $calendar->add_event('Birthday', $date_book, 1, $stat);?>
        <?php endwhile;?>
        <?php else: ?>
        <?php endif;?>




        <div class="event__content">
            <div class="event__content--header">
                <h3>Event Booking</h3>
                <p>Make your Events Happen here at the Poro Point Baywalk with Events Center</p>
            </div>
            <div class="event__content--area">

                <div class="event__content--form">
                    <?php
$date = date('M-d-Y');
acf_form(array(
    'post_id' => 'new_post',
    // 'post_title' => true,

    'field_groups' => array(
        'group_63aa5d2bbf2f3',
    ),
    'updated_message' => __("Booking is successfully submitted.", 'acf'),
    'new_post' => array(
        'post_type' => 'booking',
        'post_status' => 'pending',
        'post_title' => 'Event Booking as of ' . $date . ' ',
    ),
    'submit_value' => 'Submit',
));
?>
                </div>

                <div class="event__content--calendar">
                    <?=$calendar?>

                    <div class="event__content--legend">
                        <div class="legend-area">
                            <div class="box white"></div>
                            <span>Available</span>
                        </div>
                        <div class="legend-area">
                            <div class="box violet"></div>
                            <span>Booked</span>
                        </div>
                        <div class="legend-area">
                            <div class="box red"></div>
                            <span>Pending</span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<?php get_footer();