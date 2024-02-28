<!doctype html>
<html lang="en">
<!-- HEAD -->
<?php require('partials/head.php') ?>

<body>
    <!-- PAGE CONTENT
		============================================= -->
    <div id="page" class="page font--jakarta">

        <!-- HEADER -->
        <?php require('partials/header.php') ?>

        <!-- START SECTION
		============================================= -->

        <section id="contacts-1" class="pb-50 inner-page-hero contacts-section division">
            <div class="container">
                <!-- SECTION TITLE -->
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9">
                        <div class="section-title text-center mb-80">

                            <!-- Title -->
                            <h2 class="s-52 w-700">Let's Talk</h2>

                            <!-- Text -->
                            <p class="p-lg">Let us know what you are looking for and we’ll get back to you right away...
                            </p>

                        </div>
                    </div>
                </div>


                <!-- CONTACT FORM -->
                <div class="row justify-content-center">
                    <div class="col-md-11 col-lg-10 col-xl-8">
                        <div class="form-holder">
                            <form id="contact-form" method="POST" class="row contact-form"
                                onsubmit="return validateForm()">

                                <!-- Contact Form Input -->
                                <div class="col-md-12">
                                    <p class="p-lg">Your Name: </p>
                                    <input type="text" id="name" name="name" class="form-control custom-input name"
                                        placeholder="Please enter your Real Name" ondragover="return false"
                                        ondrop="return false" onpaste="return false" oninput="validateField('name')"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <p class="p-lg">Your Mobile No.: </p>
                                    <input type="tel" id="mobile" name="mobile" class="form-control custom-input mobile"
                                        placeholder="Please enter your Mobile No." ondragover="return false"
                                        ondrop="return false" onpaste="return false" maxlength="10"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10); validateField('mobile');"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <p class="p-lg">Your Subject: </p>
                                    <input type="text" id="subject" name="subject"
                                        class="form-control custom-input subject"
                                        placeholder="Please enter your Subject" ondragover="return false"
                                        ondrop="return false" onpaste="return false" oninput="validateField('subject')"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <p class="p-lg">Your Email Address: </p>
                                    <input type="text" id="email" name="email" class="form-control custom-input email"
                                        placeholder="Please carefully check your Email Address"
                                        ondragover="return false" ondrop="return false" onpaste="return false"
                                        oninput="validateField('email')" required="">
                                </div>

                                <div class="col-md-12">
                                    <p class="p-lg">Explain your question in details: </p>
                                    <textarea id="message" name="message" class="form-control custom-input message"
                                        rows="6" placeholder="I have a problem with..." ondragover="return false"
                                        ondrop="return false" onpaste="return false" oninput="validateField('message')"
                                        required=""></textarea>
                                </div>

                                <!-- Contact Form Button -->
                                <div class="col-md-12 mt-15 form-btn text-right">
                                    <button type="submit" id="submitBtn"
                                        class="btn btn--theme hover--theme submit">Submit
                                        Request</button>
                                </div>

                                <div class="contact-form-notice">
                                    <p class="p-sm">We are committed to your privacy. Be Professional uses the
                                        information you
                                        provide us to contact you about our relevant content, products, and services.
                                        For more information,
                                        check out our <a href="#">Privacy Policy</a>.
                                    </p>
                                </div>

                                <!-- Contact Form Message -->
                                <div class="col-lg-12 contact-form-msg">
                                    <span class="loading"></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- END CONTACT FORM -->
            </div> <!-- End container -->
        </section> <!-- END CONTACTS-1 -->

        <!-- DIVIDER LINE -->
        <hr class="divider">

        <!-- END SECTION -->

        <!-- FOOTER -->
        <?php require('partials/footer.php') ?>
    </div> <!-- END PAGE CONTENT -->

    <!-- EXTERNAL SCRIPTS
		============================================= -->
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/menu.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/pricing-toggle.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/request-form.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/lunar.js"></script>
    <script src="assets/js/wow.js"></script>
    <!-- Custom Script -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/form.js"></script>
    <script src="assets/js/custom-form.js"></script>

    <script src="assets/js/changer.js"></script>
    <script defer src="assets/js/styleswitch.js"></script>
    <!-- <script defer src="assets/js/form-main.js"></script> -->
    <!-- sweetalert2@11 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--Start of Tawk.to Script-->
    <!--
    site - https://dashboard.tawk.to/login
    ID - join@beprofessional.in
    Pass - Bp#@$354
    -->
    <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/65df088e9131ed19d972d330/1hnnjisbk';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- <script>
		$(document).on({
			"contextmenu": function (e) {
				console.log("ctx menu button:", e.which);

				// Stop the context menu
				e.preventDefault();
			},
			"mousedown": function (e) {
				console.log("normal mouse down:", e.which);
			},
			"mouseup": function (e) {
				console.log("normal mouse up:", e.which);
			}
		});
	</script> -->

    <script>
    $(function() {
        $(".switch").click(function() {
            $("body").toggleClass("theme--dark");
            if ($("body").hasClass("theme--dark")) {
                $(".switch").text("Light Mode");
            } else {
                $(".switch").text("Dark Mode");
            }
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        if ($("body").hasClass("theme--dark")) {
            $(".switch").text("Light Mode");
        } else {
            $(".switch").text("Dark Mode");
        }
    });
    </script>
</body>

</html>