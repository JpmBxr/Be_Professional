<!doctype html>
<html lang="en">
<!-- HEAD -->
<?php require('partials/head.php') ?>

<body>
    <!-- PRELOADER SPINNER
		============================================= -->
    <div id="loading" class="loading--theme">
        <div id="loading-center"><span class="loader"></span></div>
    </div>

    <!-- PAGE CONTENT
		============================================= -->
    <div id="page" class="page font--jakarta">

        <!-- HEADER -->
        <?php require('partials/header.php') ?>
        <!-- START SECTION
		============================================= -->



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
    <script src="assets/js/changer.js"></script>
    <script defer src="assets/js/styleswitch.js"></script>
    <!-- Custom Script -->
    <script src="assets/js/custom.js"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/65b7989f8d261e1b5f591afa/1hlaioctf';
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