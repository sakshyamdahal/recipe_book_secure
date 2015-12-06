<?php require_once( "includes/session.php" ); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php if(!logged_in ())
{
?>

<?php include("includes/header.php"); ?>

	<!--header-->
	<header>
	
	<div class="banner row" id="banner">	

		<div class="parallax text-center" style="background-image: url(http://wowthemes.net/demo/leroy/img/dummy1.jpg);">
			<div class="parallax-pattern-overlay">
				<div class="container text-center" style="height:580px;padding-top:170px;">
					<a href="#"><img id="site-title" class=" wow fadeInDown" wow-data-delay="0.0s" wow-data-duration="0.9s" src="img/logo.png" alt="logo"/></a>
					<h2 class="intro wow zoomIn" wow-data-delay="0.4s" wow-data-duration="0.9s">Your Personal Recipes</h2>
				</div>
			</div>
		</div>
	</div>	
	
	</header>
		
	<!--about us-->
	<section class="aboutus" id="aboutus">
	<div class="container">
		<div class="heading text-center">
			<img class="dividerline" src="img/sep.png" alt="">
			<h2>About Leroy</h2>
			<img class="dividerline" src="img/sep.png" alt="">
			<h3>Have you ever felt worried that your party will not raise up to your guest expectations? In design, vertical rhythm is the structure that guides a reader's eye through the content. Good vertical rhythm makes a layout more balanced and beautiful and its content more readable. The time signature in sheet music visually depicts a song's rhythm, while for us, the lines of the baseline grid depict the rhythm of our content and give us guidelines.</h3>
		</div>			
		<div class="row">
			<div class="col-md-6">
				<div class="papers text-center">
					<img src="http://wowthemes.net/demo/leroy/img/dummies/18.jpg" alt=""><br/>
					<a href="#"><b>Download my resume</b></a>
					<h4 class="notopmarg nobotmarg">John Vandeley</h4>
					<p>
						Have you ever felt worried that your party will not raise up to your guest expectations? In design, vertical rhythm is the structure that guides a reader's eye through the content. Good vertical rhythm makes a layout more balanced and beautiful and its content more readable. The time signature in sheet music visually depicts a song's rhythm, while for us, the lines of the baseline grid depict the rhythm of our content and give us guidelines.
					</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="papers text-center">
					<img src="http://wowthemes.net/demo/leroy/img/dummies/19.jpg" alt=""><br/>
					<a href="#"><b>Download my resume</b></a>
					<h4 class="notopmarg nobotmarg">Stephanie Hellen</h4>
					<p>
						Have you ever felt worried that your party will not raise up to your guest expectations? In design, vertical rhythm is the structure that guides a reader's eye through the content. Good vertical rhythm makes a layout more balanced and beautiful and its content more readable. The time signature in sheet music visually depicts a song's rhythm, while for us, the lines of the baseline grid depict the rhythm of our content and give us guidelines.
					</p>
				</div>
			</div>
		</div>
	</div>
	</section>
	
	<!--specialties-->
	<section class="specialties" id="specialties">
	<div class="container">
		<div class="heading text-center">
			<img class="dividerline" src="img/sep.png" alt="">
			<h2>Our Specialties</h2>
			<img class="dividerline" src="img/sep.png" alt="">
			<h3>Have you ever felt worried that your party will not raise up to your guest expectations? In design, vertical rhythm is the structure that guides a reader's eye through the content. Good vertical rhythm makes a layout more balanced and beautiful and its content more readable. The time signature in sheet music visually depicts a song's rhythm, while for us, the lines of the baseline grid depict the rhythm of our content and give us guidelines.</h3>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="restmenuwrap">
					<h3 class="maincat notopmarg text-center">APPETIZERS</h3>
					<div class="restitem clearfix">
						<div class="rm-thumb" style="background-image: url(http://wowthemes.net/demo/leroy/img/dummies/1.jpg)">
						</div>
						<h5>Sweet, Sticky and Spicy Chicken</h5>
						<p>
							Pepperoni, mozzarella cheese and Italian seasonings are rolled together, baked to delicious perfection, then cut into bite-sized delights. Your guests will beg for the recipe!"
						</p>
					</div>
					<div class="restitem clearfix">
						<div class="rm-thumb" style="background-image: url(http://wowthemes.net/demo/leroy/img/dummies/2.jpg)">
						</div>
						<h5>Luxur Oyster</h5>
						<p>
							Pepperoni, mozzarella cheese and Italian seasonings are rolled together, baked to delicious perfection, then cut into bite-sized delights. Your guests will beg for the recipe!"
						</p>
					</div>
					<div class="restitem clearfix">
						<div class="rm-thumb" style="background-image: url(http://wowthemes.net/demo/leroy/img/dummies/3.jpg)">
						</div>
						<h5>Sweet, Sticky and Spicy Chicken</h5>
						<p>
							Pepperoni, mozzarella cheese and Italian seasonings are rolled together, baked to delicious perfection, then cut into bite-sized delights. Your guests will beg for the recipe!"
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="restmenuwrap">
					<h3 class="maincat notopmarg text-center">MAIN</h3>
					<div class="restitem clearfix">
						<div class="rm-thumb" style="background-image: url(http://wowthemes.net/demo/leroy/img/dummies/4.jpg)">
						</div>
						<h5>Sweet, Sticky and Spicy Chicken</h5>
						<p>
							Pepperoni, mozzarella cheese and Italian seasonings are rolled together, baked to delicious perfection, then cut into bite-sized delights. Your guests will beg for the recipe!"
						</p>
					</div>
					<div class="restitem clearfix">
						<div class="rm-thumb" style="background-image: url(http://wowthemes.net/demo/leroy/img/dummies/5.jpg)">
						</div>
						<h5>Luxur Oyster</h5>
						<p>
							Pepperoni, mozzarella cheese and Italian seasonings are rolled together, baked to delicious perfection, then cut into bite-sized delights. Your guests will beg for the recipe!"
						</p>
					</div>
					<div class="restitem clearfix">
						<div class="rm-thumb" style="background-image: url(http://wowthemes.net/demo/leroy/img/dummies/6.jpg)">
						</div>
						<h5>Sweet, Sticky and Spicy Chicken</h5>
						<p>
							Pepperoni, mozzarella cheese and Italian seasonings are rolled together, baked to delicious perfection, then cut into bite-sized delights. Your guests will beg for the recipe!"
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="restmenuwrap">
					<h3 class="maincat notopmarg text-center">DESSERTS</h3>
					<div class="restitem clearfix">
						<div class="rm-thumb" style="background-image: url(http://wowthemes.net/demo/leroy/img/dummies/7.jpg)">
						</div>
						<h5>Sweet, Sticky and Spicy Chicken</h5>
						<p>
							Pepperoni, mozzarella cheese and Italian seasonings are rolled together, baked to delicious perfection, then cut into bite-sized delights. Your guests will beg for the recipe!"
						</p>
					</div>
					<div class="restitem clearfix">
						<div class="rm-thumb" style="background-image: url(http://wowthemes.net/demo/leroy/img/dummies/8.jpg)">
						</div>
						<h5>Luxur Oyster</h5>
						<p>
							Pepperoni, mozzarella cheese and Italian seasonings are rolled together, baked to delicious perfection, then cut into bite-sized delights. Your guests will beg for the recipe!"
						</p>
					</div>
					<div class="restitem clearfix">
						<div class="rm-thumb" style="background-image: url(http://wowthemes.net/demo/leroy/img/dummies/9.jpg)">
						</div>
						<h5>Sweet, Sticky and Spicy Chicken</h5>
						<p>
							Pepperoni, mozzarella cheese and Italian seasonings are rolled together, baked to delicious perfection, then cut into bite-sized delights. Your guests will beg for the recipe!"
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
<?php require("includes/footer.php"); ?>
<?php } else { ?>
	<?php require("personal_recipes.php"); ?>

<?php }	?>
	
