#Common 3.5 Wordpress Themes
- In the wp-themes directory migrated wordpress themes will be stored
- The plan is to create a Common 3.5 main theme with appropriate child themes
- There will also be themes separate from common 3 (like phil, campaign, etc)

##WordPress Theme Migration 
Things to consider when migrating from Mimosa to WordPress:
- All JavaScript files are called with [requrie.js](http://requirejs.org/) and should be referenced in /javascripts/main.js
- Require.js and main.js should be registered with wp_register_script() in functions.php 
- Try to keep one stylesheet (style.css) and import other stylesheets

###Common 3.5: 
- Basic pages/files needed are footer-links.php, footer.php, funcitons.php, header.php, index.php, page.php, sidebar.php, 404.php, and style.css, in addition to the framework javascript stuff.  
- For the footer there are a bunch of xml files used for links.

###Common 3.5 Home:
- When updating the home page use the Home Page Template (page_home.php). Please do not make other templates for the homepage. If there is a part of the template that you would like to change use advanced custom fields.

## XSL Transformations 
- Stories, news feeds, volunteer leaders, etc all handled with xsl transformations. The transformation can be done either with PHP or JavaScript. The benefit with using JS is that the feeds can be called asynchronously. Common_3.5_home
uses PHP for feeds and Common_3.5 is using JS. Currently the JS transformation isn't workign in IE 
- There are two menus Primary and Press. Primary is for the global nav and Press is for the site nav 
- JS XSL transformations are done with the script in /javascripts/app/transformXML.js and uses [XSLT.js](http://johannburkard.de/software/xsltjs/). XSLT.js makes it really easy but currently isn't working in IE (this may be an issue with require.js and not XSLT.js)
- If chosen to go the PHP route I would write a function that determines the page and makes the appropraite transformation instead of just resuing the same 8 lines of code all over the place (I may have time to write this function before I leave). 

###Progress Bar:
- The progress bar/chart has been refactored to only use JS and is in /javascripts/app/progressChart.js. To determine what page the user is on there is a funciton get_current_site(). This function may need to be altered since in the development environment the site was set up on the /wordpress/ directory instead of root. 
