<?xml version="1.0" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="xml" encoding="iso-8859-1" omit-xml-declaration="yes" indent="yes"/>
<xsl:template match="*">
<xsl:for-each select="//*[local-name()='item']">

<!-- The last number sets how many articles to bring in.-->
<xsl:if test="position() &lt; 4">

	<!-- News Item -->
	<div class="media-box">
		<div class="media">							
			<div class="media-content">
				<a class="bold">
					<xsl:attribute name="href">
						<xsl:value-of select="*[local-name()='guid']"/>
					</xsl:attribute>
					
					<!-- Enter the maximum number of characters in a title -->
					<xsl:variable name="maxTitleLength" select="110" />

					<xsl:choose>

					<!-- If the title is greater than the maxTitleLength amount, shorten it to the maxTitleLength amount and add elipses. -->
					<xsl:when test="string-length(normalize-space(title)) &gt;= $maxTitleLength">
					<xsl:value-of select="substring(normalize-space(title),1,$maxTitleLength)" disable-output-escaping="yes" />...
					</xsl:when>

					<!-- If the title is less than the maxTitleLength amount, don't shorten -->
					<xsl:otherwise>
						<xsl:value-of select="*[local-name()='title']" disable-output-escaping="yes"/>
					</xsl:otherwise>

					</xsl:choose>	
				</a>
				<p class="subtext"><xsl:value-of select="*[local-name()='pubDate']"/></p>
			</div>
		</div>
	</div>

</xsl:if>
</xsl:for-each>
</xsl:template>
</xsl:stylesheet>
