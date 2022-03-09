<?php
include 'includes/header_logged.php';
    if($result['status'] == 0){
                         ?>
                                
                                    <script type="text/javascript">
    const Toast = Swal.mixin({
  toast: true,
  position: 'center',
  showConfirmButton: true,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'info',
  title: 'Update Your profile to continue.'
})
         setTimeout(function(){ 
      window.location.href='profile.php'
      }, 3500);  

</script>
                                        <?php
  }
?>
    <main>
    
    <div class="bars" id="nav-action" >
    </div>


 <section id="departments" >

            <!--Departments Heading-->

            <div class="department-heading" style="background:lightgreen;" >
                <div class="dept">
                    <!--<h2 class="heading_cards">It takes two flints to make a fire.</h2>-->
                                                   <div class="society-name">
                    <h1 style="font-size:18px;">It takes two flints to make a fire.</h1>
                </div>
                
                    <!--<h2>Our Wings</h2>-->
                </div>
            </div>

            <!--Department Cards-->

            <div class="card-container" style="background:grey;">

                <!--Logo Card-->

                <div class="card" id="cardL">
                <div class="circle"></div>
                <img style="border-radius: 50%;" src="wings/favicon.png" />
                </div>
                <div class="card" id="card8">

                    <!--opportunities -->
                    <div class="card-content">
                        <div class="card-title">
                            <a class="main-title mb-35 wow fadeInUp2 animated" href="opportunities.php">Opportunities</a>
                        </div>
                        <div class="card-description">
                            <p> Fast and furious side of mind gets the control with the feeling of passion and understanding then a gamer is born.</p>
                        </div>
                    </div>
                </div>

                <!--Career Talk-->

                <div class="card" id="card7">
                    <div class="card-content">
                        <div class="card-title">
                            <a class="main-title mb-35 wow fadeInUp2 animated" href="#">Career Talk</a>
                        </div>
                        <div class="card-description">
                            <p>Career talks provide information on various occupations within an industry. They introduce students to the nature and scope of the work done and educate them on the skills necessary to perform certain job functions.</p>
                        </div>
                    </div>
                </div>

                <!--Business Mentorship-->
                <div class="card" id="card6">
                    <div class="card-content">
                        <div class="card-title">
                            <a class="main-title mb-35 wow fadeInUp2 animated" href="#">Business Mentorship</a>
                        </div>
                        <div class="card-description">
                            <p>As a business owner, you may choose to have a mentor for yourself or for your staff. Through mentoring you can develop your business skills for free, which can help you achieve success earlier than you may have on your own.</p>
                        </div>
                    </div>
                </div>

                <!--Entrepreneurial-->
                <div class="card" id="card5">
                    <div class="card-content">
                        <div class="card-title">
                            <a class="main-title mb-35 wow fadeInUp2 animated" href="#">Entrepreneurial</a>
                        </div>
                        <div class="card-description">
                            <p>Aspiring entrepreneurs can come up with ideas all day long, but not every idea is necessarily a good idea. For an idea to be worth pursuing, we must first determine whether the idea translates into an entrepreneurial opportunity</p>
                        </div>
                    </div>
                </div>

                <!--Unplanned pregnancy and family planning-->
                <div class="card" id="card4">
                    <div class="card-content">
                        <div class="card-title">
                            <a class="main-title mb-35 wow fadeInUp2 animated" href="#">Unplanned pregnancy and family planning</a>
                        </div>
                        <div class="card-description">
                            <p>In spite of major gains in contraceptive prevalence over the last few decades, many women in most parts of the developing world who would like to delay or avoid pregnancy do not use any method of contraception. This paper seeks to: a) examine whether experiencing an unintended pregnancy is associated with future use of contraception controlling for a number factors including poverty at the household and community levels; and b) investigate the mechanisms through which experiencing an unintended pregnancy leads to uptake of contraception.</p>
                        </div>
                    </div>
                </div>

                <!--Pad Drive-->
                <div class="card" id="card3">
                    <div class="card-content">
                        <div class="card-title">
                            <a class="main-title mb-35 wow fadeInUp2 animated" href="#">Pad Drive</a>
                        </div>
                        <div class="card-description">
                            <p>Effects of sanitary pad distribution and reproductive health education on upper primary school attendance and reproductive health knowledge and attitudes in Kenya.</p>
                        </div>
                    </div>
                </div>

                <!--Wrapper Card/ Our Wings -->
                <div class="card" id="cardW">
                    <h3>our wings</h3>
                    <i class="fad fa-chevron-right"></i>
                </div>
            </div>
        </section>


       
    </main>


<?php
include 'includes/footer-index.php';

?>

     <script src="wings/index.js"></script>
     
    <!-- JS here -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.nice-select.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.easypiechart.js"></script>
    <script src="assets/js/tilt.jquery.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
   
</body>


<!-- Mirrored from www.devsnews.com/template/enacare/enacare/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Aug 2021 07:05:49 GMT -->
</html>