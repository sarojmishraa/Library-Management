<?php
include "conn.php";
$sql=mysqli_select_db($conn,'library');
if(!$sql)
{
echo "database not selected";
}


if(isset($_POST['submit'])==true)
 {
$sql="call login('$_POST[name]','$_POST[pass]')";
$c=mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($c))


{
echo $row['a'];
}
}
?>

 
