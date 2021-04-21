<?php
session_start();

$pagename="about us"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";

include ("headfile.html"); //include header layout file
include ("detectlogin.php");
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
//display random text
echo "<p> Lm vel quam
elementum pulvinar.</p>

 Aliquet eget sit amet tellus cras adipiscing enim eu turpis. Vestibulum lectus
mauris ultrices eros in. At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellatFaucibus in ornare quam viverra. Hac habitasse platea dictumst vestibulum
rhoncus. Parturient montes nascetur ridiculus mus. Dui accumsan sit amet nulla facilisi morbi tempus
iaculis urna.";


include("footfile.html"); //include head layout

echo "</body>";
?>
