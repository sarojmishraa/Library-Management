<?php

include "conn.php";
$s=mysqli_select_db($conn,'library');
if($s)
{
echo "<br>DATABASE SELECTED";
}

else
echo "<br>some error in selection of database";
if(isset($_POST['Search'])==true)
 {
$radio=$_POST['search0'];
$text=$_POST['search1'];

$results=mysqli_query($conn,"select * from books where $radio==$text");
echo $results['Title'].$results['Author'].$results['Price'];
echo "</br>";
}


?>


