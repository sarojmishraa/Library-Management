<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>
    LIBRARY
  </title>
  </head>
      <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <style> 
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ff99bb;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 50%;
}
.button {
    background-color: #006652;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<body>
      <link rel="stylesheet" type="text/css" href="new.css">
<div class="row">
  <div class="col-lg-7">
    <div class="head">
      LIBRARY
    </div>
  </div>
  <div class="col-lg-1">
    <i class="material-icons">search</i>
  </div>
  <div class="col-lg-4">
    <a class="link" href="login.html">Signin/</a><a class="link" href="signup.html">Signup</a>
  </div>
  
</div>

    <hr>
  <div class="head">
<div style="margin-left: 400px;">
<ul class="head2">
  <li><a href="home.html"><font size="+2">Home</font></a></li>
  <li><a class="active" href="books.html"><font size="+2">Books</font></a></li>
  <li><a href="newspapers.html"><font size="+2">News</font></a></li>
  <li><a href="mag.html"><font size="+2">Magazines</font></a></li>
  <li><a href="videos.html"><font size="+2">Videos</font></a></li>
  <li><a href="#about"><font size="+2">E-Payment</font></a></li>
</ul>
</div>
</div>
<hr>
<div class="heading"><b>
With a wide variety of books,browse through variety of genres such as Fiction, Classics, Children's Books, Textbooks, and much more. Explore Best Reads, Exam Central, Indian Language Books, New Releases and Best-selling books.</b>
<br>
<img src="bm1.jpg"></div>
<hr>
  <div class="urvi">Search the following categories :</div>
   
<div class="urvi1">

  <form action="searchby.php" method="post">        
    
    <input type="text" name="search1" placeholder="Search...">  
<button class="button" type="submit" value="Search" name="Search">GO</button>

<label class="container">Author
  <input type="radio" name="search0" value="Author">
  <span class="checkmark"></span>
</label>
<label class="container">Title
  <input type="radio" name="search0" value="Title">
  <span class="checkmark"></span>
</label>
<label class="container">Publisher
  <input type="radio" name="search0" value="Publisher">
  <span class="checkmark"></span>
</label>
<label class="container">Subject
  <input type="radio" name="search0" value="Subject">
  <span class="checkmark"></span>
</label>
       </form>
   </div>
   <hr>
  <div class="urvi">Find among the Best-Selling :</div>
   
<div class="urvi1">
		<form action="exp.php" method="post">		    
		<input type="text" name="search1" value="" placeholder="Find">		    	
		<button class="button" type="submit" value="Search" name="Search">GO</button>
	<label class="container">Author
  <input type="radio" name="search0" value="Author">
  <span class="checkmark"></span>
</label>
<label class="container">Publisher
  <input type="radio" name="search0" value="Publisher">
  <span class="checkmark"></span>
</label>
<label class="container">Subject
  <input type="radio" name="search0" value="Subject">
  <span class="checkmark"></span>
</label>
       
</form>
</div>


<hr>


<?php
if(isset($_POST['Search'])==true)
{
include "conn.php";

$s=mysqli_select_db($conn,'library');

if(!$s)
{

echo "<br>some error in selection of database";
}

      $result1 = mysqli_query($conn,"call max_rating() ");
      

while($row = mysqli_fetch_array($result1))

{
echo "<div style='padding: 10px 50px 10px 50px;'>
      <p  style='border-style: solid; border-color:black; border-radius: 50px; border-width: 8px;
        padding: 20px 20px 20px 20px;'>
        
        <iframe src='hr1.jpg' scrolling='no' align='left'style='border:black;'  onload='resizeIframe(this)'>
        </iframe>
        
   <b><font size='4'>Id:</font>&nbsp&nbsp&nbsp</b>".$row['id']."<br>"."<b><font size='4'>Rating:</font>&nbsp&nbsp&nbsp</b>".$row['rating']."<br>"."<b><font size='4'>Title:&nbsp&nbsp&nbsp</b>".$row['title']."<br>"."<b><font size='4'>Author:</font>&nbsp&nbsp&nbsp</b>".$row['author']."<br> 
   <br><br>
   </p>

</div>";

}      

}
?>


  
<div align="center"><font size="+2"><b>EDITOR'S PICKS</b></font></div>
<div align="center">

<img src="book1.jpg" style="width:350px;height:300px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="book2.jpg" style="width:350px;height:300px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="book3.jpg" style="width:350px;height:300px;">

</div>
<hr>

<div align="center">
<font size="+2"><b>
Search by Genre
</b></font>
</div>
</br>
</br>
<div align="center">
<img src="g1.png" style="width:100px;height:100px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="g2.png" style="width:100px;height:100px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="g3.png" style="width:100px;height:100px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="g4.png" style="width:100px;height:100px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="g5.png" style="width:100px;height:100px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<img src="g6.png" style="width:100px;height:100px;"> 
</div>
<div class="genre">
  Literature and Fiction&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Romance&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Crime and Thriller&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Sci-fi and Fantasy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Textbooks&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Biographies&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<hr>
<div align="center">
<font size="+2"><b>
BestSellers
</b></font>
</div>
<div align="center">
<img src="bs1.jpg" style="width:150px;height:200px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="bs2.jpg" style="width:150px;height:200px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="bs3.jpg" style="width:150px;height:200px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="bs4.jpg" style="width:150px;height:200px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="bs5.jpg" style="width:150px;height:200px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="bs6.jpg" style="width:150px;height:200px;">
</div>
<div class="bs">
  Sita-Warrior of Mithila&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Origin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  My Journey&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  A Man Called Ove&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  C Programming&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  To Kill a Mockingbird&nbsp;
</div>
<div class="bs">
  Amish Tripathi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Dan Brown&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Abdul Kalam&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Fredrick Beckman&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Balaguruswamy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Harper Lee
<hr>
<pre>
  









</pre>
</body>

</html>

