<?php 

session_start();
$con = mysqli_connect("localhost","root","");
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="Εργασία 1/styles/style3.css"/>
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
	<li> <a href="moderator.php"> ΑΡΧΙΚΗ </a> </li>
	<li> <a href="basics2.php"> ΤΟ ΘΕΜΑ ΜΟΥ </a> </li>
	<li> <a href="more2.php"> ΠΕΡΙΣΣΟΤΕΡΑ </a> </li>
	<li> <a href="quiz2.php">  QUIZ</a> </li>
	<li> <a href="logout.php"> ΕΞΟΔΟΣ</a> </li>
	</ul>
</nav>


<main> 

<h2>Αποθετήριο Ερωτήσεων Συντονιστή</h2><br><br><br>


<form name="form" method="post" action="moderatorChoice.php">
ID Ερώτησης <input type="text" name="id" required>  
<select name="choice">
<option value="">Επέλεξε Λειτουργία: </option>
<option value="1"> Αποδοχή </option>
<option value="2"> Απόρριψη </option>
<option value="3"> Τροποποίηση </option>
</select>
<input type="submit" name="submit_data" value="Υποβολή">
</form>
<br><br>
<table class="table" >
<thead>
<tr>
<th>ID</th>
<th>Ερώτηση</th>
<th>Σωστή Απάντηση</th>
<th>Λάθος Απάντηση</th>
<th>Λάθος Απάντηση</th>
<th>Λάθος Απάντηση</th>
<th>Επίπεδο Δυσκολίας</th>
<th>Τύπος Ερώτησης</th>
</tr>
</thead>

<?php

	$i=1;
	mysqli_select_db($con,"sign_up");
	$result=mysqli_query($con,"SELECT * from usersquestions");
	$row = mysqli_fetch_array($result);
	while ($row)
	{
		
		$id=$row['ID'];
		//$_SESSION['id']=$id;
		
		$content=$row['Question'];
		//$_SESSION['content']=$content;
		
		$correct=$row['CorrectAnswer'];
		//$_SESSION['correct']=$correct;
		
		$correct1=$row['False1'];
		//$_SESSION['correct1']=$correct1;
		
		$correct2=$row['False2'];
		//$_SESSION['correct2']=$correct2;
		
		$correct3=$row['False3'];
		//$_SESSION['correct3']=$correct3;
		
		$stage=$row['Level'];
		//$_SESSION['stage']=$stage;
		
		$type=$row['Type'];
		//$_SESSION['type']=$type;
		
		$row = mysqli_fetch_array($result);
		
?>
<tbody>
<tr>
<td data-label="ID"><?php echo $id;?> </td>
<td data-label="Ερώτηση"><?php echo $content;?> </td>
<td data-label="Σωστή Απάντηση"><?php echo $correct;?> </td>
<td data-label="Λάθος Απάντηση"> <?php echo $correct1;?> </td>
<td data-label="Λάθος Απάντηση"> <?php echo $correct2;?> </td>
<td data-label="Λάθος Απάντηση"> <?php echo $correct3;?> </td>
<td data-label="Επίπεδο Δυσκολίας"><?php  echo $stage; ?></td>
<td data-label="Τύπος Ερώτησης"><?php  echo $type; ?></td>
</tr>
</tbody>

<?php 
	}
$i++;	
?>

</table>	
<br><br><br>

</main>

<aside></aside>
<section></section>

<footer style="color:#ffffff"> 
 Σχεδίαση Ιστοσελίδας: Κυριάκος Αλεβίζος <br>
 Επικοινωνία:<a href="mailto:kiriakosalev13@gmail.com" style="color:#ffffff"> Email me here</a>
</footer>

</div>
</body>
</html>