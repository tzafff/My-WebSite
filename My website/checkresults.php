<?php 
session_start();
$con = mysqli_connect("localhost","root","");
if (!$con)
{
echo "problem in the connection".mysqli_error();
}
else
{	
	mysqli_select_db($con,"quiz");
	$epipedo=$_SESSION['level'];
	
	$q1=$_SESSION['q1'];

	$counter=0;	
	if(isset($_POST['radio_choice_a']))
	{
		$a1=$_POST['radio_choice_a'];
		$sql2=("SELECT content FROM equestions WHERE ID='$q1' and (correct='$a1' || correct1='$a1')");
		$result2 = mysqli_query($con, $sql2);
		$row2=mysqli_fetch_array($result2);
		if(mysqli_num_rows($result2)==1)
		{
			$counter++;
		}
	}
	
	$q2=$_SESSION['q2'];
	if(isset($_POST['radio_choice_b']))
	{
		$a2=$_POST['radio_choice_b'];
		$sql2=("SELECT content FROM equestions WHERE ID='$q2' and (correct='$a2' || correct1='$a2')");
		$result2 = mysqli_query($con, $sql2);
		$row2=mysqli_fetch_array($result2);
		if(mysqli_num_rows($result2)==1)
		{
			$counter++;
		}
	}		
	
	$q3=$_SESSION['q3'];
	if(isset($_POST['radio_choice_c']))
	{
		$a3=$_POST['radio_choice_c'];
		$sql2=("SELECT content FROM equestions WHERE ID='$q3' and correct='$a3'");
		$result2 = mysqli_query($con, $sql2);
		$row2=mysqli_fetch_array($result2);
		if(mysqli_num_rows($result2)==1)
		{
			$counter++;
		}
	}
	
	
	$q5=$_SESSION['q5'];
	if(isset($_POST['answer']))
	{
		$a5=$_POST['answer'];
		$sql2=("SELECT content FROM equestions WHERE ID='$q5' and correct='$a5'");
		$result2 = mysqli_query($con, $sql2);
		$row2=mysqli_fetch_array($result2);
		if(mysqli_num_rows($result2)==1)
		{
			$counter++;
		}
	}
		
		
		$q4=$_SESSION['q4'];
		if(isset($_POST['checkbox_1']))
		{
			$checkbox_1=$_POST['checkbox_1'];
		
			foreach($checkbox_1 as $key => $value)
			{
				$a4_1=$value;
			}
			
		}
		else
		{	
			 $a4_1="";
		}
		
		if(isset($_POST['checkbox_2']))
		{
			$checkbox_2=$_POST['checkbox_2'];
			foreach($checkbox_2 as $key => $value)
			{
				$a4_2=$value;
			}
			 $a4_2;
		}
		else
		{
			 $a4_2="";
		}
		if(isset($_POST['checkbox_3']))
		{
			$checkbox_3=$_POST['checkbox_3'];
			foreach($checkbox_3 as $key => $value)
			{
				$a4_3=$value;
			}
			 $a4_3; 
		}
		else
		{	
			 $a4_3="";
		}
		
		if(isset($_POST['checkbox_4']))
		{
			$checkbox_4=$_POST['checkbox_4'];
			foreach($checkbox_4 as $key => $value)
			{
				$a4_4=$value;
			}
			 $a4_4; 
		}
		else
		{	
			 $a4_4="";
		}
		
		$sql2=("SELECT content FROM equestions WHERE ID='$q4' and (correct='$a4_1' and correct1='$a4_2' and correct2='$a4_3' and correct3='$a4_4')");
		$result2 = mysqli_query($con, $sql2);
		$row2=mysqli_fetch_array($result2);
		if(mysqli_num_rows($result2)==1)
		{
			$counter++;
		}
		
	
		$user = $_SESSION['username'];
		$DATE=date("M/d/Y");
		mysqli_select_db($con,"sign_up");
		mysqli_query($con,"INSERT INTO results(Usr,Level,Score,DATE)
		VALUES('$user','$epipedo','$counter','$DATE')");
}
?>




<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="Εργασία 1/styles/style.css"/>
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


<main style="height:500px"> 
<?php
	echo "Η βαθμολογία σου είναι " . $counter . "/5";
?>
<br><br><br> <a href="index2.php" align="center"> Επιστροφή στην αρχική σελίδα </a>	

</main>
<aside>
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


