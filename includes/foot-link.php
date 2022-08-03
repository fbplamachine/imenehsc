<!-- scrollup section -->
<div class="scroll-area">
    <div class="top-wrap">
        <div class="go-top-btn-wraper">
            <div class="go-top go-top-button">
                <i class="fas fa-arrow-up"></i>
                <i class="fas fa-arrow-up"></i>
            </div>
        </div>
    </div>
</div>
<!-- jquery js -->
<script type="text/javascript" src="assets/js/vendor/jquery-3.2.1.min.js"></script>
<!-- bootstrap js -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<!-- carousel js -->
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<!-- counterup js -->
<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
<!-- waypoints js -->
<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
<!-- wow js -->
<script type="text/javascript" src="assets/js/wow.js"></script>
<!-- imagesloaded js -->
<script type="text/javascript" src="assets/js/imagesloaded.pkgd.min.js"></script>
<!-- venobox js -->
<script type="text/javascript" src="assets/venobox/venobox.js"></script>
<!-- ajax mail js -->
<script type="text/javascript" src="assets/js/ajax-mail.js"></script>
<!--  animated-text js -->
<script type="text/javascript" src="assets/js/animated-text.js"></script>
<script  src="assets/js/jquery.scrollUp.js"></script>
<!-- theme js -->
<script  src="assets/js/jquery.scrollUp.js"></script>
<!-- venobox min js -->
<script type="text/javascript" src="assets/venobox/venobox.min.js"></script>
<!-- isotope js -->
<script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
<!-- jquery nivo slider pack js -->
<script type="text/javascript" src="assets/js/jquery.nivo.slider.pack.js"></script>
<!-- jquery meanmenu js -->
<script type="text/javascript" src="assets/js/jquery.meanmenu.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<!-- jquery js -->
<script type="text/javascript" src="assets/js/main.js"></script>
<script>
    $(window).on('scroll', function () {
        var scrolled = $(window).scrollTop();
        if (scrolled > 300) $('.go-top').addClass('active');
        if (scrolled < 300) $('.go-top').removeClass('active');
    });

    $('.go-top').on('click', function () {
        $("html, body").animate({
            scrollTop: "0"
        }, 1200);
    });
</script>