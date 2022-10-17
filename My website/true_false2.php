<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"quiz"); /*easy(Σωστο) ,medium(Σωστο) ,hard(Σωστο)*/
	
	$userid = intval($_GET['userid']);
	$_SESSION['level']=$userid;
	//echo "the userid is ".$userid;
	//echo "<br>";
	
	$s="SELECT COUNT(id) AS total from equestions";
	$re=mysqli_query($con,$s);
	$values=mysqli_fetch_assoc($re);
	$num_rows=$values['total'];
	//echo "rows".$num_rows;
	//echo "<br>";
	//echo "to x einai" .$x; echo "<br>";
	
	
	$a=rand(1,$num_rows);
	$y=$a;
	$sql="SELECT content FROM equestions WHERE ID='$a' and Stage='$userid' and type='TF'";
	$result = mysqli_query($con, $sql);
	$row=mysqli_fetch_array($result);
	
	while(mysqli_num_rows($result)==0 || $x==$y)
	{	
		$sql="SELECT content FROM equestions WHERE ID='$a' and Stage='$userid' and type='TF'";
		$result = mysqli_query($con, $sql);
		$row=mysqli_fetch_array($result);
		//echo "the rand while is".$a;
		$y=$a;
		$a=rand(1,$num_rows);
		
	}
	//echo "<br>";
	//echo "to id einai ".$x;
	//echo "the rand is " .$a; echo "<br>"; 
	//echo "to y meta  " .$y; echo "<br>";
	//echo "to x einai " .$x; echo "<br>";
	echo $row['content'];
	
	$_SESSION['q2']=$y;
	
	
?>