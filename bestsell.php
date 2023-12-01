<?php
if(isset($_POST['Search'])==true)
 {
include "conn.php";

$s=mysqli_select_db($conn,'library');

if($s)
{
echo "<br>DATABASE SELECTED";
}
else
echo "<br>some error in selection of database";

$radio = $_POST['search0'];
$text=$_POST['search1'];
switch($radio)
{
 case 'Publisher' :
      $result = mysqli_query($conn,"call max_publisher('$_POST[search1]') ");
      break;

case 'Author' :
      $result = mysqli_query($conn,"call max_author('$_POST[search1]') ");
      break;


case 'Subject' :
      $result = mysqli_query($conn,"call max_subject('$_POST[search1]') ");
      break;

}

while($row = mysqli_fetch_array($result))

                                {
echo "</br>";
<textarea><?php echo htmlspecialchars($message); ?></textarea>
                                      	echo $row['Author'];
                                        echo "</br>";
                                        echo $row['Title'];
                                        echo "</br>";
                                        echo $row['Price'];
                                        echo "</br>";
                                        echo $row['publisher'];
                                        echo "</br>";

                                }
}
?>
