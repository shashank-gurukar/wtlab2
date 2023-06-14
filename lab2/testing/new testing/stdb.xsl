<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">


 <xsl:template match="/university">

 <html>
 <body>
 <table border="1">

<tr>
<th>Name</th>
<th>usn</th>
<th>year</th>
</tr>
<xsl:for-each select ="student">
<tr>
<td><xsl:value-of select="name"/></td>
<td><xsl:value-of select="usn"/></td>
<td><xsl:value-of select="year"/></td>



</tr>

 
</xsl:for-each>
 
 </table>
 </body>
 </html>


</xsl:template>
</xsl:stylesheet>