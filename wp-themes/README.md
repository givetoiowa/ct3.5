##Common 3.5 Wordpress Themes
- In the wp-themes directory migrated wordpress themes will be stored
- The plan is to create a Common 3.5 main theme with appropriate child themes
- There will also be themes separate from common 3 (like phil, campaign, etc)

#WordPress Theme Migration 
Things to consider when migrating from Mimosa to WordPress:
- All JavaScript files are called with [requrie.js](http://requirejs.org/) and should be referenced in /javascripts/ma
in.js
- Require.js and main.js should be registered with wp_register_script() in functions.php 
- Try to keep one stylesheet (style.css) and import other stylesheets

#Common 3.5: 
- Basic pages/files needed are footer-links.php, footer.php, funcitons.php, header.php, index.php, page.php, sidebar.php, 404.php, and style.js, in addition to the framework javascript stuff.  
- For the footer there are a bunch of xml files used for footer links.
- Stories, news feeds, volunteer leaders, etc all handled with xsl transformations. The transformation can be done eit
her with PHP or JavaScript. The benefit with using JS is that the feeds can be called asynchronously. Common_3.5_home
uses PHP for feeds and Common_3.5 is using JS. Currently the JS transformation isn't workign in IE 
- Theme has the two menus of Primary and Press. Primary is for the global nav and Press is for the site nav 

