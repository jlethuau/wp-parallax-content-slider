<?php

// Warning :
// > You should copy this file (e.g. my-static-slides.php) if you want to customize the static slides!
// > Automatic update will replace this file so all your changes can be lost :(

// --- Slide template -----------------------------------
//<div class="da-slide">
//	<h2>Slide tittle</h2>
//	<p>Slide text here...</p>
//	<a href="http://jltweb.info/realisations/wp-parallax-content-plugin/" class="da-link">Read more link</a>
//	<div class="da-img"><img src="$plugin_abs_path/images/1.png" alt="Slkide image" /></div>
//</div>
// -------------------------------------------------------

$read_more = __('Read more','wp-parallax-content-slider');

$outputStatic = <<<STATICOUTPUT
<div id="da-slider" class="da-slider">
	<div class="da-slide">
		<h2>Wordpress plugin</h2>
		<p>This plugin adds automatically a content slider of your last post where you want on your Wordpress blog or website.</p>
		<a href="http://jltweb.info/realisations/wp-parallax-content-plugin/" class="da-link">$read_more</a>
		<div class="da-img"><img src="$plugin_abs_path/images/1.png" alt="image01" /></div>
	</div>
	<div class="da-slide">
		<h2>Wonderful design</h2>
		<p>This plugin is written upon the code of <a href="http://tympanus.net/codrops/author/crnacura/" target="_blank">Manoella Ilic</a>, you can see the simple JQuery and CSS version <a href="http://tympanus.net/codrops/2012/03/15/parallax-content-slider-with-css3-and-jquery/" target="_blank">here</a>.</p>
		<a href="http://jltweb.info/realisations/wp-parallax-content-plugin/" class="da-link">$read_more</a>
		<div class="da-img"><img src="$plugin_abs_path/images/2.png" alt="image01" /></div>
	</div>
	<div class="da-slide">
		<h2>CSS animation</h2>
		<p>Transitions between slides are made using a powerfull combination of CSS3 and JQuery to display a beautiful parallax effect.</p>
		<a href="http://jltweb.info/realisations/wp-parallax-content-plugin/" class="da-link">$read_more</a>
		<div class="da-img"><img src="$plugin_abs_path/images/3.png" alt="image01" /></div>
	</div>
	<div class="da-slide">
		<h2>Highly customizable</h2>
		<p>The plugin adds a administration section to set or customize various parameters like : Automatic switch mode, Transition duration, and more...</p>
		<a href="http://jltweb.info/realisations/wp-parallax-content-plugin/" class="da-link">$read_more</a>
		<div class="da-img"><img src="$plugin_abs_path/images/4.png" alt="image01" /></div>
	</div>
	<nav class="da-arrows">
		<span class="da-arrows-prev"></span>
		<span class="da-arrows-next"></span>
	</nav>
</div>
STATICOUTPUT;

?>