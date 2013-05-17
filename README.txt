=== WP Parallax Content Slider ===
Plugin Author: wp-maverick
Donate link: http://jltweb.info/realisations/wp-parallax-content-plugin/#contribute
Contributors: wp-maverick, mbamultimedia
Tags: slider, parallax, animation, jquery, responsive
Requires at least: 3.0
Tested up to: 3.5.1
Stable tag: 0.9.4

A customizable JQuery content slider with CSS3 animations and parallax effects.

== Description ==

WP Parallax Content Slider is a plugin which adds automatically a content slider of your last posts where you want on your Wordpress blog or website.

This plugin is written upon the code of [Manoella Ilic](http://tympanus.net/codrops/author/crnacura/), you can see the simple JQuery and CSS version [here](http://tympanus.net/codrops/2012/03/15/parallax-content-slider-with-css3-and-jquery/).

Transitions between slides are made using a powerfull combination of CSS3 and JQuery to display a beautiful parallax effect.

It is very easy to configure the plugin as it adds automatically an admin page in Wordpress administration section. You will be able to configure :

* New in v0.9.4 : Filter category in a shortcode parameter (eg. [parallaxcontentslider categ="2"] or [parallaxcontentslider categ="2,5"]);
* The type of content to display (posts, pages, both);
* A category to filter to choose which post categories you wan't to display;
* The number of slides to display;
* The auto-switch mode;
* The time between each slide;
* The sort order of the content to display;
* The graphic theme;
* and many more...

It's also possible to choose to display a static HTML content instead of displaying last posts in the slider.

Roadmap:

* Static slides in a new dedicated custom_post_type;
* Better shortcodes;
* Add a parameter to use an external CSS file to customize CSS styles;
* Add extra parameters to the admin panel (Sizes, colors,...);
* Better touch support;
* and many more...

Available translations:

* English: Julien Le Thuaut
* French (fr_FR): Julien Le Thuaut
* Russian (ru_RU): [Temur Danelia](http://wordpress.org/support/profile/temur-danelia)
* Georgian (ka_GE): [Temur Danelia](http://wordpress.org/support/profile/temur-danelia)
* Polish (pl_PL): [snecz](http://wordpress.org/support/profile/snecz)
* Turkish (tr_TR): Batuhan Büyükgüzel (Partial translation: 65%)
* other languages (xx_XX): Translators needed ;)

= Plugin's Official Site =

You'll find more informations on the WP Parallax Content Slider plugin page [here](http://jltweb.info/realisations/wp-parallax-content-plugin/).

== Installation ==

To install the plugin you must follow these 4 simple steps:

1. Upload the `wp-parallax-content-slider` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place the following code in your templates :`<?php if ( function_exists( 'get_wp_parallax_content_slider' ) ) { get_wp_parallax_content_slider(); } ?>`
1. Customize your slider with the option panel in Wordpress

If you want to insert the slider in a page (or a post), you will just have to place the following shortcode into the page text: `[parallaxcontentslider]`

== Frequently Asked Questions ==

= What is the difference between static and dynamic mode? =

In static display mode, the plugin use the slides which are in the file `static-slides-sample.php`.

In dynamic display mode, the plugin generate slides based on your wordpress posts.

= How do I add/edit slides in static mode? =

In static display mode, the plugin simply use the 4 slides which are in the file `static-slides-sample.php`. So if you want to add/edit slides, youâ€™ll have to edit manually this file! (I recommand to copy the sample file and rename it, then change the inclusion in `wp-parallax-content-slider.php`:
`include('static-slides-sample.php');`
to
`include('static-slides-customized.php');`

= The slider appears but it is empty, what can I do? =

Many users have reported this problem and almost everytime, that's due to a javascript conflict with other custom themes or plugins which don't respect development best-practices.

Your browser development console will help you to see if there is an error, and most of the time, this error will be:
`Uncaught TypeError: Object # has no method 'cslider'`

Go to the [support section](http://wordpress.org/support/plugin/wp-parallax-content-slider), you should find something interesting among the existing threads.

= I can't see the parallax effect in Internet Explorer (IE7, IE8, IE9), is that a bug? =

Unfortunately for IE users, this slider use CSS3 transitions & animations which are not yet supported by these IE versions :(

[http://caniuse.com/#feat=css-transitions](http://caniuse.com/#feat=css-transitions)

[http://caniuse.com/#feat=css-animation](http://caniuse.com/#feat=css-animation)

So the slider will works, but without the parallax effect!

= Is this slider "Responsive"? =

Yes, it is! I have tried to improve display for at least 3 kind of resolutions (Desktop, Tablet, phones).

You can see the how the slider will be displayed on different devices on the responsinator web site: [here](http://www.responsinator.com/?url=http%3A%2F%2Fjltweb.info%2Frealisations%2Fwp-parallax-content-plugin%2F)

== Screenshots ==

1. The slider displayed after the header
2. The admin panel

== Changelog ==

= 0.9.3 =
* New translations (Georgian and Russian) thanks to Temur Danelia
* New parameter: Choose to display content or excerpt (Warning: displaying full content will certainly cause CSS bugs you'll have to fix yourself)
* Database optimization: Settings are added in the DB into an array instead of many fields (Old settings will be retrieved before deletion)
* WPML support: Fixed post queries to improve WPML support

= 0.9.2 =
* Fix a minor bug about Japanese chars support (Thks miki)
* New parameter: Now you can choose to display posts, pages or both

= 0.9.1 =
* Fix a PHP regression : Featured images were not displayed in dynamic mode in v0.9 (Thks xclamation)

= 0.9 =
* Shortcode support: [parallaxcontentslider]
* Responsive design improvements
* Fix some CSS rules to prevent bugs in responsives themes (Thks Stefan)
* Fix a PHP bug due to the misuse of the global variable $post

= 0.8 =
* Fix Custom Modernizr script bug on IE8 and IE7 due to old version of html5shiv (Thks Shawn)
* Fix some admin panel bugs in dynamic mode (Thks Brett)

= 0.7 =
* User can now choose between 4 CSS Themes
* Add swipe support for touch screens

= 0.6 =
* User can now apply a filter on post categories
* New parameters for the dynamic mode: Post ordering and sorting
* Add a bit of responsive design

= 0.5.1 =
* Fix the slider Opera bug

= 0.5 =
* Thumbnails are now displayed in the dynamic mode (medium size) for posts which have one
* Add a new parameter to choose the default image to display for posts without thumbnail in the dynamic mode
* French translation files have been completed and corrected

= 0.4 =
* Add parameters for better configuration and clearly separate the admin panel between dynamic mode and static mode parameters
* French translation files have been completed and corrected

= 0.3 =
* Add selection of last articles to display in a dynamic slider instead of static content

= 0.2 =
* Use admin parameters to customize the CSS Style and JQuery script
* Add french translation (.po files)

= 0.1 =
* Slider content and number of slides are static
* admin page is developped but parameters are not used

== Upgrade Notice ==

Be careful, if you decide to upgrade automatically the plugin, be sure to backup your customized files, especially 'style.css' and 'static-slides-sample.php'. Automatic update will replace these files and you might lose your stuff!
