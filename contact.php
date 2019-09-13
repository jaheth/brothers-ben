<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Brothers Ben</title>
  <meta name="description" content="Brothers Ben Website Design">
  <meta name="author" content="Brothers Ben">

  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>
		<div class="container-fluid">
			<div class="row">
				<div class="logoTopLeft col-1">
					<a href="home.html"><img src="img/logo.png" class="logo" alt="Brothers Ben Logo" />
					</a>
				</div>
				<div class="menuFloatTop col-11 row">
					<span class="menuHome col-2 text-center"><h3 class="menuItem"><a href="home.html">Home</a></h3></span>
					<span class="menuDesign col-2 text-center"><h3 class="menuItem"><a href="design.html">Design</a></h3></span>
					<span class="menuServices col-2 text-center"><h3 class="menuItem"><a href="services.html">Services</a></h3></span>
					<span class="menuAbout col-2 text-center" ><h3 class="menuItem"><a href="about.html">About Us</a></h3></span>
					<span class="menuContact col-2 text-center"><h3 class="menuItem"><a href="contact.php">Contact</a></h3></span>
				</div>
			</div>
			<div class="row vertical-spacer-contact"></div>
			<div class="row">
			<div class="col-3 spacer"></div>
			<h2 class="col-6 text-center">Contact Us</h2>
			<div class="col-3 spacer"></div>
			</div>
			<div class="row">
			<div class=" spacer col-3"></div>
			<div class="contactInfo col-6">
			<p><h4 class="text-center">Whether you need a quote, information, help or just want to say hi, please send us an email, and we'll get back to you as soon as we can.</h4></p>
			<h4 class="text-center"><a href="mailto:bens@brothersben.com">bens@brothersben.com</a>
			</div>
			<div class="spacer col-3"></div>
			
		</div>
		<div class="row vertical-spacer-contact"></div>
		<div class="row vertical-spacer-contact"></div>
		<div class="footerContainer col-12"><p class="footerContent text-right">Last Updated 2019 - Crafted by Brothers Ben</p></div>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
	$(".menuHome").click(function() {
	window.location = $(this).find("a").attr("href"); 
	return false;
});
	$(".menuDesign").click(function() {
	window.location = $(this).find("a").attr("href"); 
	return false;
});
	$(".menuServices").click(function() {
	window.location = $(this).find("a").attr("href"); 
	return false;
});
	$(".menuAbout").click(function() {
	window.location = $(this).find("a").attr("href"); 
	return false;
});
	$(".menuContact").click(function() {
	window.location = $(this).find("a").attr("href"); 
	return false;
});
</script>
</body>
</html>