<?php
  include 'php/PHPMailer.php';
  include 'php/SMTP.php';
  include 'php/Exception.php';

if (isset($_POST['querySubmit'])){
    $clientMail = $_POST['email'];
    $subject = "I have an Enquiry!";
    $msgBody = "Contact Person :".$_POST['name']."<br>".$_POST['message']."<br>";
    // echo $TeleNo."<br>";
    // echo $cntPerson."<br>";
    // echo $clientMail."<br>";
    // echo $subject."<br>";
    // echo $msgBody."<br>";

    $mail = new PHPMailer\PHPMailer\PHPMailer;  
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'mail.piratepro.in';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'enquiry@piratepro.in';                 // SMTP username
        $mail->Password = 'pirate@pro';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('enquiry@piratepro.in', 'enquiry');
        $mail->addAddress('anthonyfinix@gmail.com', 'anthonyfinix');     // Add a recipient
        $mail->addAddress('pr.jack1996@gmail.com', 'prince');               // Name is optional
        $mail->addAddress('maruteeglobal11830@gmail.com', 'Marutee Global'); // Name is optional
        // $mail->addAddress('ddlm@rrslfaridabad.org', 'ddlm');               // Name is optional
        $mail->addReplyTo( $clientMail, $_POST['name']);
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $msgBody;
		$mail->send();
		
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MG | Welcome</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/main.css"/>
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/swiper.min.css"/>
	<link rel="stylesheet" href="css/mediaquery.css"/>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400|Open+Sans:400,700,800" rel="stylesheet">
	<style>
		.my-heading1{
			font-family: 'Open Sans', sans-serif;
			font-weight: 800;
			font-size: 4em;
		}
		.my-heading{
			font-family: 'Open Sans', sans-serif;
			font-weight: 800;
		}
		.my-paragraph{
			font-family: 'Montserrat', sans-serif;
		}

	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark my-primary">
    <div class="container-fluid my-2">
        <a href="index.php"><img id="brandLogo" src="img/brandLogo.png" width="200px"></a>
        <button class="navbar-toggler mt-1" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse flex-column justify-content-end align-items-start ml-lg-2 ml-0">
            <div class="d-md-flex w-100 justify-content-end align-items-center pb-4">
            	<img class="m-3" src="img/phone.svg" width="30px"/>
            	<h3 class=" m-2 text-white"><a href="tel:09958144472">+91 9958144472</a></h3>
            	<img class="m-3" src="img/envelope.svg" width="35px"/>
            	<h3 class="m-2 text-white"><a href="mailto:info@maruteeglobal.com">info@maruteeglobal.com</a></h3>
            </div>
            <ul class="navbar-nav mb-auto mt-0 ml-auto">
                <li class="nav-item mx-3">
                    <a class="nav-link text-white active py-0" href="index.php">Home</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-white active py-0" href="#partner">Our Partner</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-white py-0" href="#department">Departments</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-white py-0" href="#clients">Clients</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-white py-0" href="#testimony">Testimony</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-white py-0" href="contact.html">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main>
	<article id=hero class="py-5">
		<section class="d-inline-block my-caption my-primary my-5">
			<p class="text-white display-4 m-5 font-weight-bold">Extending Hands<br> Toward<br> Success</p>
		</section>
	</article>
	<article id="partner">
		<h1 class="my-heading1 text-center mt-5 mb-4">OUR PARTNER</h1>
		<a href="sbrl.php">
		<section class="container-fluid py-5 hvr-sweep-to-right">
			<h1 class="my-heading1 my-5 py-5 text-white text-center">SHREE BALAJI<br>ROADLINES</h1>
		</section>
		</a>
	</article>
	<article id="department" class="container-fluid pb-5">
		<h1 class="my-heading1 text-center mt-5 mb-4">WE ALSO DEALS IN</h1>
		<section class="row">
			<figure id="garment" class="col my-2">
				<a href="garments.html">
				<div class="card hvr-sweep-to-right">
					<h1 class="my-heading px-3 mt-auto">Clothing and Garments</h1>
				</div>
				</a>
			</figure>
			<figure id="restaurent" class="col my-2">
				<a href="shoes.html">
				<div class="card hvr-sweep-to-right">
					<h1 class="my-heading px-3 mt-auto">Shoes</h1>
				</div>
				</a>
			</figure>
			<figure id="petrolium" class="col my-2">
				<a href="petrolium.html">
				<div class="card hvr-sweep-to-right">
					<h1 class="my-heading px-3 mt-auto">Petrolium</h1>
				</div>	
				</a>
			</figure>
			<figure id="packaging" class="col my-2">
				<a href="packaging.html">
				<div class="card hvr-sweep-to-right">
					<h1 class="my-heading px-3 mt-auto">Packaging</h1>
				</div>	
				</a>
			</figure>
		</section>
	</article>
	<article id="clients" class="py-2 pb-5 mt-5">
		<h1 class="my-heading1 text-center mt-3 mb-4">OUR CLIENTS</h1>
		<section class="d-flex justify-content-around align-items-start pt-3 pb-5 my-5">
			<img src="img/clients/heromotocorp.svg" width="10%" class="mb-5">
			<img src="img/clients/LG.svg" width="10%" class="mb-5 align-self-center">
			<img src="img/clients/bridgestone.png" width="10%" class="mb-5">
			<img src="img/clients/sony.svg" width="10%" class="mb-5 align-self-center">
		</section>
	</article>
	<article id="customerCount" class="mt-5 my-2 py-5 d-md-flex align-items-center justify-content-center">
		<p class="mr-3">198</p>
		<h1 class="ml-4">Happy Cutomers<br>Still Counting</h1>
	</article>
	<article class="text-center pb-2">
		<img class="mx-auto rounded-circle" width="200px" src="img/founder.jpeg" alt="founder"/>
		<h5 class="my-3">Manish Sharma</h5>
		<i>Founder</i>
	</article>
	<article id="testimony" class="py-3 mt-4 my-primary">
		<h1 class="my-heading text-center mt-4 mb-5 text-white">WHAT THEY SAY ABOUT US</h1>
		<div class="swiper-container my-primary container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<figure class="card card-body">
						<div class="d-md-flex justify-content-start">
							<img class="rounded-circle my-2" src="img/testimony/people1.jpg" width="75px"/>
							<p class="mx-3 mt-auto">Milly A</p>
						</div>
						<p class="my-3 mr-2 text-left">"It's really wonderful. We have no regrets! Thanks to marutee globals, we've just launched our 5th website! Definitely worth the investment."</p>
					</figure>
				</div>
				<div class="swiper-slide">
					<figure class="card card-body">
						<div class="d-md-flex justify-content-start">
							<img class="rounded-circle my-2" src="img/testimony/people4.jpg" width="75px"/>
							<p class="mx-3 mt-auto">Verne R.</p>
						</div>
						<p class="my-3 mr-2 text-left">"Thanks to marutee globals, we've just launched our 5th website! I made back the purchase price in just 48 hours!"</p>
					</figure>
				</div>
				<div class="swiper-slide">
					<figure class="card card-body">
						<div class="d-md-flex justify-content-start">
							<img class="rounded-circle my-2" src="img/testimony/people3.jpg" width="75px"/>
							<p class="mx-3 mt-auto">Kellen J</p>
						</div>
						<p class="my-3 mr-2 text-left">"Dude, your stuff is the bomb! We're loving it. I am really satisfied with my marutee globals. Marutee globals was worth a fortune to my company."</p>
					</figure>
				</div>
				<div class="swiper-slide">
					<figure class="card card-body">
						<div class="d-md-flex justify-content-start">
							<img class="rounded-circle my-2" src="img/testimony/people2.jpg" width="75px"/>
							<p class="mx-3 mt-auto">Jacob X</p>
						</div>
						<p class="my-3 mr-2 text-left">"Thanks marutee globals! I made back the purchase price in just 48 hours! I made back the purchase price in just 48 hours! Marutee globals impressed me on multiple levels."</p>
					</figure>
				</div>
				<div class="swiper-slide">
					<figure class="card card-body">
						<div class="d-md-flex justify-content-start">
							<img class="rounded-circle my-2" src="img/testimony/people5.jpg" width="75px"/>
							<p class="mx-3 mt-auto">Jemima S</p>
						</div>
						<p class="my-3 mr-2 text-left">"Thank you so much for your help. I'd be lost without marutee globals. I can't say enough about marutee globals. Marutee globals has really helped our business."</p>
					</figure>
				</div>
			</div>
			<!-- Add Arrows -->
		    <div class="swiper-button-next"></div>
		    <div class="swiper-button-prev"></div>
		  </div>
	</article>
	
<article id="query">
	<h1 class="text-center my-5">Have any Query</h1>
	<div class="container rounded p-5 my-5 d-md-flex justify-content-around">
		<div class="p-3 text-white">
			<img class="mb-3 mr-2" src="img/pin.svg" width="25px">
			<h2 class="d-inline-block">Address</h2>
			<h4 class="ml-4">Plot No: 188<br>Sector: 58,<br>Faridabad<br>
			Haryana</h4>
			<img class="mb-3 mr-2" src="img/phone.svg" width="25px">
			<h2 class="d-inline-block mt-5">Call Us</h2>
			<h4 class="ml-4"><a href="tel:09958144472">+91 9958144472</a><br><a href="tel:09958144472">+91 9610026905</a><br>
			</h4>
		</div>
		<div class="p-3 my-primary rounded">
			<form class="form-group" method="POST">
				<input class="form-control my-3" name="name" type="text" placeholder="Name">
				<input class="form-control my-3" name="email" type="text" placeholder="Email">
				<textarea class="form-control" placeholder="Message" name="message" cols="30" rows="10"></textarea>
				<button type="submit" name="querySubmit" class="btn btn-light my-4">Submit</button>
			</form>
		</div>
	</div>
</article>
	<article id="contact" class="d-md-flex justify-content-around align-self-center py-5">
		<div>
			<h1 class="mr-auto my-0 text-white">WHY WAITING</h1>
			<p class="my-heading1 text-white mx-auto">CALL US</p>
			<h3 class="ml-auto text-white my-0">OR MAIL US</h3>
		</div>
		<div>
			<p class="my-heading1 text-white"><a href="tel:09958144472">+91 9958144472</a></p>
			<h1 class="my-heading text-white"><a href="mailto:info@maruteeglobal.com">support@maruteeglobal.com</a></h1>
		</div>
	</article>
</main>
<footer class="py-5 px-3 my-primary">
	<section class="container my-3 text-white">
	<img class="my-4" src="img/brandLogo.png" width="200px"/>
		<div class="row mt-3">
			<div class="col-md-2">
				<h4>Sitemap</h4>
				<a class="pl-0 nav-link text-white active py-0" href="index.php">Home</a>
				<a class="pl-0 nav-link text-white py-0" href="contact.html">Contact Us</a>
				<a class="pl-0 nav-link text-white active py-0" href="index.php#partner">Our Partner</a>
				<a class="pl-0 nav-link text-white py-0" href="index.php#department">Departments</a>
				<a class="pl-0 nav-link text-white py-0" href="index.php#clients">Clients</a>
				<a class="pl-0 nav-link text-white py-0" href="index.php#testimony">Testimony</a>
			</div>
			<div class="col-md-2">
				<h4>Address</h4>
				<p>Plot No: 188<br>Sector: 58,<br>Faridabad<br>Haryana</p>
			</div>
			<div class="col-md-2">
				<h4>Contact</h4>
				<p><a href="tel:09958144472">+91 9958144472</a><br><a href="tel:09610026905">+91 9610026905</a></p>
			</div>
			<div class="col-md-2">
				<h4>Mail Us</h4>
				<p><a href="mailto:info@maruteeglobal.com">info@maruteeglobal.com</a></p>
			</div>
		</div>
	</section>
</footer>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/swiper.min.js"></script>
<script>
	$(function(){
		var swiper = new Swiper('.swiper-container', {
		  setWrapperSize: true,
		  slidesPerView: 3,// Responsive breakpoints
			navigation: {
	        nextEl: '.swiper-button-next',
	        prevEl: '.swiper-button-prev',
	     	},
		  breakpoints: {
		    // when window width is <= 320px
		    450: {
		      slidesPerView: 1,
		      spaceBetween: 20
		    },
		    // when window width is <= 480px
		    767: {
		      slidesPerView: 2,
		      spaceBetween: 20
		    },
		    // when window width is <= 640px
		    991: {
		      slidesPerView: 3,
		      spaceBetween: 30
		    }
		  },
		  spaceBetween: 30,
		});
	});
</script>
</body>
</html>