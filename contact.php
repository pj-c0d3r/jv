<!DOCTYPE html>
<html lang="en">

<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <title>Contact Us | Jerry's View</title>
    <link rel="stylesheet" href="/css/contact.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/headernav.php'); ?>

    <section class="get-it">
        <h2>Get In Touch</h2>
        <p>A text here lorem ipsum Lorem Ipsum is that it has a more-or-less normal.</p>

        <div class="contact-form">
            <div class="container">
                <div class="row">
                    <div class="form-div col-lg-8">
                        <div class="text">
                            Send us a message
                        </div>
                        <form id="cont--form" action="#">
                            <div class="form-row">
                                <div class="input-data">
                                    <input type="text" required>
                                    <div class="underline">
                                    </div>
                                    <label for="">Full Name</label>
                                </div>
                                <div class="input-data">
                                    <input type="Email" required>
                                    <div class="underline">
                                    </div>
                                    <label for="">Email Address</label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="input-data">
                                    <input type="tel" required>
                                    <div class="underline">
                                    </div>
                                    <label for="">Phone</label>
                                </div>
                                <div class="input-data">
                                    <input type="text" required>
                                    <div class="underline">
                                    </div>
                                    <label for="">Company</label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="input-data textarea">
                                    <textarea name="message" rows="8" cols="80" required></textarea>
                                    <div class="underline">
                                    </div>
                                    <label for="message">Message</label>
                                </div>
                                <button type="submit" class="contact-send-btn"><img src="/img/contact-socials/send.png" alt="send button" class="send-btn-ico"></button>
                            </div>
                        </form>
                    </div>

                    <div class="address-div col-lg-4">
                        <p class="cont-info-p">Contact Information</p>
                        <div class="cont-info-div-det">

                            <div class="address">
                                <img src="/img/contact-socials/location.png" alt="address" class="location_icon" />
                                <p>4728 Pearlman Avenue,
                                    Concord, MA</p>
                            </div>

                            <div class="phone-no">
                                <img src="/img/contact-socials/phonelink.png" alt="phone icon" class="phone_ico">
                                <p>+1 (817) 948-7735,<br> +1 (817) 948-7735</p>
                            </div>

                            <div class="email-ad">
                                <img src="/img/contact-socials/email.png" alt="email icon" class="email_ico">
                                <a href="mailto:info@jerrysview.com">info@jerrysview.com</a>
                            </div>

                            <div class="social_ico_cont">
                                <a href="#"><img src="/img/contact-socials/instagram.png" alt="instagram icon" class="ig_ico"></a>
                                <a href="#"><img src="/img/contact-socials/twitter.png" alt="twitter icon" class="twitter_icon"></a>
                                <a href="#"><img src="/img/contact-socials/linkedin.png" alt="linkedin icon" class="linkedin_ico"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="white-space"></section>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer1.php'); ?>
</body>

</html>
