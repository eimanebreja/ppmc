<?php
/*** Template Name: Contact Us */
get_header();
?>

<section>
    <div class="contact">
        <div class="contact__banner">
            <div class="contact__container">
                <div class="contact__banner--title">
                    <h2>
                        Contact Us
                    </h2>
                </div>
            </div>
        </div>
        <div class="contact__container">
            <div class="contact__content">
                <div class="contact__content--header">
                    <h3>Contact Us</h3>
                </div>
                <div class="contact__content--body">
                    <div class="contact__content--info">
                        <div class="contact__content--title">
                            Personal Information Collection Statement
                        </div>
                        <div class="contact__content--desc">
                            <ul>
                                <li>
                                    This is a personal data collection statement made under the Data Privacy Act of 2012
                                    or RA 10173.
                                </li>
                                <li>
                                    Personal data provided by you to the Poro Point Management Corporation (PPMC)
                                    through the completion of this contact form will be used by the collecting PPMC unit
                                    to perform its administrative function (e.g. coordination) and to provide you with
                                    updates.
                                </li>
                                <li>
                                    Please note that it is mandatory for you to provide personal data marked with
                                    asterisks. In the event that you do not provide contact information, the relevant
                                    PPMC unit may not be able to communicate with you or provide you with updates in a
                                    timely manner.
                                </li>
                                <li>
                                    Your personal data will be kept confidential and handled by the authorized staff
                                    members of the collecting PPMC unit. PPMC may share your information internally in
                                    relation to your transaction with us, however, we will not disclose such information
                                    to any external party without your prior consent.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <form action="" class="contact__content--form">
                        <div class="contact__content--row">
                            <div class="contact__content--item">
                                <div class="contact__content--label">
                                    Your Name*
                                </div>
                                <div class="contact__content--input">
                                    <input type="text" name="name" id="">
                                </div>
                            </div>
                            <div class="contact__content--item">
                                <div class="contact__content--label">
                                    Your Email*
                                </div>
                                <div class="contact__content--input">
                                    <input type="email" name="email" id="">
                                </div>
                            </div>
                        </div>
                        <div class="contact__content--row">
                            <div class="contact__content--item">
                                <div class="contact__content--label">
                                    Your Subject*
                                </div>
                                <div class="contact__content--input">
                                    <input type="text" name="subject" id="">
                                </div>
                            </div>
                        </div>
                        <div class="contact__content--row">
                            <div class="contact__content--whole">
                                <div class="contact__content--label">
                                    Message*
                                </div>
                                <div class="contact__content--textarea">
                                    <textarea name="message" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="contact__content--row">
                            <div class="contact__content--btn">
                                <button>Submit</button>
                            </div>
                        </div>
                    </form> -->
                    <?php echo do_shortcode('[contact-form-7 id="139" title="Contact Us Form"]'); ?>


                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();