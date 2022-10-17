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
	
	$a=rand(1,$num_rows);
	//echo "the rand is".$a;
	
	
	$sql="SELECT content FROM equestions WHERE ID='$a' and Stage='$userid' and type='Radio'";
	$result = mysqli_query($con, $sql);
	$row=mysqli_fetch_array($result);
	$x=$a;
	
	while(mysqli_num_rows($result)==0)
	{	
		$sql="SELECT content FROM equestions WHERE ID='$a' and Stage='$userid' and type='Radio'";
		$result = mysqli_query($con, $sql);
		$row=mysqli_fetch_array($result);
		//echo "while rand ".$a;
		$x=$a;
		$a=rand(1,$num_rows);
		
	}
	//echo "<br>";
	//echo "to x einai ".$x;
	echo $row['content'];
	
	$_SESSION['q3']=$x;
	
	
?>
