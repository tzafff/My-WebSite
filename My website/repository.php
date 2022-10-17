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
	<li> <a href="index2.php"> ΑΡΧΙΚΗ </a> </li>
	<li> <a href="basics2.php"> ΤΟ ΘΕΜΑ ΜΟΥ </a> </li>
	<li> <a href="more2.php"> ΠΕΡΙΣΣΟΤΕΡΑ </a> </li>
	<li> <a href="quiz2.php">  QUIZ</a> </li>
	<li> <a href="logout.php"> ΕΞΟΔΟΣ</a> </li>
	</ul>
</nav>


<main> 
<h2> Αποθετήριο Γενικών Ερωτήσεων QUIZ</h2><br><br>
<table class="table" >
<thead>
<th>ID</th>
<th>Ερώτηση</th>
<th>Επίπεδο Δυσκολίας</th>
<th>Τύπος Ερώτησης</th>
<th>Διαγραφή</th>
</thead>
<?php
	
	$i=1;
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"quiz");
	$result=mysqli_query($con,"SELECT * from equestions");
	$row = mysqli_fetch_array($result);
	while ($row)
	{
		$id=$row['ID']; 
		$content=$row['content'];
		$stage=$row['Stage']; 
		$type=$row['type']; 
		$row = mysqli_fetch_array($result);
?>

<tbody>
<tr>
<td data-label="ID"><?php echo $id;?> </td>
<td data-label="Ερώτηση"><?php echo $content;?> </td>
<td data-label="Επίπεδο Δυσκολίας"> <?php echo $stage;?> </td>
<td data-label="Τύπος Ερώτησης"><?php  echo $type; ?></td>
	<td data-label="Διαγραφή"> <a href="repository.php?delete=<?php echo $id;?>" onclick="return confirm('Είσαι σίγουρος?');">Διαγραφή </a> </td>
</tr>
</tbody>
<?php 
	}
$i++;
if(isset($_GET['delete']))
{
	$delete_id =$_GET['delete'];
	if($delete_id==1)
	{
		echo "Δεν μπορείς να διαγράψεις την 1η ερώτηση";
	}
	else
	{
		mysqli_query($con,"DELETE FROM answers WHERE q_id='$delete_id'");
		mysqli_query($con,"DELETE FROM equestions WHERE ID='$delete_id'");	
		echo "Επιτυχής Διαγραφή ερώτησης";
		
	}
}
	
?>
</table>
<br><a href="repository.php" align="center"> Refresh </a>	
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
