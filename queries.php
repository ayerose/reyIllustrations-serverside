<?php

if (isset($_GET['width'])) {
  $width = $_GET['width'];
    if ($width <= 480) {include ('mobile_file.php');} //mobile devices

} else {
echo "<script language='javascript'>\n";
echo "  location.href=\"${_SERVER['SCRIPT_NAME']}?${_SERVER['QUERY_STRING']}" . "&width=\" + screen.width; \n";
echo "</script>\n";
exit();
}
?>