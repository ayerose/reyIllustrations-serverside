<?php
session_start();
include ("db.php");

$pagename="Buy your favourite illustrations here!"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
include ("detectlogin.php");

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page



 //retrieve the product id passed from previous page using the GET method and the $_GET superglobal variable
 //applied to the query string u_prod_id

 //store the value in a local variable called $prodid
 $prodid=$_GET['u_prod_id'];


//echo "<p> selected product id: ".$prodid;

	//create a $SQL variable and populate it with a SQL statement that retrieves product details
	$SQL="SELECT prodId, prodName, prodPicNameLarge, prodDescripLong, prodPrice, prodQuantity
    FROM ProductRey
    WHERE prodId= ".$prodid;

	//run SQL query for connected DB or exit and display error message
	$exeSQL=mysqli_query($conn,$SQL) or  die (mysqli_error());

	$arrayp=mysqli_fetch_array($exeSQL);


			 echo "<td style='border: 0px'>";  //display the small image whose name is contained in the array
			 //make the image into an anchor to prodbuy.php and pass the product id by URL (the id from the array)
    	 echo "<tr>";
       	 echo "<td style='border: 0px'>";
         echo "<img src=images/".$arrayp['prodPicNameLarge']." height=400 width=400>";
    		 echo "</td>";
  			 echo "<td style='border: 0px'>";
         echo "<p><h5>".$arrayp['prodName']."</h5>"; //display product name as contained in the array
  			 echo "<p>".$arrayp['prodDescripLong']."</p>";
         echo "<br>";
  			 echo "<p><b><h3>ReyIllustration Price: &pound".$arrayp['prodPrice']."</h3></p></b>";
       	 echo "<p><b>In Stock: ".$arrayp['prodQuantity']."</b></p>";

         echo "<form action=basket.php method=post>";
         echo "<select name=p_quantity>";

         for ($i = 1; $i <= $arrayp['prodQuantity']; $i++) {

      		 echo "<option value=".$i.">".$i."</option>";

        		}


      //  echo  "<input type=submit name= 'submitbtn' value = 'ADD TO BASKET' id='submitbtn'>";
        echo "<input type=hidden name=h_prodid value=".$arrayp['prodId'].">";
	      echo "<input type=submit value='ADD TO BASKET'  id='submitbtn' >";


         echo "</select>";
         echo "</form>";

       echo "<br>";
			 echo "</td>";
			 echo "</tr>";
    	 echo "</table>";
	include("footfile.html"); //include head layout
		echo "</body>";
		?>
