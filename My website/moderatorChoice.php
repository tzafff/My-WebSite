<?php 
session_start();

$con = mysqli_connect("localhost","root","");

	$id=$_POST['id']; //id apo proxeiro apothetirio tou pinaka usersquestions
	echo " to id einai" .$id; echo "<br>";
	$_SESSION['id']=$id;
	mysqli_select_db($con,"sign_up");
	$result=mysqli_query($con,"SELECT * from usersquestions where ID='$id'");
	$row = mysqli_fetch_array($result);
	
	while ($row)
	{
		echo $row['ID'];
		echo " Ερώτηση:" .$row['Question']; echo " <br> ";
		$content=$row['Question'];
		//$_SESSION['content']=$content;
		
		echo " Σωστή Απάντηση:" .$row['CorrectAnswer']; echo " <br> ";
		$correct=$row['CorrectAnswer'];
		//$_SESSION['correct']=$correct;
		
		echo " Λάθος Απάντηση:" .$row['False1']; echo " <br> ";
		$correct1=$row['False1'];
		//$_SESSION['correct1']=$correct1;
		
		echo " Λάθος Απάντηση:" .$row['False2']; echo " <br> ";
		$correct2=$row['False2'];
		//$_SESSION['correct2']=$correct2;
		
		echo " Λάθος Απάντηση:" .$row['False3'];echo " <br> ";
		$correct3=$row['False3'];
		//$_SESSION['correct3']=$correct3;
		
		echo " Επίπεδο Δυσκολίας:" .$row['Level'];echo " <br> ";
		$stage=$row['Level'];
		//$_SESSION['stage']=$stage;
		
		echo " Τύπος Ερώτησης:" .$row['Type']; echo " <br> ";
		$type=$row['Type'];
		//$_SESSION['type']=$type;
			
		$row = mysqli_fetch_array($result);
		echo "<br>";
	}

	
	$value=$_POST['choice'];
	echo "to value einai ".$value;echo " <br> ";
	if($type==1)
	{
		$type="TF";
	}
	else if($type==3)
	{
		$type="Radio";
	}
	else if($type==4)
	{
		$type="Checkbox";
	}
	else if($type==2)
	{
		$type="Text";
	}
	
	if($value==1)    //APODOXI ACCEPT ERWTISIS
	{	

		if($type=="TF")
		{
			if($correct=="true" || $correct=="TRUE")
			{
				$correct="radio_choice_a1";
				$correct1="radio_choice_b1";
			}
			else
			{
				$correct="radio_choice_a2";
				$correct1="radio_choice_b2";
			}
			
			mysqli_select_db($con,"quiz");
			$sql="SELECT COUNT(id) AS total from equestions";
			$result=mysqli_query($con,$sql);
			$values=mysqli_fetch_assoc($result);
			$num_rows=$values['total'];
			echo "num_rows ". $num_rows;
			$id=$num_rows+1;

			
			
			mysqli_query($con,"INSERT INTO equestions(ID,Stage,content,type,correct,correct1,correct2,correct3)
			VALUES('$id','$stage','$content','$type','$correct','$correct1','$correct2','$correct3')");
		}
		
		if($type=="Radio")
		{
			mysqli_select_db($con,"quiz");
			
			$answ=$correct; echo $answ;
			$answ1=$correct1; echo $answ1;
			$answ2=$correct2;echo $answ2;
			$answ3=$correct3;echo $answ3;
			
			
			$sql="SELECT COUNT(id) AS total from equestions";
			$result=mysqli_query($con,$sql);
			$values=mysqli_fetch_assoc($result);
			$num_rows=$values['total'];
			echo "num_rows ". $num_rows;
			$id=$num_rows+1;
			
			$correct="radio_choice_a1";
			
			mysqli_query($con,"INSERT INTO equestions(ID,Stage,content,type,correct)
			VALUES('$id','$stage','$content','$type','$correct')");
				
			$result=mysqli_query($con,"SELECT ID from equestions where content='$content'");
			$row = mysqli_fetch_array($result);
			$num_rows=$row['ID'];
			
			
			mysqli_query($con,"INSERT INTO answers(q_id,content,Stage,a_id)
			VALUES('$num_rows','$answ','$stage','$num_rows')");
			
			$num=$num_rows+1;
			mysqli_query($con,"INSERT INTO answers(q_id,content,Stage,a_id)
			VALUES('$num_rows','$answ1','$stage','$num')");
			
			$num1=$num_rows+2;
			mysqli_query($con,"INSERT INTO answers(q_id,content,Stage,a_id)
			VALUES('$num_rows','$answ2','$stage','$num1')");
			
			$num2=$num_rows+3;
			mysqli_query($con,"INSERT INTO answers(q_id,content,Stage,a_id)
			VALUES('$num_rows','$answ3','$stage','$num2')");
		}
		
		if($type=="Checkbox")
		{
			echo "eimai CHECKBOX";
			mysqli_select_db($con,"quiz");
			
			$answ=$correct; echo $answ;
			$answ1=$correct1; echo $answ1;
			$answ2=$correct2;echo $answ2;
			$answ3=$correct3;echo $answ3;
			
			
			$sql="SELECT COUNT(id) AS total from equestions";
			$result=mysqli_query($con,$sql);
			$values=mysqli_fetch_assoc($result);
			$num_rows=$values['total'];
			echo "num_rows ". $num_rows;
			$id=$num_rows+1;
			
			$correct="checkbox_option_1";
			
			mysqli_query($con,"INSERT INTO equestions(ID,Stage,content,type,correct)
			VALUES('$id','$stage','$content','$type','$correct')");
				
			$result=mysqli_query($con,"SELECT ID from equestions where content='$content'");
			$row = mysqli_fetch_array($result);
			$num_rows=$row['ID'];
			
			
			mysqli_query($con,"INSERT INTO answers(q_id,content,Stage,a_id)
			VALUES('$num_rows','$answ','$stage','$num_rows')");
			
			$num=$num_rows+1;
			mysqli_query($con,"INSERT INTO answers(q_id,content,Stage,a_id)
			VALUES('$num_rows','$answ1','$stage','$num')");
			
			$num1=$num_rows+2;
			mysqli_query($con,"INSERT INTO answers(q_id,content,Stage,a_id)
			VALUES('$num_rows','$answ2','$stage','$num1')");
			
			$num2=$num_rows+3;
			mysqli_query($con,"INSERT INTO answers(q_id,content,Stage,a_id)
			VALUES('$num_rows','$answ3','$stage','$num2')");
		}
		
		if($type=="Text")
		{
			mysqli_select_db($con,"quiz");
			$sql="SELECT COUNT(id) AS total from equestions";
			$result=mysqli_query($con,$sql);
			$values=mysqli_fetch_assoc($result);
			$num_rows=$values['total'];
			echo "num_rows ". $num_rows;
			$id=$num_rows+1;
			
			mysqli_query($con,"INSERT INTO equestions(ID,Stage,content,type,correct)
			VALUES('$id','$stage','$content','$type','$correct')");
			
			
			$result=mysqli_query($con,"SELECT ID from equestions where content='$content'");
			$row = mysqli_fetch_array($result);
			$num_rows=$row['ID'];
			
			mysqli_query($con,"INSERT INTO answers(q_id,content,Stage,a_id)
			VALUES('$num_rows','$correct','$stage','0')");
		}
		header ("location: repository.php");
	}
	if($value==2) // AΠΟΡΡΙΨΗ ΕΡΩΤΗΣΗΣ
	{
		mysqli_select_db($con,"sign_up");
		mysqli_query($con,"DELETE FROM usersquestions where ID='$id'");
		header ("location: moderatorApp.php");
	}
	
	if($value==3) // ΤΡΟΠΟΠΟΙΗΣΗ ΕΡΩΤΗΣΗΣ
	{
		header ("location: change_question.php");
	}

?>

