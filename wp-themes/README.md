#UIF WordPress Themes

##Theme Migration 
Things to consider when migrating from Mimosa to WordPress:
- All JavaScript files are called with [requrie.js](http://requirejs.org/) and should be referenced in /javascripts/main.js
- Require.js and main.js should be registered with wp_register_script() in functions.php 
- Try to keep one stylesheet (style.css) and import other stylesheets
- The only external plugin needed is [advanced custom fields](http://www.advancedcustomfields.com/) 
 
###Common 3.5: 
- Basic pages/files needed:
	- footer-links.php
	- footer.php
	- funcitons.php
	- header.php
	- index.php
	- page.php
	- sidebar.php
	- 404.php 
	- style.css
	- Framework css/js   
	- In the footer there are a bunch of xml files used for the links so the folder xml-files should be included as well 
- There are the two menus of Primary and Press.The Primary Menu is for global navigation and Press is for site navigation 
- The unit pages in ct3.5 have the advanced custom fields of honor clubs, area contact information, and the giving link. Look to ct3 for how to set these up

###Common 3.5 Home:
- When updating the home page use the Home Page Template (page_home.php). 
- Please do not make other templates for the homepage. If there is a part of the template that you would like to change use advanced custom fields or alter the template itself
- The home page has the custom field of additional campaigns 

###XSL Transformations 
- Stories, news feeds, volunteer leaders, etc all handled with xsl transformations. 
	- The transformation can be done either with PHP or JavaScript. 
	- The benefit with using JS is that the feeds can be called asynchronously. 
- Common_3.5_home uses PHP for feeds and Common_3.5 is using JS   
- JS XSL transformations are done with the script in /javascripts/app/transformXML.js and uses [XSLT.js](http://johannburkard.de/software/xsltjs/). 
	- XSLT.js makes it really easy but currently isn't working in IE (this may be an issue with require.js and not XSLT.js)
- If chosen to go the PHP route I would write a function that determines the page using something like:
```
global $blog_id;
$current_blog_details = get_blog_details( array( 'blog_id' => $blog_id ) );
$current_site =  $current_blog_details->blogname;
```
- Then make the appropraite transformation based on $current_site  

###Progress Bar:
- The progress bar/chart has been refactored to only use JS and is in /javascripts/app/progressChart.js. 
- To determine what page the user is on there is a funciton get_current_site(). This function may need to be altered since in the development environment the site was set up on the /wordpress/ directory instead of root.

###Additional themes that need to be converted:
- Phil Was Here
- Careers
- Campaign 
	- would include philsday, faculty staff, iowa inspired, football legacy, grand challenges in addition to the main campaign site
	- Future campaigns should use this theme as a template or child theme 
- Try and stick to these five themes (the three above in addtion to Common_3.5/home) for the site 

###Issues that need to be fixed:
- Fonts are inconsistent accross site
- Common3.css should be merged with style.css since they are essentially the same stylesheet (because of this there are conflicts) 
- Stories have not been set up in Common_3.5. In the past they used custom wordpress post types and were handled with WP generated rss feeds. This would work again but I think we wanted to explore other options
- The concept of UIF Stream could be developed (idea of having news feed, stories, donor features, etc in a dynamic slider instead of having individual sections for each) 

