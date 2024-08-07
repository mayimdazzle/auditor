<?php
function create_header($page)
{
?>
	<title>Stalin Auditors</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
<?php
}

function create_wrap($page)
{
?>
	<div class="wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="bg-wrap">
						<div class="row">
							<div class="col-md-6 d-flex align-items-center">
								<p class="mb-0 phone pl-md-2">
									<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +91 9487426222</a>
									<a href="#"><span class="fa fa-paper-plane mr-1"></span> stalinauditors@gmail.com</a>
								</p>
							</div>
							<div class="col-md-6 d-flex justify-content-md-end">
								<div class="social-media">
									<p class="mb-0 d-flex">
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
}
function create_nav($page)
{
?>
	<?php if ($page == 'index') { ?>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" href="index.php">Stalin Auditors</a>
				<form action="#" class="searchform order-sm-start order-lg-last">
					<div class="form-group d-flex">
						<input type="text" class="form-control pl-3" placeholder="Search">
						<button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
					</div>
				</form>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span> Menu
				</button>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav m-auto">
						<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
						<li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
						<!--<li class="nav-item"><a href="cases.php" class="nav-link">Case Study</a></li>
					<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>-->
						<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	<?php } elseif ($page == 'service') { ?>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" href="index.php">Stalin Auditors</a>
				<form action="#" class="searchform order-sm-start order-lg-last">
					<div class="form-group d-flex">
						<input type="text" class="form-control pl-3" placeholder="Search">
						<button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
					</div>
				</form>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span> Menu
				</button>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav m-auto">
						<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
						<li class="nav-item active"><a href="services.php" class="nav-link">Services</a></li>
						<!--<li class="nav-item"><a href="cases.php" class="nav-link">Case Study</a></li>
					<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>-->
						<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	<?php } elseif ($page == 'contact') { ?>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" href="index.php">Stalin Auditors</a>
				<form action="#" class="searchform order-sm-start order-lg-last">
					<div class="form-group d-flex">
						<input type="text" class="form-control pl-3" placeholder="Search">
						<button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
					</div>
				</form>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span> Menu
				</button>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav m-auto">
						<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
						<li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
						<!--<li class="nav-item"><a href="cases.php" class="nav-link">Case Study</a></li>
				<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>-->
						<li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	<?php } else { ?>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" href="index.php">Stalin Auditors</a>
				<form action="#" class="searchform order-sm-start order-lg-last">
					<div class="form-group d-flex">
						<input type="text" class="form-control pl-3" placeholder="Search">
						<button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
					</div>
				</form>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span> Menu
				</button>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav m-auto">
						<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
						<li class="nav-item active"><a href="about.php" class="nav-link">About</a></li>
						<li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
						<!--<li class="nav-item"><a href="cases.php" class="nav-link">Case Study</a></li>
				<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>-->
						<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	<?php }
}
function create_hero($page)
{
	?>
	<div class="hero-wrap">
		<div class="home-slider owl-carousel">
			<div class="slider-item" style="background-image:url(images/Banner-03.jpg);">
				<div class="overlay"></div>
				<!--<div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-center">
		          <div class="col-md-8 ftco-animate">
		          	<div class="text w-100 text-center">
		          		<h2 class="text-danger">We Business Grow</h2>
			            <h1 class="mb-4 text-danger">We Help You Businesses Innovate and Grow</h1>
			            <p><a href="#" class="btn btn-white">Connect with us</a></p>
		            </div>
		          </div>
		        </div>
	        </div> -->
			</div>
			<div class="slider-item" style="background-image:url(images/img-one.jpg);">
				<div class="overlay"></div>
				<!--<div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-center">
		          <div class="col-md-8 ftco-animate">
		          	<div class="text w-100 text-center">
		          		<h2 class="text-danger">We Business Grow</h2>
			            <h1 class="mb-4 text-danger">We Help You Businesses Innovate and Grow</h1>
			            <p><a href="#" class="btn btn-white">Connect with us</a></p>
		            </div>
		          </div>
		        </div>
	        </div> -->
			</div>


			<div class="slider-item" style="background-image:url(images/Banner-04.jpg);">
				<div class="overlay"></div>
				<!--<div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-center">
		          <div class="col-md-8 ftco-animate">
		          	<div class="text w-100 text-center">
		          		<h2 class="text-danger">We Support Business</h2>
			            <h1 class="mb-4 text-danger">The Best Business Support</h1>
			            <p><a href="#" class="btn btn-white">Connect with us</a></p>
		            </div>
		          </div>
		        </div>
	        </div> -->
			</div>
		</div>
	</div>

<?php
}
function create_welcome($page)
{
?>

	<section class="ftco-section ftco-no-pt bg-light">
		<div class="container">
			<div class="row d-flex no-gutters">
				<div class="col-md-6 d-flex">
					<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(images/Services.jpeg);">
					</div>
				</div>
				<div class="col-md-6 pl-md-5 py-md-5">
					<div class="heading-section pl-md-4 pt-md-5">
						<span class="subheading">Welcome to Stalin Auditors</span>
						<h2 class="mb-4">We Are the Best Auditing and Accounting Firm.</h2>
						<p style="justify-self: baseline">Our commitment is to provide comprehensive financial solutions to individuals, businesses, and organizations.<br />Here’s a concise overview of our services:</p>
					</div>
					<div class="services-2 w-100 d-flex">
						<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-accountant"></span></div>
						<div class="text pl-4">
							<h4>Income Tax Services:</h4>
							<p>Accurate accounting, tax compliance, payroll management, and personalized financial services.</p>
						</div>
					</div>
					<div class="services-2 w-100 d-flex">
						<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wealth"></span></div>
						<div class="text pl-4">
							<h4>GST Services</h4>
							<p>GST registration, return filing, computation, and advisory services.</p>
						</div>
					</div>
					<div class="services-2 w-100 d-flex">
						<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-teamwork"></span></div>
						<div class="text pl-4">
							<h4>Company Services:</h4>
							<p>Company registration, corporate governance, financial reporting, and tax planning.</p>
						</div>
					</div>
					<div class="services-2 w-100 d-flex">
						<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-trust"></span></div>
						<div class="text pl-4">
							<h4>Firm, Society And Trust Services:</h4>
							<ol style="margin-left: -30px">
								<li>Partnership agreement drafting, financial advisory, and audit assurance.</li>
								<li>Society registration, fund management, and compliance.</li>
								<li>Trust formation, trustee guidance, and financial transparency.</li>
							</ol>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
}
function create_services($page)
{
?>
	<section class="ftco-section bg-light ftco-no-pt">
		<?php if ($page == 'index') { ?>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
						<div class="d-block">
							<div class="icon d-flex mr-2">
								<span class="flaticon-accounting-1"></span>
							</div>
							<div class="media-body">
								<h3 class="heading">Accounting</h3>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
						<div class="d-block">
							<div class="icon d-flex mr-2">
								<span class="flaticon-tax"></span>
							</div>
							<div class="media-body">
								<h3 class="heading">Tax, Compliance &amp; Payroll</h3>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
						<div class="d-block">
							<div class="icon d-flex mr-2">
								<span class="flaticon-loan"></span>
							</div>
							<div class="media-body">
								<h3 class="heading">Financial Services</h3>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
						<div class="d-block">
							<div class="icon d-flex mr-2">
								<span class="flaticon-budget"></span>
							</div>
							<div class="media-body">
								<h3 class="heading">Growth &amp; Funding Access</h3>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } elseif ($page == 'service') { ?>
			<div class="container">
				<div class="row">
					<!-- Income Tax Services -->
					<div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
						<div class="d-block">
							<div class="icon d-flex mr-2">
								<span class="flaticon-accounting-1"></span>
							</div>
							<div class="media-body">
								<h3 class="heading">Income Tax Services</h3>
								<p>Comprehensive income tax services including accurate accounting, compliance with tax regulations, payroll management, and strategic financial planning to help you achieve financial stability.</p>
							</div>
						</div>
					</div>

					<!-- GST Services -->
					<div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
						<div class="d-block">
							<div class="icon d-flex mr-2">
								<span class="flaticon-tax"></span>
							</div>
							<div class="media-body">
								<h3 class="heading">GST Services</h3>
								<p>Expert assistance in GST registration, return filing, computation, and advisory services, ensuring your business remains compliant with the latest GST regulations.</p>
							</div>
						</div>
					</div>

					<!-- Company Services -->
					<div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
						<div class="d-block">
							<div class="icon d-flex mr-2">
								<span class="flaticon-legal"></span>
							</div>
							<div class="media-body">
								<h3 class="heading">Company Services</h3>
								<p>Comprehensive support for company registration, corporate governance, financial reporting, and tax planning, tailored to ensure legal compliance and business growth.</p>
							</div>
						</div>
					</div>

					<!-- Firm Services -->
					<div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
						<div class="d-block">
							<div class="icon d-flex mr-2">
								<span class="flaticon-partnership"></span>
							</div>
							<div class="media-body">
								<h3 class="heading">Firm Services</h3>
								<p>Professional services including partnership agreement drafting, financial advisory, and audit and assurance, aimed at fostering transparency and trust within firms.</p>
							</div>
						</div>
					</div>

					<!-- Society Services -->
					<div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
						<div class="d-block">
							<div class="icon d-flex mr-2">
								<span class="flaticon-society"></span>
							</div>
							<div class="media-body">
								<h3 class="heading">Society Services</h3>
								<p>Expertise in society registration, fund management, and compliance, ensuring societies operate legally and efficiently, with transparent financial practices.</p>
							</div>
						</div>
					</div>

					<!-- Trust Services -->
					<div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
						<div class="d-block">
							<div class="icon d-flex mr-2">
								<span class="flaticon-trust"></span>
							</div>
							<div class="media-body">
								<h3 class="heading">Trust Services</h3>
								<p>Comprehensive services for trust formation, trustee guidance, and financial transparency, ensuring trusts are managed effectively and in compliance with legal requirements.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		<?php } ?>
	</section>

<?php
}
function create_stats($page)
{
?>
	<section class="ftco-counter bg-light ftco-no-pt" id="section-counter">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 text-center">
						<div class="text">
							<strong class="number" data-number="25">0</strong>
						</div>
						<div class="text">
							<span>Years of Experienced</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 text-center">
						<div class="text">
							<strong class="number" data-number="5200">0</strong>
						</div>
						<div class="text">
							<span>Income Tax Cases Completed</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 text-center">
						<div class="text">
							<strong class="number" data-number="150">0</strong>
						</div>
						<div class="text">
							<span>Project Completed</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 text-center">
						<div class="text">
							<strong class="number" data-number="120">0</strong>
						</div>
						<div class="text">
							<span>Expert Consultant</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
}
function create_testimonial($page)
{
?>

	<section class="ftco-section testimony-section bg-light">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center pb-5 mb-3">
				<div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
					<span class="subheading">Testimonies</span>
					<h2>Happy Clients &amp; Feedbacks</h2>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel ftco-owl">
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
								<div class="text">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
								<div class="text">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
								<div class="text">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
								<div class="text">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
								<div class="text">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
}
function create_faq($page)
{
?>
	<section class="ftco-section ftco-no-pt bg-light ftco-faqs">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="img-faqs w-500">
						<div class="img mb-4 mb-sm-0" style="background-image:url(images/Banner-05.jpg);">
						</div>
						<div class="img img-2 mb-4 mb-sm-0" style="background-image:url(images/Banner-06.jpg); ">
						</div>
					</div>
				</div>
				<div class="col-lg-6 pl-lg-5">
					<div class="heading-section mb-5 mt-5 mt-lg-0">
						<span class="subheading">FAQs</span>
						<h2 class="mb-3">Frequently Asks Questions</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
					<div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
						<div class="card">
							<div class="card-header p-0" id="headingOne">
								<h2 class="mb-0">
									<button href="#collapseOne" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
										<p class="mb-0">What documents are required for GST registration?</p>
										<i class="fa" aria-hidden="true"></i>
									</button>
								</h2>
							</div>
							<div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
								<div class="card-body py-3 px-0">
									<p style="margin-left: 30px;">To register for GST, you’ll need PAN (Permanent Account Number), proof of business address, bank account details, and authorized signatory details.</p>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header p-0" id="headingTwo" role="tab">
								<h2 class="mb-0">
									<button href="#collapseTwo" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
										<p class="mb-0">How often should I file GST returns?</p>
										<i class="fa" aria-hidden="true"></i>
									</button>
								</h2>
							</div>
							<div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
								<div class="card-body py-3 px-0">
									<p style="margin-left:30px">GST returns need to be filed monthly. GSTR-1 (outward supplies) and GSTR-3B (summary return) are common monthly returns.
									</p>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header p-0" id="headingThree" role="tab">
								<h2 class="mb-0">
									<button href="#collapseThree" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
										<p class="mb-0">What is TDS, and how does it impact my business?</p>
										<i class="fa" aria-hidden="true"></i>
									</button>
								</h2>
							</div>
							<div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
								<div class="card-body py-3 px-0">
									<p style="margin-left:30px">TDS (Tax Deducted at Source) is a mechanism where a certain percentage of payments made by your business is deducted as tax. It affects cash flow and requires accurate compliance.
									</p>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header p-0" id="headingFour" role="tab">
								<h2 class="mb-0">
									<button href="#collapseFour" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
										<p class="mb-0">What are the benefits of maintaining proper accounting records?</p>
										<i class="fa" aria-hidden="true"></i>
									</button>
								</h2>
							</div>
							<div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
								<div class="card-body py-3 px-0">
									<p style="margin-left:30px">Proper accounting ensures transparency, helps in tax planning, and provides insights into your financial health. It’s essential for informed decision-making.
									</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header p-0" id="headingFour" role="tab">
								<h2 class="mb-0">
									<button href="#collapseFive" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
										<p class="mb-0">How can I access funding for my business?</p>
										<i class="fa" aria-hidden="true"></i>
									</button>
								</h2>
							</div>
							<div class="collapse" id="collapseFive" role="tabpanel" aria-labelledby="headingTwo">
								<div class="card-body py-3 px-0">
									<p style="margin-left:30px">We assist in evaluating funding options, including loans, venture capital, and government schemes. Proper financial planning is crucial for successful funding access.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<?php
}
function create_blog($page)
{
?>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center pb-5 mb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">News &amp; Blog</span>
					<h2>Latest news from our blog</h2>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="blog-single.php" class="block-20 rounded" style="background-image: url('images/image_1.jpg');">
						</a>
						<div class="text p-4">
							<div class="meta mb-2">
								<div><a href="#">March 31, 2020</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
							</div>
							<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="blog-single.php" class="block-20 rounded" style="background-image: url('images/image_2.jpg');">
						</a>
						<div class="text p-4">
							<div class="meta mb-2">
								<div><a href="#">March 31, 2020</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
							</div>
							<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="blog-single.php" class="block-20 rounded" style="background-image: url('images/image_3.jpg');">
						</a>
						<div class="text p-4">
							<div class="meta mb-2">
								<div><a href="#">March 31, 2020</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
							</div>
							<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
}
function create_consult($page)
{
?>


	<section class="ftco-section ftco-no-pb ftco-no-pt bg-secondary">
		<div class="container py-5">
			<div class="row">
				<div class="col-md-7 d-flex align-items-center">
					<h2 class="mb-3 mb-sm-0" style="color:black; font-size: 22px;">Sign Up for Your Free 1st Accounting Consultation</h2>
				</div>
				<div class="col-md-5 d-flex align-items-center">
					<form action="#" class="subscribe-form">
						<div class="form-group d-flex">
							<input type="text" class="form-control" placeholder="Enter email address">
							<input type="submit" value="Subscribe" class="submit px-3">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

<?php

}
function create_contactus($page)
{
?>
	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch" data-wow-delay="0.5s">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Get in touch</h3>
									<form id="contactForm" name="contactForm" method="POST" class="contactForm" action="send_mail.php">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Your Name</label>
													<input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." required />
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="email">Your Email</label>
													<input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required />
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label class="label" for="subject">Phone Number</label>
													<input class="form-control" id="phone" name="phone" type="tel" placeholder="(123) 456-7890" required />
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Subject</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label class="label" for="message">Message</label>
													<textarea class="form-control" id="message" name="message" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
												</div>
											</div>
											<!-- Submit success message-->
											<div class="d-none" id="submitSuccessMessage">
												<div class="text-center mb-3">
													<div class="fw-bolder">Form submission successful!</div>
												</div>
											</div>
											<!-- Submit error message -->
											<div class="d-none" id="submitErrorMessage">
												<div class="text-center text-danger mb-3">Error sending message!</div>
											</div>
											<div class="col-12">
												<button class="btn btn-primary w-100 py-3" type="submit">Send
													Message</button>
											</div>
										</div>
									</form>
									<script>
										document.getElementById('contactForm').addEventListener('submit', function(event) {
											event.preventDefault();

											var formData = new FormData(this);

											fetch('send_mail.php', {
													method: 'POST',
													body: formData
												})
												.then(response => response.json())
												.then(data => {
													if (data.success) {
														document.getElementById('submitSuccessMessage').classList.remove('d-none');
														document.getElementById('submitErrorMessage').classList.add('d-none');
													} else {
														document.getElementById('submitSuccessMessage').classList.add('d-none');
														document.getElementById('submitErrorMessage').classList.remove('d-none');
													}
												})
												.catch(error => {
													document.getElementById('submitSuccessMessage').classList.add('d-none');
													document.getElementById('submitErrorMessage').classList.remove('d-none');
												});
										});
									</script>
								</div>
							</div>
							<div class="col-lg-4 col-md-5 d-flex align-items-stretch">
								<div class="info-wrap bg-primary w-100 p-md-5 p-4">
									<h3>Let's get in touch</h3>
									<p class="mb-4">We're open for any suggestion or just to have a chat</p>
									<div class="dbox w-100 d-flex align-items-start">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-map-marker"></span>
										</div>
										<div class="text pl-3">
											<p><span>Address:</span> Stalin & Co. Near Govt. Veterinary Hospital Collectorate Post, Dharmapuri - 636705</p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-phone"></span>
										</div>
										<div class="text pl-3">
											<p><span>Phone:</span> <a href="tel://9487426222">+91 94874 26222</a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-paper-plane"></span>
										</div>
										<div class="text pl-3">
											<p><span>Email:</span> <a href="mailto:stalinauditors@gmail.com">stalinauditors@gmail.com</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php }
