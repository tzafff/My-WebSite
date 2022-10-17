<?php 
session_start();

if(!(isset($_SESSION['username'])))
{
	header ("location: index.html");
}
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="Εργασία 1/styles/style2.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Αρχική</title>
</head>

<body>

<div class="container">
<header> 

<a href="index2.php"> <img src="Εργασία 1/media/java1.png" align="center" style="color:white"></a> <h1>JAVA </h1>
<div class="logo">
<!--<h1> <a href="index.html" style="color:white"> JAVA</a> </h1>-->

 </header>

<nav> 
<ul>
	<li> <a href="index2.php"> ΑΡΧΙΚΗ </a> </li>
	<li> <a href="basics2.php"> ΤΟ ΘΕΜΑ ΜΟΥ </a> </li>
	<li> <a href="more2.php"> ΠΕΡΙΣΣΟΤΕΡΑ </a> </li>
	<li> <a href="quiz2.php">  QUIZ</a> </li>
	<li> <a href="logout.php"> ΕΞΟΔΟΣ</a> </li>
	</ul>
</nav>


<main> 
<h2> </h2>
<br>

<form name="form" method="post" action="">
<h2> Τροποποίηση Ερώτησης </h2>
<p> Ερώτηση: <br>
<textarea name="question" style="width:80%"></textarea> <br>
</p>

<p> Σωστή Απάντηση: <br>
<textarea name="correct" style="width:80%" ></textarea> <br>
</p>
 
<p>  Λάθος Απάντηση: <br>
<textarea name="false1" style="width:80%"></textarea> <br>
</p>

<p>  Λάθος Απάντηση: <br>
<textarea name="false2" style="width:80%"></textarea> <br>
</p>

<p>  Λάθος Απάντηση: <br>
<textarea name="false3" id="username" size="30" maxlength="30"  style="width:80%"> </textarea><br>
</p>

<p><select name="stage">
<option> Επίπεδο δυσκολίας: </option>
<option value="1">Easy</option>
<option value="2"> Medium</option>
<option value="3">Hard</option>
</select><br>
</p>
<p><input type="submit" name="submit_data" value="Υποβολή"></p>
</form>


<?php

		
		$con = mysqli_connect("localhost","root","");
		mysqli_select_db($con,"sign_up");
		
		$id = $_SESSION['id'];
		//echo "the id is " .$id;
		
		if(isset($_POST['question']))
		{
			$question=$_POST['question'];
			echo $question;
			mysqli_query($con,"UPDATE usersquestions SET
			Question='$question' where ID='$id'");
		}
		
		if(isset($_POST['correct']))
		{
			$correct=$_POST['correct'];
			echo $correct;
			mysqli_query($con,"UPDATE usersquestions SET
			CorrectAnswer='$correct' where ID='$id'");
		}
		if(isset($_POST['false1']))
		{
			$false1=$_POST['false1'];
			echo $false1;
			mysqli_query($con,"UPDATE usersquestions SET
			False1='$false1' where ID='$id'");
		}
		if(isset($_POST['false2']))
		{
			$false2=$_POST['false2'];
			echo $false2;
			mysqli_query($con,"UPDATE usersquestions SET
			False2='$false2' where ID='$id'");
		}
		if(isset($_POST['false3']))
		{
			$false3=$_POST['false3'];
			echo $false3;
			mysqli_query($con,"UPDATE usersquestions SET
			False3='$false3' where ID='$id'");
		}
		
		if(isset($_POST['stage']))
		{
			$stage=$_POST['stage'];
			echo $stage;
			mysqli_query($con,"UPDATE usersquestions SET
			Level='$stage' where ID='$id'");
			header ("location: moderatorApp.php");
		}
?>

</main>
<aside style="margin:30px" >
</aside>


<section> 
</section>

<footer style="color:#ffffff"> 
 Σχεδίαση Ιστοσελίδας: Κυριάκος Αλεβίζος <br>
 Επικοινωνία:<a href="mailto:kiriakosalev13@gmail.com" style="color:#ffffff"> Email me here</a>
</footer>

</div>
</body>
</html>