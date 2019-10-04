<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/icon/padmashreepng.png" type="image/png">
        <title>Padamshree College</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
     <style>

        /* On screens that are 992px wide or less, the background color is blue */
         @media screen and (max-width: 567) {
         .a img {
             margin-top:5%;
          }
        }
        @media screen and (max-width: 766px) {
          .a img {
             margin-top:5%;
          }
        }
         @media screen and (min-width: 766px) {
          .a img{
            width:100%;
            height:635px;
          }
        }
        @media screen and (min-width: 991px) {
         .a img {
            width:100%;
            height:360px;
          }
        }
        
        @media screen and (min-width: 1200px) {
         .a img {
            width:100%;
            height:290px;
          }
        }
        
    </style>
    <body>
        
        <!--================Header Menu Area =================-->
        <?php include('includes/header.php');?>
        <!--================Header Menu Area =================-->
         <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>Library</h2>
                        <div class="banner_link">
                            <a href="index.php" class="text-white pr-1">Home</a><i class="fa fa-arrow-right text-white"></i>
                            <a href="library.php" class="text-white">Library</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        <!--================Home Banner Area =================-->
         <section class="library_area p_50">
            <div class="container">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                               <img src="img\JPEG\Scan_0010.jpg" alt="college" width="100%" height="290" style="border-radius:5px;border:1px solid lightbrown">  
                            </div>              
                            <div class="col-md-6 a">
                                <div class="card-deck">
                                    <div class="main_title text-center">
                                            <h2 class="card-title">About Library</h2>
                                            <p class="card-text text-justify p-1">We are having sophisticated Library with large area . including reading room, reference section, Issue counter, Individual reading sections, Teacher reading section. At a time many students can accommodate in library.
                                            Library having different racks for keeping books & catalogue section for maintaining the record. The separate racks are provided for Journals & Periodicals.</p>
                                            <p class="card-text text-justify p-1">Library infrastructure provides academic ambience for the faculty & the students. It remains open to the students for 12 hours a day. Library  books & journals can be accessed from Librarian </p>
                                    </div>
                                </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="packages_area p_50">
            <div class="container">
                <div class="row packages_inner">
                    <div class="col-md-4">
                        <div class="packages_item">
                            <div class="pack_head">
                                <i class="fa fa-book"></i>
                                <h2 class="counter text-dark" data-count="4600">4600</h2>
                                <h4>Books</h4>
                           </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="packages_item">
                            <div class="pack_head">
                                <i class="fa fa-book"></i>
                                <h2 class="counter text-dark" data-count="10">10</h2></h2>
                                 <h4>Journals</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="packages_item">
                            <div class="pack_head">
                                <i class="fa fa-book"></i>
                                <h2 class="counter text-dark" data-count="2972">2970</h2>
                                <h4>Reference Books</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
          <!--================End About Area =================-->
        
        <!--================Library section =================-->
        
      
    <!-- stats -->
   	<script>
		    $('.counter').each(function()
		    {
                var $this = $(this),
                countTo = $this.attr('data-count');
  
                $({ countNum: $this.text()}).animate({
                countNum: countTo
                },

                {
                duration: 8000,
                easing:'linear',
                step: function() {
                $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                $this.text(this.countNum);
                  //alert('finished');
                }

                });  
		    });
	    </script>
        
       <!-- Library section end-->
        <!--================ start footer Area  =================-->	
        <?php include('includes/footer.php');?>
		<!--================ End footer Area  =================-->
        
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <!--<script src="js/popper.js"></script>-->
        <script src="js/bootstrap.min.js"></script>
        <!--<script src="js/stellar.js"></script>-->
        <!--<script src="vendors/lightbox/simpleLightbox.min.js"></script>-->
        <!--<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>-->
        <!--<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>-->
        <!--<script src="vendors/isotope/isotope.pkgd.min.js"></script>-->
        <!--<script src="vendors/owl-carousel/owl.carousel.min.js"></script>-->
        <!--<script src="js/jquery.ajaxchimp.min.js"></script>-->
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
         <script src="js/jquery.counterup.js"></script>
        <!--<script src="vendors/popup/jquery.magnific-popup.min.js"></script>-->
        <!--<script src="vendors/counter-up/jquery.counterup.js"></script>-->
        <!--<script src="js/mail-script.js"></script>-->
        <!--<script src="js/theme.js"></script>-->
    </body>
</html>