function create_footer($page)
{ ?>

	<footer class="footer">
		<div class="container-fluid px-lg-5">
			<div class="row">
				<div class="col-md-12 py-12" style="margin-top: 30px">
					<div class="row">
						<div class="col-md-4 mb-md-0 mb-4">
							<h2 class="footer-heading">About us</h2>
							<p>At Stalin & Co., we seamlessly blend expertise across various domains to simplify your financial journey.</p>
							<ul class="ftco-footer-social p-0">
								<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
							</ul>
						</div>
						<div class="col-md-8">
							<div class="row justify-content-center">
								<div class="col-md-12 col-lg-10">
									<div class="row">
										<div class="col-md-4 mb-md-0 mb-4">
											<h2 class="footer-heading">Services</h2>
											<ul class="list-unstyled">
												<li><a href="#" class="py-1 d-block">Income Tax Services</a></li>
												<li><a href="#" class="py-1 d-block">GST Services</a></li>
												<li><a href="#" class="py-1 d-block">Company Services</a></li>
												<li><a href="#" class="py-1 d-block">Firm Services</a></li>
												<li><a href="#" class="py-1 d-block">Society Services</a></li>
												<li><a href="#" class="py-1 d-block">Trust Services</a></li>

											</ul>
										</div>
										<div class="col-md-4 mb-md-0 mb-4">
											<h2 class="footer-heading">Discover</h2>
											<ul class="list-unstyled">
												<li><a href="#" class="py-1 d-block">About us</a></li>
												<li><a href="#" class="py-1 d-block">Contract us</a></li>
												<li><a href="#" class="py-1 d-block">Terms &amp; Conditions</a></li>
												<li><a href="#" class="py-1 d-block">Policies</a></li>
											</ul>
										</div>
										<div class="col-md-4 mb-md-0 mb-4">
											<h2 class="footer-heading">Resources</h2>
											<ul class="list-unstyled">
												<li><a href="#" class="py-1 d-block">Security</a></li>
												<li><a href="#" class="py-1 d-block">Global</a></li>
												<li><a href="#" class="py-1 d-block">Charts</a></li>
												<li><a href="#" class="py-1 d-block">Privacy</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--<div class="row mt-md-5">
						<div class="col-md-12">
							<p class="copyright">Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					<!--	Copyright &copy;<script>
									document.write(new Date().getFullYear());
								</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
								Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.</p>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</footer>
	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg></div>


<?php
}
function create_footer0($page)
{ ?>

	<footer class="footer">
		<div class="container-fluid px-lg-5">
			<div class="row">
				<div class="col-md-9 py-5">
					<div class="row">
						<div class="col-md-4 mb-md-0 mb-4">
							<h2 class="footer-heading">About us</h2>
							<p>At Stalin & Co., we seamlessly blend expertise across various domains to simplify your financial journey.</p>
							<ul class="ftco-footer-social p-0">
								<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
							</ul>
						</div>
						<div class="col-md-8">
							<div class="row justify-content-center">
								<div class="col-md-12 col-lg-10">
									<div class="row">
										<div class="col-md-4 mb-md-0 mb-4">
											<h2 class="footer-heading">Services</h2>
											<ul class="list-unstyled">
												<li><a href="#" class="py-1 d-block">Market Analysis</a></li>
												<li><a href="#" class="py-1 d-block">Accounting Advisor</a></li>
												<li><a href="#" class="py-1 d-block">General Consultancy</a></li>
												<li><a href="#" class="py-1 d-block">Structured Assestment</a></li>
											</ul>
										</div>
										<div class="col-md-4 mb-md-0 mb-4">
											<h2 class="footer-heading">Discover</h2>
											<ul class="list-unstyled">
												<li><a href="#" class="py-1 d-block">About us</a></li>
												<li><a href="#" class="py-1 d-block">Contract us</a></li>
												<li><a href="#" class="py-1 d-block">Terms &amp; Conditions</a></li>
												<li><a href="#" class="py-1 d-block">Policies</a></li>
											</ul>
										</div>
										<div class="col-md-4 mb-md-0 mb-4">
											<h2 class="footer-heading">Resources</h2>
											<ul class="list-unstyled">
												<li><a href="#" class="py-1 d-block">Security</a></li>
												<li><a href="#" class="py-1 d-block">Global</a></li>
												<li><a href="#" class="py-1 d-block">Charts</a></li>
												<li><a href="#" class="py-1 d-block">Privacy</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--<div class="row mt-md-5">
						<div class="col-md-12">
							<p class="copyright">Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					<!--	Copyright &copy;<script>
									document.write(new Date().getFullYear());
								</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
								Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.</p>
						</div>
					</div> -->
				</div>
				<div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
					<h2 class="footer-heading">Free consultation</h2>
					<form action="#" class="form-consultation">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Email">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Subject">
						</div>
						<div class="form-group">
							<textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="form-control submit px-3">Send A Message</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</footer>
	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg></div>


<?php
}
function create_scripts($page)
{
?>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

<?php
}
?>