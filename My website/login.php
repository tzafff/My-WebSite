<?php
session_start();
$con = mysqli_connect("localhost","root","");
if (!$con)
{
echo "problem in the connection".mysqli_error();
}
else
{
	$usr=$_POST['username'];
	$_SESSION['username']="$usr";
	echo $_SESSION['username'];
	
	
	$psw=$_POST['password'];
	$_SESSION['password']="$psw";
	echo $_SESSION['password'];
	

		
			
		
		if(!(($usr=="") && ($psw=="")))
		{
			
			mysqli_select_db($con,"sign_up");
			$result=mysqli_query($con,"select * from newusers where Username='".$usr."' and Password='".$psw."' limit 1");
			
			if(mysqli_num_rows($result)==1)
			{
				
				//ADMIN//
				$result3=mysqli_query($con,"select Role from newusers where Username='".$usr."' and Password='".$psw."' and Role='3'");
				if(mysqli_num_rows($result3)==1)
				{
					header ("location: index2.php");
				}
				
				//MODERATOR//
				$result2=mysqli_query($con,"select Role from newusers where Username='".$usr."' and Password='".$psw."' and Role='2'");
				if(mysqli_num_rows($result2)==1)
				{
					
					header ("location: index2.php");
				}
				
				//USER//
				$result1=mysqli_query($con,"select Role from newusers where Username='".$usr."' and Password='".$psw."' and Role='1'");
				if(mysqli_num_rows($result1)==1)
				{
					
					header ("location: index2.php");
				}
			}
			else
			{
			
				header ("location: login.html");
			}
		}
		else
		{
			
			header ("location: login.html");
		}
}
//header ("location: login.html");
?>