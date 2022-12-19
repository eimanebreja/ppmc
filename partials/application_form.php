<?php
/*** Template Name: Application Form */
acf_form_head();
get_header();
?>
<div class="container">
    <h2>Add Applicant</h2>
    <div id="content">

        <?php
$date = date('M-d-Y');
acf_form(array(
    'post_id' => 'new_post',
    // 'post_title' => true,

    'field_groups' => array(
        'group_638e89937086c', /* Go to acf-json
    folder you created before and get the field group/s */
    ),
    'new_post' => array(
        'post_type' => 'Application Form',
        'post_status' => 'publish',
        'post_title' => 'Applicant as of ' . $date . ' ',
    ),
    'submit_value' => 'Add',
));

?>

    </div>

    <h2>List of Applicant</h2>
    <table>
        <?php
query_posts(array(
    'posts_per_page' => 10,
    'orderby' => 'DESC',
    'post_type' => array(
        'Application Form')));
if (have_posts()): ?>

        <tr>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Email Address</th>
            <th>Age</th>
            <th>Address</th>
        </tr>

        <?php
while (have_posts()):
    the_post();
    ?>
					        <tr style="border-top:5px solid #eeeeee;">
					            <td><?php echo get_field('first_name'); ?></td>
					            <td><?php echo get_field('middle_name'); ?></td>
					            <td><?php echo get_field('last_name'); ?></td>
					            <td><?php echo get_field('email_address'); ?></td>
					            <td><?php echo get_field('age'); ?></td>
					            <td><?php echo get_field('address'); ?></td>
					        </tr>

					        <tr>
					            <th colspan="6">
					                Delegates Profiles
					            </th>
					        </tr>
					        <?php

// Check rows existexists.
    if (have_rows('delegates_profiles')): ?>
					        <tr>
					            <th colspan="2">First Name</th>
					            <th>Email Address</th>
					            <th>Contact Number</th>
					            <th colspan="2">Address</th>
					        </tr>
					        <?php
    while (have_rows('delegates_profiles')): the_row();?>
										        <tr>
										            <td colspan="2"><?php echo get_sub_field('first_name_dp'); ?></td>
										            <td><?php echo get_sub_field('email_address_dp'); ?></td>
										            <td><?php echo get_sub_field('contact_number_dp'); ?></td>
										            <td colspan="2"><?php echo get_sub_field('address_dp'); ?></td>
										        </tr>
										        <?php

    endwhile;?>
					        <?php
else: ?>

        <tr>
            <td colspan="4">No delegates Profiles</td>

        </tr>

        <?php
endif;
?>
        <?php
endwhile;
endif;
wp_reset_query();
wp_reset_postdata();
?>
    </table>

</div>

<?php get_footer();