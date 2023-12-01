<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">

<script type="text/javascript">
  function resizeIframe(obj){
     obj.style.height = 0;
     obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>
<style>
 body{
        font-size: 20px;
        font-family: 'ABeeZee';
    }
ul {
    width: 100%;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #424242;
    top: 0;
    left:0;
}

li {
    float: left;
}
li a, .dropbtn {
    display: block;
    color: #FCE4EC;
    text-align: center;
    padding: 14px 30px;
    text-decoration: none;
    font-family:'Pacifico';

}
li a:hover:not(.active), .dropdown:hover .dropbtn {
    background-color: #616161 ;
}
li.dropdown {
    display: inline-block;
}
li a {
    display: block;
    color: #FCE4EC;
    text-align: center;
    padding: 14px 30px;
    text-decoration: none;
    font-family:'Pacifico';
}
li a:hover:not(.active) {
    background-color: #616161;
}

li a.active {
    color: #FCE4EC;
    background-color: #BA68C8;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #424242;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: #FCE4EC;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>
	<ul>
  <li><a href="vid.html">Home</a></li>
  <li><a href="login.html">Upload Photo</a></li>
  <li><a href="search.php">Search</a></li>
  <li><a href="ngo.html">NGO Details</a></li>
  <li><a href="about.html">About</a></li>
 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><div class="active">Reviews/Comments</div></a>
    <div class="dropdown-content">
      <a href="review.html">Give Feedback</a>
      <a href="display.php">Show Comments</a>
    </div>
  </li>
 <li><a href="contact.html">Help/Contacts</a></li>
</ul>
<?php
include "conn.php";
$sql=mysqli_select_db($conn,'info');


$result="select * from feedback";
$c=mysqli_query($conn,$result);

while($row=mysqli_fetch_array($c))
{
echo "<div style='padding: 10px 50px 10px 50px;'><p  style='border-style: solid;
  border-color:black;
  border-radius: 50px;
 border-width: 8px;
padding: 20px 20px 20px 20px;'>&nbsp&nbsp&nbsp&nbsp<iframe src='bleh.png' scrolling='no' align='left'style='border:black;'  onload='resizeIframe(this)'></iframe><br>
<br><b><font size='4'>Name:</font>&nbsp&nbsp&nbsp</b>".$row['Name']."<br>"."<b>Email:&nbsp&nbsp&nbsp</b>".$row['Email']."<br><br>"."<b>Comment:&nbsp&nbsp&nbsp</b>".$row['Comment']."<br><br><br></p></div>";}
?>
</body>
</html>