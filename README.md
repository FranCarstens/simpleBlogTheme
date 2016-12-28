#Simple Blog.

A minimal, responsive blog theme for Drupal 7 Blog. It can also be used as a great starter theme if you're familiar with Drupal 7's theming engine.

Some included theme building tools are SASS support, Autoprefixing, Compass SASS mixins, BrowserSync and gulp.

## Groovy Features

The theme includes a number of pretty neat features which include:

### Social Media Links
Customizable social media links on the theme's settings page.

### Distraction free writing
Tab in and out of a distraction free writing environment. For the best experience use [markdown](https://www.drupal.org/project/markdown).

Don't like it? simple comment out sass/components/_admin.scss

### Super simple media queries

Mobile first media queries are ready to go in mobile only, tablet, narrow, normal and wide sizes. Instead of writing out long, complex queries, simply add `@media #{$media-phone}` and your ready to style mobile only queries.

Prefer different breakpoints? Simply edit _grid.scss to suit your needs.

### Instant theme updates
Quickly update global colors, fonts and even spacing by changing the variables in _colors.scss, _grid.scss, _typography.scss

##Todo

* Custom 404,403
* Alerts and Messages

##Credits

* Relies heavily on Drupal 7's base system tpl.php.
* Icons are a combination of:
	* [Vicons](https://dribbble.com/shots/1663443-60-Vicons-Free-Icon-Set) by Victor Erixon
	* [Entypo+](http://www.entypo.com) by Daniel Bruce
	* Custom
	* Packaged by [Icomoon.io](https://icomoon.io/)
* Google webfonts include Libre Franklin and Source Code Pro
* Add code highlighting with [prettify](https://www.drupal.org/project/prettify)

##License
[GNU General Public License](LICENSE.txt)