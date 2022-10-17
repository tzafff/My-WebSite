<?php
session_start();
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

$gender=$_POST["gender"];
//echo $gender;

$username=$_POST["username"];
//echo $username;




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
	echo "Error:".$_FILES["myfile"]["error"]."<br>";
}	

mysqli_select_db($con,"sign_up");

//if(isset($_POST["user_name"]))
//{
	$usr = mysqli_query($con,"select Username from newusers where Username='$username'");
	$result = mysqli_num_rows($usr);
	if($result>0)
	{	
		echo "Υπάρχει λογαριασμός με το ίδιο Username";
		//header ("location: sign-up-form.php");
	}
	else
	{
	mysqli_query($con,"INSERT INTO newusers(Firstname,Lastname,Age,Gender,Username,Password,confirmPassword,Email,Photo,Role)
		VALUES('$fname','$lname','$birth','$gender','$username','$password','$conf_password','$email','$photo','1')");
		echo "Επιτυχής εγγραφή";
		header ("location: login.html");
	}

mysqli_close($con);

}
?>