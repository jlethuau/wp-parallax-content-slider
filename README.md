# WordPress Parallax Content Slider

A customizable JQuery content slider with CSS3 animations and parallax effects.

## Features

* The Plugin is fully-based on the WordPress [Plugin API](http://codex.wordpress.org/Plugin_API)
* i18n support: Ready for translation using .po files (http://codex.wordpress.org/I18n_for_WordPress_Developers)
* WPML support: Queries, option management and strings declaration are made to work with [WPML](http://wpml.org/documentation/theme-compatibility/go-global-program/)
* Adds automatically a content slider of your last posts where you want on your WordPress blog or website
* Shortcode support
* Transitions between slides are made using a powerfull combination of CSS3 and JQuery to display a beautiful parallax effect
* Very easy to configure as it adds automatically an admin page in WordPress administration section
* Offers the possibility to choose to display a static HTML content instead of displaying last posts in the slider

Some of the parameters you can manage in the admin section are listed below:
* The type of content to display (posts, pages, both) ;
* The number of slides to display ;
* The auto-switch mode ;
* The time between each slide ;
* The sort order of the content to display ;
* The graphic theme ;
* and many more...

## Usage

### First installation

Download ZIP file and simply follow the instructions [here](http://wordpress.org/extend/plugins/wp-parallax-content-slider/installation/)

### Automatic update

Only official releases will be deployed on the Wordpress.org SVN repository and then automatically updatable.

Be careful, if you decide to upgrade automatically the plugin, be sure to backup your customized files, especially 'style.css' and 'static-slides-sample.php'. Automatic update will replace these files and you might lose your stuff!

## Roadmap

If you want to help me or contribute to this project, I'll consider all requests, suggestions and pull requests from users and developpers.

### TODOs

* Code improvement
* Add new translations files ([Contact me on twitter](http://twitter.com/JulienLeThuaut/) if you want to help :)
* Use a new custom post type "Parallax slide" to manage static slides instead of the old static HTML file 
* Better gesture 

## License

The WordPress Plugin Boilerplate is licensed under the GPL v2 or later.

> This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

> This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

> You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

## Changelog

### 1.0-dev

* Development version for GitHub users "only", official releases vill be packaged and put into the Wordpress.org official SVN 
* Added filter hooks: prlx_slide_title, prlx_slide_content, prlx_pre_get_posts
* New swipe JS plugin [touchswipe.js](http://labs.skinkers.com/touchSwipe/)

Contributors: [matthiasbreuer](https://github.com/matthiasbreuer)

### 0.9.3 

Please don't forgive to backup your customized files and styles before doing an automatic update!

* Published to GitHub
* New translations (Georgian and Russian) thanks to Temur Danelia
* New parameter: Choose to display content or excerpt (Warning: displaying full content will certainly cause CSS bugs you'll have to fix yourself)
* Database optimization: Settings are added in the DB into an array instead of many fields (Old settings will be retrieved before deletion)
* WPML support: Fixed post queries to improve WPML support

Notice: This would be the last release before a great code refactoring! V1.0 should really rocks ;)

### < 0.9.3 

You will find informations about old releases on the Wordpress.org [official plugin page](http://wordpress.org/extend/plugins/wp-parallax-content-slider/changelog/)

## Author Information

The WordPress Parallax Content Slider was originally started and is maintained by [Julien LE THUAUT](http://jltweb.info/). Don't hesitate to follow me on [Twitter](http://twitter.com/JulienLeThuaut/).
