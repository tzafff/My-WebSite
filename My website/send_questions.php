<?php 
session_start();

$con = mysqli_connect("localhost","root","");

if (!$con)
{
	echo "problem in the connection".mysqli_error();
}
else
{
	if(isset($_POST['question']))
	{
		$q=$_POST['question'];
	}
	
	if(isset($_POST['qtype']))
	{
		$type=$_POST['qtype'];
	
	}
	
	if(isset($_POST['correct_answer']))
	{
		$correct_ans=$_POST['correct_answer'];
		
	}
	
	if(isset($_POST['level']))
	{
		$level=$_POST['level'];
		
	}

	
	if(isset($_POST['false_answer1']))
	{
		$false_ans=$_POST['false_answer1'];
		
	}
		
	if(isset($_POST['answers']))
	{
		$count=0;
		$answers=$_POST['answers'];
		foreach($answers as $key => $value)
		{
			if($count==0)
			{
				$answer1=$value;
				
				
			}
			else if($count==1)
			{
				$answer2=$value;
				
			}
			$count++;
		}
		if($count==1)
		{
			mysqli_select_db($con,"sign_up");
			mysqli_query($con,"INSERT INTO usersquestions(Question,CorrectAnswer,False1,False2,Level,Type)
			VALUES('$q','$correct_ans','$false_ans','$answer1','$level','$type')");
		}
		
		else if($count==2)
		{
			mysqli_select_db($con,"sign_up");
			mysqli_query($con,"INSERT INTO usersquestions(Question,CorrectAnswer,False1,False2,False3,Level,Type)
			VALUES('$q','$correct_ans','$false_ans','$answer1','$answer2','$level','$type')");
		}
	}
	else
	{
			mysqli_select_db($con,"sign_up");
			mysqli_query($con,"INSERT INTO usersquestions(Question,CorrectAnswer,False1,Level,Type)
			VALUES('$q','$correct_ans','$false_ans','$level','$type')");
	}
	
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
		echo "Επιτυχής αποστολή ερώτησης";

?>
<br><br><br> <a href="index2.php" align="center"> Επιστροφή στην αρχική σελίδα </a>	

</main>
<aside>
<p>Ο λογαριασμός μου</p><p><a href="myprofile.html"> <img  width="80px"src="Εργασία 1/media/profile.png" align="left" ></a></p>
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