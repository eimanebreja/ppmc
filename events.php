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
                <div class="title">
                    <h3>Event Booking</h3>
                    <p>Make your Events Happen here at the Poro Point Baywalk with Events Center</p>
                </div>
                <div class="reservation-btn">
                    <a href="<?php echo THEME_DIR; ?>/assets/file/Reservation-Form-Terms-and-Conditions.docx"
                        title="Download our Reservation Form and Terms and Conditions." download>Reservation
                        Form</a>
                </div>
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

        <div class="terms-conditions">
            <div class="terms-conditions__header">
                <h3>
                    Terms and Conditions
                </h3>
            </div>
            <div class="terms-conditions__content">
                <div class="terms-conditions__content--list">
                    <ul>
                        <li>
                            <p>
                                The Reserving Party/Client shall conduct inspection together with PPMC representatives
                                prior to usage of the area and upon turn-over after the event/function.
                            </p>
                        </li>
                        <li>
                            <p>
                                Reserving Party/Client shall assure that guests/participants will strictly comply with
                                all the pertinent rules and regulations promulgated by PPMC.
                            </p>
                        </li>

                        <li>
                            <p>
                                PPMC shall rent out the venue only (Baywalk with Event Center Facilities) on an
                                “As-Is-Where Is” basis. The Reserving Party/Client shall be responsible for any
                                equipment, facilities and amenities not available in the area or beyond what the area
                                can provide such as but not limited to tables, chairs, tents, sound system, generator
                                set and portalets, to include set-up and removal. Installation of additional equipment
                                requiring electrical consumption (i.e. special lightings, mobile, band equipment, etc.)
                                and other hazardous supplies (i.e.fireworks, bonfire, etc.) shall be subject to the
                                approval of PPMC in conformity with existing Safety Rules and Regulations and this shall
                                likewise be charged separately. The Reserving Party/Client shall be responsible for
                                coordinating with PPMC for electricity and water requirements. All expenses, direct and
                                incidentals for electricity, water and other utilities shall be for the account of the
                                Reserving Party/Client.
                            </p>

                            <p>
                                The Reserving Party/Client shall be responsible for assigning, allocating and detailing
                                emergency response team/medics and security marshals in coordination with PPMC Security
                                Office in order to maintain safety and crowd control during the event.
                            </p>
                        </li>
                        <li>
                            <p>
                                The Reserving Party/Client shall be responsible for maintaining order and cleanliness of
                                the premises throughout the event and turning-over the facilities in original condition
                                after the event. The Reserving Party/Client agrees to deposit a Bond in the amount of
                                Three Thousand Pesos (PhP3,000.00) to ensure Cleanliness of the Venue. The Bond will be
                                released to the Reserving Party/Client five (5) working days after the event, provided
                                the venue was verified clean by PPMC. Bonds not claimed within thirty (30) days will be
                                forfeited.
                            </p>
                        </li>

                        <li>
                            <p>
                                Should there be contracted caterer and/or trade and food fair participants, the
                                caterer/fair participants and the Reserving Party/Client shall be jointly and severally
                                responsible for the removal of trash, garbage and other waste matter from the venue.
                                Washing of dishes and other utensils is strictly prohibited.
                            </p>
                        </li>

                        <li>
                            <p>
                                The Client agrees to secure from PPMC the necessary Gate Pass for all their equipment
                                which
                                will be brought in and brought out of the Poro Point Freeport Zone. This shall be
                                secured
                                three (3) days prior to the contracted date.
                            </p>
                        </li>

                        <li>
                            <p>
                                Selling of goods, food, souvenir items and other merchandise shall be subject to the
                                approval of PPMC.
                            </p>
                        </li>


                        <li>

                            <p>

                                The venue shall be subject to spot checks/ocular inspection by PPMC representatives
                                before,
                                during and after the function to monitor compliance with these Terms and Conditions, to
                                ensure that all requirements are provided, and to determine additional charges, if any.
                            </p>
                        </li>

                        <li>
                            <p>
                                Events or activities that are contrary to law, public order, public policy, morals, or
                                good customs are strictly prohibited in the Poro Point Freeport Zone.
                            </p>
                        </li>

                        <li>
                            <p>
                                In the event of suit arising out of or in connection with this agreement, the parties
                                hereto
                                agree to bring their causes of action exclusively in the proper court of City of San
                                Fernando, La Union.

                            </p>
                        </li>

                        <li>
                            <p>
                                Installation of parachute tents or any type of shade that will need tying as well as
                                display/installation of promotional collaterals (i.e. banners, tarpaulins, etc.) is
                                subject to PPMC’s approval.
                            </p>
                        </li>

                        <li>
                            <p>
                                Full payment is required including the Cleanliness Bond upon submission of the completed
                                reservation form in order to confirm the booking. Re-scheduling of bookings will be
                                subject
                                to availability. Payment shall be made in cash, managers or cashier’s check acceptable
                                to
                                PPMC.
                            </p>
                        </li>
                        <li>
                            <p>
                                Booking cancellations should be made in writing and must be received at least ten (10)
                                days
                                prior to event date to avoid penalty. The following cancellation policies shall apply:
                            </p>
                            <table>

                                <tr>
                                    <td>Cancellation received less than ten (10) days prior to event booking </td>
                                    <td>50% of the payment will be forfeited</td>
                                </tr>
                                <tr>
                                    <td>Cancellation made 24 hours or less prior to event booking </td>
                                    <td>No refund </td>
                                </tr>
                            </table>
                        </li>
                        <li>
                            <p>
                                PPMC reserves the right to change prices without prior notice.
                            </p>
                        </li>
                        <li>
                            <p>
                                The Reserving Party/Client shall be responsible for the cost of replacement of losses
                                and repair of damage suffered or incurred during the duration of the event and those
                                arising from the negligent or intentional act of its staff or employee or third person
                                in the conduct of the said event. The Reserving Party/Client shall be responsible for
                                any misconduct or misdeed by any of its personnel or guests. Any loss, damage, or injury
                                to the Poro Point Baywalk Facilities or PPMC personnel attributed to acts or omissions
                                of the Reserving Party/Client and/or their guests during the function shall be for the
                                account of and/or liability or responsibility of the Reserving Party/Client.

                            </p>
                        </li>
                        <li>
                            <p>
                                The Reserving Party/Client will hold PPMC, its President, members of the Board, officers
                                and any of its staff free from any liability from any and all claims, demands, cause of
                                action of whatever nature arising out of usage of PPMC facilities, road, etc. for any
                                injury, damage or wrongful death from the said event.

                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();