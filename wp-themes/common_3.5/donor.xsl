<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0" 
xmlns:content="http://purl.org/rss/1.0/modules/content/"
xmlns:wfw="http://wellformedweb.org/CommentAPI/" 
xmlns:dc="http://purl.org/dc/elements/1.1/" 
xmlns:atom="http://www.w3.org/2005/Atom" 
xmlns:sy="http://purl.org/rss/1.0/modules/syndication/" 
xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
>



<xsl:output method="html" doctype-system="http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"/>
     
	<xsl:template match="/">
		<!--Depending on page enter the correct category ($category = page slug and must be equal to category = post category)--> 

		
			<xsl:for-each select="rss/channel/item[category = $category and category = 'donor']">
		<div class="six columns additional_profile">        
			<xsl:variable name="ImageURL" xmlns:content="http://purl.org/rss/1.0/modules/content/" select="substring-before(substring-after(content:encoded, 'src=&quot;'), '&quot;')" />
			<img alt="" src="{$ImageURL}" width="480px" height="300px" />
			<div class="additional_profile_text">
				<div class="twelve columns">
					<a href="{link}"><small><xsl:text>Donor Profile</xsl:text></small></a>
					<a href="{link}"><h3><xsl:value-of select="title" /></h3></a>
				</div>
			</div>
		</div>
			</xsl:for-each>


	</xsl:template>
	 
</xsl:stylesheet>	