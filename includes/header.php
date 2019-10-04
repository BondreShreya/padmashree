<style>
	.header_area .navbar .nav .nav-item .nav-link a:active {
		color: blue;
	}

	.header_area .navbar .nav .nav-item .nav-link:after {
		display: none;
	}

	.header_area .navbar .nav .nav-item:hover .nav-link,
	.header_area .navbar .nav .nav-item.active .nav-link {
		color: #2c2b8d;
	}
</style>
<header class="header_area">


	<!-- college name -->

	<div class="container-fluid text-center" style="height: 140px; background-color: #fde7e8">
		<div class="row pb-2">
			<div class="col-md-2 col-sm-2 col-xs-2 mt-md-4 mt-sm-4 mt-xs-0">
				<a class=" logo_h" href="index.php"><img src="img/icon/padmashreepng.png" class="img_logo"></a>
			</div>
			<div class="col-md-8 col-sm-8 col-xs-8 compress">
				<p class="mb-sm-0 mt-md-4 p-0 text_m"><b class="text-dark">Indian Youth & Women's Development Society's
						(Reg. No. MH/222/95)</b></p>
				<h1 class="m-xs-0 text-dark text-size">Padamshree Ajit Wadekar Sharirik Shikshan Mahavidyalaya</h1>
				<p class="mb-md-2 mb-xs-0 text_size"><strong>Recog. by NCTE, Affiliated by R.T.M. Nagpur University
					</strong></p>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 mt-md-4 mt-sm-4 mt-xs-0">
			</div>
		</div>

	</div>

	<!-- //college name -->

	<div class="main_menu">
		<nav class="navbar navbar-expand-lg navbar-light" style="height: 54px;">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->

				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
					<ul class="nav navbar-nav menu_nav m-auto">
						<li class="nav-item"><a onclick="colr" class="nav-link text-light text-center" href="index">Home</a></li>
						<li class="nav-item"><a class="nav-link text-light text-center" href="about-us">About</a></li>
						<li class="nav-item"><a class="nav-link text-light text-center" href="staff">Staff</a></li>
						<li class="nav-item submenu dropdown">
							<a href="courses" class="nav-link dropdown-toggle text-center" data-toggle="dropdown"
								role="button" aria-haspopup="true" aria-expanded="false">Courses</a>
							<ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link" href="courses">Courses</a></li>
								<li class="nav-item"><a class="nav-link" href="course-details">Course Details</a></li>
							</ul>
						</li>
						<li class="nav-item"><a class="nav-link text-light text-center" href="gallery">Gallery</a></li>
						<li class="nav-item"><a class="nav-link text-light text-center" href="library">Library</a></li>
						<!--<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle active text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Syllabus</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="syllabus.php">B. Ed.</a></li>
										<li class="nav-item"><a class="nav-link" href="#">D. Ed.</a></li>
									</ul>
								</li>-->
						<li class="nav-item"><a class="nav-link text-light text-center" href="contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>
<script>
    function colr()
    {
        document.getElementID('').style.backgroundColor="blue";
    }
    }
</script>
<!--================Header Menu Area =================-->