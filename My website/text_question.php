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
	
	$userid = intval($_GET['userid']);
	$_SESSION['level']=$userid;
	//echo "the userid is ".$userid;
	//echo "<br>";
	
	
		$sql="SELECT content FROM equestions WHERE ID='$a' and Stage='$userid' and type='Text'";
		$result = mysqli_query($con, $sql);
		$row=mysqli_fetch_array($result);
	while(mysqli_num_rows($result)==0)
	{	
		$sql="SELECT content FROM equestions WHERE ID='$a' and Stage='$userid' and type='Text'";
		$result = mysqli_query($con, $sql);
		$row=mysqli_fetch_array($result);
		//echo "the rand is".$a;
		$x=$a;
		$a=rand(1,$num_rows);
		
	}
	//echo "<br>";
	//echo "to id einai ".$x;
	echo $row['content'];
	
	$_SESSION['q5']=$x;
	
?>