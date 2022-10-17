<?php
session_start();

if(!(isset($_SESSION['username'])))
{
	header ("location: index.html");
}

$con = mysqli_connect("localhost","root","");
if (!$con)
{
echo "problem in the connection".mysqli_error();
}
else
{
	//echo "syndesi";
	
$fname=$_POST["fname"];
//echo $fname;

$lname=$_POST["lname"];
//echo $lname;

$birth=$_POST["birth"];
//echo $birth;

if(isset($_POST["gender"]))
{	
	$gender=$_POST["gender"];
}
//echo $gender;

$password=$_POST["password"];
//echo $password;

$conf_password=$_POST["conf_password"];
//echo $conf_password;

$email=$_POST["email"];
//echo $email;


if ($_FILES["myfile"]["error"] == 0)
{
	$photo=$_FILES["myfile"]["name"];
//echo "Upload:".$_FILES["myfile"]["name"]."<br>";
//echo "Type:".$_FILES["myfile"]["type"]."<br>";
//echo "Size:".($_FILES["myfile"]["size"]/1024)."kB<br>";
//echo "Temporary stored in:".$_FILES["myfile"]["tmp_name"];
}
else
{
	//echo "Error:".$_FILES["myfile"]["error"]."<br>";
}	

//echo $_SESSION['username'];
$username=$_SESSION['username'];
//echo 'hi'.$username;

mysqli_select_db($con,"sign_up");


if($_POST["fname"]!="" || $_POST["lname"]!="" || $_POST["birth"]!='' || $_POST["gender"]!="" || $_POST["password"]!="" || $_POST["conf_password"]!="" || $_POST["email"]!="" || $_FILES["myfile"]["name"]="")
{

	if($_POST["fname"]!="")
	{
		mysqli_query($con,"UPDATE newusers SET
		Firstname='$fname'
		where Username='$username'");
	}
	if($_POST["lname"]!="")
	{	
		mysqli_query($con,"UPDATE newusers SET
		Lastname='$lname'
		where Username='$username'");
	}
	if($_POST["birth"]!='')
	{	
		mysqli_query($con,"UPDATE newusers SET
		Age='$birth'
		where Username='$username'");
	}
	if(isset($_POST["gender"]))
	{	
		mysqli_query($con,"UPDATE newusers SET
		Gender='$gender'
		where Username='$username'");
	}
	if($_POST["password"]!="")
	{		
		mysqli_query($con,"UPDATE newusers SET
		Password='$password'
		where Username='$username'");
	}
	if($_POST["conf_password"]!="")
	{		
		mysqli_query($con,"UPDATE newusers SET
		ConfirmPassword='$conf_password'
		where Username='$username'");
	}
	if($_POST["email"]!="")
	{	
		mysqli_query($con,"UPDATE newusers SET
		Email='$email'
		where Username='$username'");
	}
	if($_FILES["myfile"]["name"]="")	
	{	
		mysqli_query($con,"UPDATE newusers SET
		Photo='$photo'
		where Username='$username'");
	}
$count=1;	
}
else
{
	$count=0;
}

mysqli_close($con);
//header ("location: login.html");

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
if($count==1)
		echo "Επιτυχής αλλαγή στοιχείων";
else
		echo "Αποτυχία αλλαγής στοιχείων";
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