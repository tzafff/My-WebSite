
<!DOCTYPE html>
<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="Εργασία 1/scripts/password.js"></script>
<script src="Εργασία 1/scripts/checkForm.js"></script>
<meta charset="utf-8" />
<link rel="stylesheet" href="Εργασία 1/styles/style1.css" />
<title>Εγγραφή</title>
</head>

<body>
<div class="container">
<header> 
<a href="index.html"> <img src="Εργασία 1/media/java1.png" align="center" style="color:white"></a> <h1>JAVA </h1>

<div class="logo">
<!--<h1> <a href="index.html" style="color:white"> JAVA</a> </h1>-->

 </header>

<nav> 
<ul>
	<li> <a href="index.html"> ΑΡΧΙΚΗ </a> </li>
	<li> <a href="basics.html"> ΤΟ ΘΕΜΑ ΜΟΥ </a> </li>
	<li> <a href="more.html"> ΠΕΡΙΣΣΟΤΕΡΑ </a> </li>
	<li> <a href="quiz.html">  QUIZ</a> </li>
	<li class="selected"> <a href="sign-up.php"> ΕΓΓΡΑΦΗ</a> </li>
	<li> <a href="login.php"> ΕΙΣΟΔΟΣ</a> </li>
	</ul>
</nav>

<main> <h2> ΦΟΡΜΑ ΕΓΓΡΑΦΗΣ </h2>

<form name="sign" method="post" action="sign-up2.php" enctype="multipart/form-data">

<br>

<p> Όνομα: <br>
<input type="text" name="fname" size="30" maxlength="30"  style="width:80%" required> <br>
</p>

<p> Επίθετο: <br>
<input type="text" name="lname" size="30" maxlength="30"  style="width:80%" required> <br>
</p>
 
<p> Ημερομηνία γέννησης: <br>
<input type="date" name="birth"> <br>
</p>

<p> Φύλο: <br>
<!--<input type="text" name="gender" size="30" maxlength="30"  style="width:80%" required> <br>-->
Άνδρας <input type="radio" name="gender" value="Άνδρας" required>&nbsp;&nbsp;&nbsp;&nbsp; Γυναίκα <input type="radio" name="gender" value="Γυναίκα">
</p>

<p> Username: <br>
<input type="text" name="username" id="username" size="30" maxlength="30"  style="width:80%"> <br>
</p>
<span id="availabilitiy"></span>

<p> Password: <br>
<input type="password" name="password" size="30" maxlength="30" style="width:80%" required > <br>
</p>

<p> Confirm-Password: <br>
<input type="password" name="conf_password" size="30" maxlength="30" style="width:80%" required> <br>
</p>

<p> Email: <br>
<input type="email" name="email" size="30" maxlength="30" style="width:80%" onclick="chechPassword()" required> <br>
</p>

<p> Φωτογραφία: <br>
<input type="file" name="myfile" required> <br>
</p>
<br><br>

<p>Όροι Αποδοχής<input type="checkbox" name="terms" id="terms" value="Αποδοχή" required> </p>

<br>
<p> <input type="submit" name="submit_data" value="Αποστολή" style="width:40%" onclick="chechPassword()">
</p>
</form>


<script>
function chechPassword()
{
	
	psw=document.sign.password.value;
	//alert(psw);
	
	conpsw=document.sign.conf_password.value;
	//alert(conpsw);
	
	
	if(psw!=conpsw)
	{
		alert("Not same confirm-password");
		document.sign.password.value="";
		psw="";
		conpsw=document.sign.conf_password.value="";
	}
	
}
</script>

<!--<script>
$(document).ready(function(){
	$("#username").blur(function(){
		var username = $(this).val();
		
		$.ajax({
			url:"sign-up2.php",
			method: "POST",
			data:{user_name:username},
			datatype: "text",
			success:function(html)
			{
				$('#availabilitiy').html(html);
			}
		});
	});
});		
</script>-->

</main>
<aside>  </aside>
<section> 
</section>

<footer style="color:#ffffff"> 
 Σχεδίαση Ιστοσελίδας: Κυριάκος Αλεβίζος <br>
 Επικοινωνία:<a href="mailto:kiriakosalev13@gmail.com" style="color:#ffffff"> Email me here</a>
</footer>

</div>
</body>

</html>