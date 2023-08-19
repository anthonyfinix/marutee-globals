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
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'mail.piratepro.in';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'enquiry@piratepro.in';                 // SMTP username
        $mail->Password = 'pirate@pro';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
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
	<title>SBRL</title>
    <meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/main.css"/>
	<link rel="stylesheet" href="css/sbrl.css"/>
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
                    <a class="nav-link text-white active py-0" href="index.php#partner">Our Partner</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-white py-0" href="index.php#department">Departments</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-white py-0" href="index.php#clients">Clients</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-white py-0" href="index.php#testimony">Testimony</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-white py-0" href="contact.html">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main>
<article id="hero" class="p-5">
	<h1 id="heroHeading" class="my-heading1 my-5 py-5 text-white">SHREE<br>BALAJI<br>ROADLINES</h1>
</article>
<article id="about" class="p-5">
	<div class="container my-5 d-md-flex justify-content-around">
		<p class="mx-5 font-weight-bold">We aspire to build and connect India by creating a collaborative and harmonious ecosystem where stakeholders will work together to build a sector which, contrary to its current state, will be known for its safety, reliability, transparency, precision and the ability to create value for everyone.<br><br>
		The core of whatever is done at SBRL is rooted strongly in this broader purpose. While we started with a mission to make logistics human through the driver relay model, we are driven by the opportunity to make India’s logistics infrastructure world-class through data and technology while also building the country’s most inspirational place to work at.</p>
		<img src="img/testimony/people1.jpg" width="200px" height="200px" />
	</div>
</article>
<article id="caption" class="px-5 pb-5 d-md-flex justify-content-between">
	<div class="m-4">
		<h1>Solving Real Problems</h1>
		<h4 class="my-5 font-weight-bold"><span>At SBRL,data meets logistics and Magic follows<br>
		we are transforming te antiquited logistics industry<br>
		and bringing it into 21st century by building the next generation technology
		</span>
		</h4>
		<a href="sbril2.html"><button class="btn btn-primary"><h3>Products</h3></button></a>
	</div>
	<img id="window" src="img/bg-sbrl2.jpg" width="300px" height="400px">
</article>
<article id="caption2" class="py-5">
	<h1 class="m-4 text-white">LETS BUILD<br> A NEW INDIA, TOGETHER</h1>
	<p class="mx-4 mb-5 text-white">Challenge the norm, Pioneer the new normal,<br> If you are fantastical about creating lasting impact and obsessive about innovation,<br> then join us to redefine logistics</p>
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
		<div class="p-3 my-primary w-50 rounded">
			<form class="form-group" method="POST">
				<input class="form-control my-3" name="name" type="text" placeholder="Name">
				<input class="form-control my-3" name="email" type="text" placeholder="Email">
				<textarea class="form-control" placeholder="Message" name="message" cols="30" rows="10"></textarea>
				<button type="submit" name="querySubmit" class="btn btn-light my-4">Submit</button>
			</form>
		</div>
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
		  slidesPerView: 3,
		  spaceBetween: 30,
		});
	});
</script>
</body>
</html>