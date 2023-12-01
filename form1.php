
<?php

include "conn.php";
$s=mysqli_select_db($conn,'library');
if(!$s)
{echo "<br>DATABASE NOT SELECTED";}

 if(isset($_POST['submit'])==true)
 {
$name=$_POST['name'];
$userid=$_POST["uid"];
$password=$_POST["pass"];
$DOB=$_POST["dob"];
$nationality=$_POST["nation"];
$proof=$_POST["idlist"];
$fathers_name=$_POST["fname"];
$address=$_POST["add"];
$email=$_POST["eml"];
$last=$_POST["deg"];
$occupation=$_POST["occ"];

$sql="insert into user1 values('$name','$userid','$password','$DOB','$nationality','$proof','$fathers_name','$address','$email','$last','$occupation')";

$c=mysqli_query($conn,$sql);


if(!$c)
{
echo "failed";
}
else
          	echo "Successfully inserted  into a table<br><br>";
}

?>



