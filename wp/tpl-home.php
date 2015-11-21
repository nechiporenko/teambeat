<?php 
/*
 * Template Name: Home Page
 * Description: Home Page Template
 */

get_header('main'); ?>

<!-- Page Content Start -->
<main>
	<div class="container">
		<section class="product">
			<header>
				<h1 class="product__title product__title--h1">
					Everything you need to make your organization a great place to work 
				</h1>
				<p class="product__subtitle">Teambit is a single platform for your company culture. Better understand your team, share continuous feedback with each other and improve engagement and retention.</p>
			</header>
			<form class="f-signup">
				<a href="#" class="f-signup__btn f-signup__btn--light"><img src="<?php bloginfo('template_directory'); ?>/img/google.svg" alt="Google" />Sign up with Google</a>
				<span class="f-signup__text">or</span>
				<input type="email" class="f-signup__input" placeholder="Email address..." required />
				<button type="submit" class="f-signup__btn f-signup__btn--dark">Get started for FREE</button>
			</form>
			<div class="hero">
				<div class="hero__item">
					<img src="<?php bloginfo('template_directory'); ?>/img/hero-image-before.svg" class="max-full-width" alt="Product" />
				</div>
				<div class="hero__item hero__item--center">
					<img src="<?php bloginfo('template_directory'); ?>/img/hero-arrow.svg" alt="Arrow" />
				</div>
				<div class="hero__item hero__item--last">
					<img src="<?php bloginfo('template_directory'); ?>/img/hero-image-after.svg" class="max-full-width" alt="Product" />
				</div>
			</div><!--/hero-->

			<p class="product__subtitle">Making teams happy</p>

			<div class="row">
				<div class="quote">
					<p class="quote__item">
						Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
					</p>
					<p class="quote__author">
						<img src="http://placehold.it/30x30" alt="Face" />
						<a href="#">@angelinajolie</a>
					</p>
				</div><!--/quote-->
				<div class="quote">
					<p class="quote__item">
						Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam.
					</p>
					<p class="quote__author">
						<img src="http://placehold.it/30x30" alt="Face" />
						<a href="#">@angelinajolie</a>
					</p>
				</div><!--/quote-->
				<div class="quote">
					<p class="quote__item">
						Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
					</p>
					<p class="quote__author">
						<img src="http://placehold.it/30x30" alt="Face" />
						<a href="#">@angelinajolie</a>
					</p>
				</div><!--/quote-->
			</div><!--/row-->
		</section>
	</div><!--/container-->

	<div class="container container--wide">
		<hr class="alt" />
	</div><!--/container--wide-->

    <div class="container">
		<section class="product">
			<header>
				<h2 class="product__title product__title--h2">
					Know the pulse of your company
				</h2>
				<p class="product__subtitle">
					Companies track lots of different metrics, but none is so impactful on all others as how people on your team feel. Teambit helps you understand your team much better.
				</p>
			</header>
			<div class="product__img product__img--second"></div>
		</section>
	</div><!--/container-->

	<div class="container container--wide">
		<hr class="alt" />
	</div><!--/container--wide-->

	<div class="container">
		<section class="product">
			<header>
				<h2 class="product__title product__title--h2">
					Improve everyone’s engagement and happiness
				</h2>
				<p class="product__subtitle">
					Continuous feedback is the key to building happy and engaged teams. With Teambit it’s so easy and fast to share feedback with each other, that it’s just stupid not to.
				</p>
			</header>
			<div class="product__img product__img--first"></div>
		</section>
	</div><!--/container-->

	<div class="container container--wide">
		<hr class="alt" />
	</div><!--/container--wide-->

	<div class="container">
		<section class="product">
			<header>
				<h2 class="product__title product__title--h2">
					Always be sure what to do next
				</h2>
				<p class="product__subtitle">
					We know there are hundreds of things on your mind, that’s why Teambit will smartly notify you at the perfect timing to do certain actions for boosting team’s engagement.
				</p>
			</header>
			<div class="product__img product__img--third"></div>
		</section>
	</div><!--/container-->

	<div class="signup" id="signup">
		<div class="container">
			<section class="product">
				<h3 class="signup__title">Teambit is <b>free</b> to use with unlimited number of <span>people <img src="<?php bloginfo('template_directory'); ?>/img/happy.svg" alt="Happy" /></span></h3>
				<form class="f-signup">
					<a href="#" class="f-signup__btn f-signup__btn--light"><img src="<?php bloginfo('template_directory'); ?>/img/google.svg" alt="Google" />Sign up with Google</a>
					<span class="f-signup__text">or</span>
					<input type="email" class="f-signup__input" placeholder="Email address..." required />
					<button type="submit" class="f-signup__btn f-signup__btn--dark">Get started for FREE</button>
				</form>
			</section>
		</div><!--/container-->
	</div><!--/signup-->
</main>
<!-- /Page Content End -->

<?php get_footer('main'); ?>
