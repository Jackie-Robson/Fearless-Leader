<?php $container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php wp_head(); ?>
	</head>
	<body class="home-body">
		<header>

			<div class="header">
				<div class="hero-text">
					<h1>Iain Anderson</h1>
					<hr style="border:1px solid white; width:200px">
					<h3>Fearless leader of Cicero group</h3>
				</div>
			</div>
			<?php get_header(); ?>

		</header><!-- Header -->

		<section class="darkest_section about">
			<div class="col-sm-8">
				<div class="iain mover">
				</div>
				<!-- <img class="mover" src="https://cicero-group.com/wp-content/uploads/2017/05/Iain-Anderson.jpg" alt=""> -->
				<article >
					This is the section were we tell the world what Iain is all about, we can add a good sized paragraph sumarizing the man himself.
				</article>

			</div>
		</section>

		<section class="paralax" style="background-image: url('https://i.imgur.com/cKqb747.jpg);">
		</section>

		<section class="right-image dark_section">

			<div class="image">
				<div>
					<h1>Project title</h1>
					<hr style="border:1px solid white; width:200px">
					<h3>subtitle over an image relevant to the project.</h3>
				</div>
			</div>

			<article>
				<p>
					This is where we will put your proudest achivement, whether it's about your status as a stonewall ambassador, or
					how you're a Non executive director of Inovate Finance.
				</p>
				<p>it's up to you!</p>
				<p>also don't worry about space in this section because it has a nifty scrolling mechanic, look!</p>
				<p>
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
				</p>
			</article>
		</section>

		<section class="paralax" style="background-image: url('https://images.unsplash.com/photo-1431540015161-0bf868a2d407?auto=format&fit=crop&w=1050&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D');">
		</section>

		<section class="darker_section">
			<div class="col-sm-8">
				<article >
					We can add some more descriptive text here, not quite sure what but we'll think of somthing.
				</article>
			</div>
		</section>

		<section class="paralax" style="background-image: url('https://images.unsplash.com/photo-1476990789491-712b869b91a5?auto=format&fit=crop&w=1488&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D');">
		</section>

		<section class="lightest_section">
			<div class="col-sm-8">
				<article >
					We'll add some more text here too! but if you don't want to that's ok, we can just delete this bit!
				</article>
			</div>
		</section>

		<section class="left-image dark_section">
			<div class="image">
				<div>
					<h1>Iain Andersons projects</h1>
					<hr style="border:1px solid white; width:200px">
					<h3>See what he's been up to.</h3>
				</div>
			</div>

			<article>
				<p>
					You name it, he's done it.
				</p>
				<p>
					From being on the television to telling the big bosses what's what about LGBT issues.
				</p>
				<p>See what other amazing things he's done at the projects page.
				</p>
				<a class="btn btn-secondary" href="http://localhost:8888/projects/" role="button">Projects page</a>
			</article>

		</section>
	</body>
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
	<script type="text/javascript">
	// adds motion to paralax

	$(document).ready(function() { if($(window).width() >= 1200){
	var movementStrength = 15;
	var height = movementStrength / $(window).height();
	var width = movementStrength / $(window).width();
	$(window).mousemove(function(e){
						var pageX = e.pageX - ($(window).width() / 1.5);
						var pageY = e.pageY - ($(window).height() / 2);
						var newvalueX = width * pageX - 10;
						var newvalueY = height * pageY  -20;
						$('.mover').css("background-position", newvalueX+"px     "+newvalueY+"px");
	});
}});
	</script>
</html>
