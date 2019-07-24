<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TekLink : Technology, Consulting & Services</title>
	<meta name="description" content="TekLink is a technology solutions and specialist services business, conceptualised for technology" />
	<meta name="keywords" content="TekLink is a technology solutions and specialist services business, conceptualised for technology" />
	<meta name="author" content="tempload"/>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/images/favicon.png" />

	<!-- Bootstrap & Plugins CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!-- font awesome icon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<!-- Custom CSS -->
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118135390-1"></script>
	<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-118135390-1');
	</script>

</head>
<body>

<!-- ***** Preloader Start ***** -->
<div class="loader-wrapper">
	<div class="center">
		<div class="dot dot-one"></div>
		<div class="dot dot-two"></div>
		<div class="dot dot-three"></div>
		<div class="dot dot-four"></div>
		<div class="dot dot-five"></div>
	</div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<nav class="main-nav">
					<!-- ***** Logo Start ***** -->
					<a href="index.html" class="logo">
						<img src="assets/images/white-logo.png" class="light-logo" alt="TekLink Logo"/>
						<img src="assets/images/logo-color.png" class="dark-logo" alt="TeklLink Logo"/>
					</a>
					<!-- ***** Logo End ***** -->

					<!-- ***** Menu Start ***** -->
					<ul class="nav">
						<li><a href="index.html">HOME</a></li>
						<li><a href="about-us.html">ABOUT US</a></li>
						<li><a href="technologies.html">TECHNOLOGIES</a></li>
						<li><a href="services.html">SERVICES</a></li>
						<li><a href="career.php">CAREER</a></li>
						<li><a href="contact.html" class="btn-nav-line">CONTACT</a></li>
					</ul>
					<a class='menu-trigger'>
						<span>Menu</span>
					</a>
					<!-- ***** Menu End ***** -->
				</nav>
			</div>
		</div>
	</div>
</header>
<!-- ***** Header Area End ***** -->

<section class="page">
	<!-- ***** Page Top Start ***** -->
	<div class="cover" data-image="assets/images/photos/parallax.jpg">
		<div class="page-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1>Career</h1>
					</div>
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="index.html">Home</a></li>
							<li class="active">Career</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>	
	<!-- ***** Page Top End ***** -->

	<!-- ***** Form Content Start ***** -->

     <div class="section sm pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <div class="section-title">
                            <h2>Careers</h2>
                        </div>
                    </div>
                </div>
                <div class="row pb-20"> .
                    <?php
                    $message = $_SESSION['message'];
                    if(!empty($message)): ?>
                        <div id="contact-success" class="row"> Your message sent successfully to our team and they will be in touch with you asap. </div>
                        <?php
                        session_destroy();
                    endif; ?>
                    <div id="form-messages"></div>
                    <form name="contact" method="post" action="send_mail.php" class="contact-form-wrapper" enctype="multipart/form-data" id='contact'>
                        <div id="contact-form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputName">Your Name <span class="font10 text-danger">(required)</span></label>
                                        <input id="contact-name" name="contact-name" required='required' type="text" class="form-control" data-error="Your name is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputEmail">Your Email <span class="font10 text-danger">(required)</span></label>
                                        <input id="contact-email" name="contact-email" type="email" class="form-control" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Your Phone <span class="font10 text-danger">(required)</span></label>
                                        <input type="text" id="contact-phone" required='required' name="contact-phone"  class="form-control" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Job Profile <span class="font10 text-danger">(required)</span></label>
                                        <input type="text" id="job-profile" required='required' name="job-profile" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="inputEmail">Upload Resume <span class="font10 text-danger">(required)</span></label>
                                        <input id="resume" type="file" name="resume" class="" required accept=".pdf,.doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" >
                                        <div class="help-block with-errors"><p class="helpText dspIB">Supported Formats: doc,docx,pdf<br>Max file size:  3 MB <br></p></div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="inputMessage">Message <span class="font10 text-danger">(required)</span></label>
                                        <textarea id="contact-msg" name="contact-msg" class="form-control" rows="4" data-minlength="50" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 text-right">
                                    <button type="submit" id="contact-submit" name="submit" class="btn btn-primary mt-5">Send Message</button>
                                </div>
                            </div>
                        </div>
                        <!--<div id="contact-loading"> <img src="images/loading.gif" alt="Loading" style="display:inline;"/><br>
                            Email Sending... </div>

                        <div id="contact-failed"> Error, message sending faild , try after sometime. </div> -->
                    </form>
                </div>
            </div>
        </div>

	<!-- ***** Form Content End ***** -->


<!-- ***** Footer Start ***** -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-12 col-sm-12">
				<h3>About TekLink</h3>
				<!-- <img src="assets/images/logo-color.png" class="logo" alt="TekLink Logo"> -->
				<div class="text">TekLink is a technology solutions and specialist services business, conceptualised for technology (Tek) bridging/ Link(ing) with...<sapn>
					<a href="about-us.html">Read More</a></sapn></div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6 col-6">
				<h5>Helpful Links</h5>
				<ul class="footer-nav">
					<li><a href="#"><i class="fa fa-angle-right"></i><span>Technologiesa</span></a></li>
					<li><a href="#"><i class="fa fa-angle-right"></i><span>About Us</span></a></li>
					<li><a href="#"><i class="fa fa-angle-right"></i><span>Services</span></a></li>
					<!--<li><a href="#"><i class="fa fa-angle-right"></i><span>Blog</span></a></li>-->
					<li><a href="#"><i class="fa fa-angle-right"></i><span>Contact</span></a></li>
				</ul>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6 col-6">
				<h5>Latest Project</h5>
				<ul class="footer-nav">
					<li><a href="#"><i class="fa fa-angle-right"></i><span>E Store</span></a></li>
					<li><a href="#"><i class="fa fa-angle-right"></i><span>SOD</span></a></li>
					<li><a href="#"><i class="fa fa-angle-right"></i><span>ASN LIVE</span></a></li>
					<li><a href="#"><i class="fa fa-angle-right"></i><span>Supply & Exchange</span></a></li>
					<li><a href="#"><i class="fa fa-angle-right"></i><span>E works</span></a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12">
				<h5>Contact Us</h5>
				<div class="address">
					<p>TekLink Enterprises Private Limited,<br>603, Ansal Corporate Park ,Tower A1,Sector 142</p><p>Noida (Uttar Pradesh) India</p>
					<p><span>E-Mail:</span><a href="mailto:info@teklinkinternational.com">info@teklinkinternational.com</a></p>
					<ul class="social">
						<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
						<li><a href="#"><i class="fa fa-github-square"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<p class="copyright">© 2017 TekLink. All Rights Reserved.</p>
			</div>
		</div>
	</div>
</footer>
<!-- ***** Footer Start ***** -->




<!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/parallax.min.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAthC_2x5GtKhiH7rUumkMbwvp31qyFyA8"></script>
<script src="assets/js/map-script.js"></script>

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
</body>
</html>