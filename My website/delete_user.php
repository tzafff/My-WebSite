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


<main > 
<h2> Χρήστες</h2><br><br>
<table class="table">
<thead>
<tr>
<th>ID</th>
<th>Username</th>
<th>Κωδικός</th>
<th>Εmail</th>
<th>Επώνυμο</th>
<th>Όνομα</th>
<th>Ηλικία</th>
<th>Φύλλο</th>
<th>Ρόλος</th>
<th>Διαγραφή</th>
</thead>
</tr>
<?php
	
	$i=1;
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"sign_up");
	$result=mysqli_query($con,"SELECT * from newusers");
	$row = mysqli_fetch_array($result);
	while ($row)
	{
		$id=$row['ID']; 
		$username=$row['Username']; 
		$password=$row['Password'];
		$email=$row['Email'];
		$firstname=$row['Firstname'];
		$lastname=$row['Lastname'];
		$age=$row['Age'];
		$gender=$row['Gender'];
		$role=$row['Role']; 
		$row = mysqli_fetch_array($result);
?>
<tbody>
<tr>
<td data-label="ID"><?php echo $id;?> </td>
<td data-label="Username"> <?php echo $username;?> </td>
<td data-label="Κωδικός"> <?php echo $password;?> </td>
<td data-label="Εmail"> <?php echo $email;?> </td>
<td data-label="Επώνυμο"><?php echo $firstname;?> </td>
<td data-label="Όνομα"> <?php echo $lastname;?> </td>
<td data-label="Ηλικία"><?php  echo $age; ?></td>
<td data-label="Φύλλο"><?php echo $gender;?> </td>
<td data-label="Ρόλος"><?php  echo $role; ?></td>
	<td data-label="Διαγραφή"> <a href="delete_user.php?delete=<?php echo $id;?>" onclick="return confirm('Είσαι σίγουρος?');">Διαγραφή </a> </td>
</tr>
</tbody>
<?php 
	}
$i++;
if(isset($_GET['delete']))
{
	$delete_id =$_GET['delete'];
	mysqli_query($con,"DELETE FROM newusers WHERE ID='$delete_id'");	
	echo "Επιτυχής Διαγραφή Χρήστη";
	echo "<br>";echo "<br>";echo "<br>";
	//header("location: delete_user.php");
}
	
?>
</table>	
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
