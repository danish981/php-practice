<?php

$htmlContent = "<h3>what is your name</h3>";
$htmlContent2 = "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut exercitationem ipsum minus modi ullam. Error eum perspiciatis quae velit vitae.</p>";
// this string has little long html content
$htmlContent3 = "
<table>
    <tr>
    <td>Heading One</td>
    <td>Heading Two</td>
</tr>    
<tr>
<td>something One</td>
<td>something two</td>
</tr>
</table>";

echo "\nbefore using the function , the content is " . $htmlContent;
// this function returns something, and assign the returning value to somewhere
$htmlContent = strip_tags($htmlContent);
echo "\nafter calling the function, strip_tags(), the content is " . $htmlContent;







