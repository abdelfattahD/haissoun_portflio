
<?php include "db.php"; ?>

<?php session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profil</title>
	

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/section_portfolio.css">
	<link rel="stylesheet" href="css/competence.css">
	<link rel="stylesheet" href="css/study.css">
	<link rel="stylesheet" href="css/contact.css">


	<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="hero-section" style="background-image: url('img/4.jpg')">	
		<div class="about-text hover-target">Qui suis-je?</div>
		<div class="contact-text hover-target">Contactez-nous</div>
		<div class="section-center">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-12 text-center">
						<h1>haissoun abdelfattah</h1>
					</div>
					<div class="col-12 text-center mb-2">
						<div class="dancing">Web DEVLOPER</div> 
					</div>
					<div class="col-12 text-center mt-4 mt-lg-5">
						<p>
						 <span class="competence hover-target">Competence</span> 

							<span class="portfolio hover-target">Portfolio</span>

						</p>
					</div>
				</div>
			</div>
		</div>
	</div>	
	
	<div class="about-section">	
		<div class="about-close hover-target"></div>
		
		<?php include 'section/section_about.php' ?>
	  
		</div>
	</div>
	
	
	<div class="competence-section">	
		<div class="competence-close hover-target"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<h3>Mes Compétences :</h3>
				</div>
				
				<?php include 'section/section_competence.php' ?>

			</div>
		</div>
	</div>
	
	<div class="contact-section">	
		<div class="contact-close hover-target"></div>
		<div class="section-center">
			
			<?php include 'section/contact-uc.php' ?>

			
		</div>
	</div>
	
	
	
	<div class="portfolio-section">	
		<div class="portfolio-close hover-target"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<h3>portfolio</h3>
				</div>
				
				<?php include 'section/section_portfolio.php' ?>
			
				
				

 				
				
			</div>
		</div>
	</div>
	
	<div class='cursor' id="cursor"></div>
	<div class='cursor2' id="cursor2"></div>
	<div class='cursor3' id="cursor3"></div>

<!-- Link to page
================================================== -->

<a href="https://www.linkedin.com/in/abdelfattah-haissoun-874820168" class="link-to-portfolio hover-target" target=”_blank”></a>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/JS.js"></script>
s

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://rendro.github.io/easy-pie-chart/javascripts/jquery.easy-pie-chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
<script>

$(document).ready(function(){
	$('.nav-item').click(function(){
		// reset active class
		$('.nav-item').removeClass("active");
		// add active class to selected
		$(this).addClass("active");
		// return needed to make function work
		return false;
	});
	
	
	$(function() {
		// create an empty variable
		var selectedClass = "";
		// call function when item is clicked
		$(".nav-item").click(function(){
			// assigns class to selected item
			selectedClass = $(this).attr("data-rel");
			// fades out all portfolio items
			$(".portfolio li").fadeOut(300);
			// fades in selected category
			$(".portfolio li." + selectedClass).delay(300).fadeIn(300);
		});
	});
  
}); // document ready

// competance

$('.competence').click(function() {
  $('.graphique').easyPieChart({
    scaleColor: "#ecf0f1", // indicateurs
    lineWidth: 20,
    lineCap: 'butt',
    barColor: '#ffffff', // complet
    trackColor:	"#2e4641", // incomplet
    size: 160,
    animate: 2000
  });
});




</script>