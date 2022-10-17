<?php
session_start();

$con = mysqli_connect("localhost","root","");

if (!$con)
{
echo "problem in the connection".mysqli_error();
}

if(!(isset($_SESSION['username'])))
{
	header ("location: index.html");
}
	
?>

<html>
<form name="quiz" method="post" action="checkresults.php">
<table>
<tr><td><p>a)<?php include("true_false.php"); ?></p></td></tr> <br/>
	
<tr><td align="left"><p><?php $sql_1="SELECT content FROM answers WHERE ID='1' and q_id = '1'";
			$result1 = mysqli_query($con, $sql_1);
			$num_results1=mysqli_num_rows($result1);
				$row1=mysqli_fetch_array($result1);
				echo $row1['content'];?><input type="radio" name="radio_choice_a" value="radio_choice_a1"></p></td></tr> <br/> 

<tr><td align="left"><p><?php $sql_1="SELECT content FROM answers WHERE ID='2' and q_id = '1'";
			$result1 = mysqli_query($con, $sql_1);
			$num_results1=mysqli_num_rows($result1);
				$row1=mysqli_fetch_array($result1);
				echo $row1['content'];?><input type="radio" name="radio_choice_a" value="radio_choice_a2"></p></td></tr> <br/>
</table>


<table>
<tr><td><p>b)<?php include("true_false2.php");?></p></td></tr> <br/>


<tr><td align="left"><p><?php $sql_1="SELECT content FROM answers WHERE ID='1' and q_id = '1'";
			$result1 = mysqli_query($con, $sql_1);
			$num_results1=mysqli_num_rows($result1);
				$row1=mysqli_fetch_array($result1);
				echo $row1['content'];?><input type="radio" name="radio_choice_b" value="radio_choice_b1"></p></td></tr> <br/>
<tr><td align="left"><p><?php $sql_1="SELECT content FROM answers WHERE ID='2' and q_id = '1'";
			$result1 = mysqli_query($con, $sql_1);
			$num_results1=mysqli_num_rows($result1);
				$row1=mysqli_fetch_array($result1);
				echo $row1['content'];?><input type="radio" name="radio_choice_b" value="radio_choice_b2"></p></td></tr> <br/>
</table>


<table>
<tr><td align="left"><p>c)<?php include("multi_radio.php");?></p></td></tr> <br/>

<tr><td align="left"><p><input type="radio" name="radio_choice_c" value="radio_choice_c1"> <?php $sql_1="SELECT content FROM answers WHERE q_id ='$x' and Stage = '".$userid."' and a_id='$x' ";
			$result1 = mysqli_query($con, $sql_1);
			$num_results1=mysqli_num_rows($result1);
				$row1=mysqli_fetch_array($result1);
				echo $row1['content'];?></p></td></tr><br/>

<tr><td align="left"><p><input type="radio" name="radio_choice_c" value="radio_choice_c2"><?php $sql_1="SELECT content FROM answers WHERE q_id ='$x' and Stage = '".$userid."' and a_id=('$x'+1)";
			$result1 = mysqli_query($con, $sql_1);
			$num_results1=mysqli_num_rows($result1);
				$row1=mysqli_fetch_array($result1);		
				echo $row1['content'];?></p></td></tr><br/>
				
<tr><td align="left"><p><input type="radio" name="radio_choice_c" value="radio_choice_c3"> <?php $sql_1="SELECT content FROM answers WHERE q_id ='$x' and Stage = '".$userid."' and a_id=('$x'+2) ";
			$result1 = mysqli_query($con, $sql_1);
			$num_results1=mysqli_num_rows($result1);
				$row1=mysqli_fetch_array($result1);
				echo $row1['content'];
				?></p></td></tr> <br/>
				
<tr><td align="left"><p><input type="radio" name="radio_choice_c" value="radio_choice_c4"> <?php $sql_1="SELECT content FROM answers WHERE q_id ='$x' and Stage = '".$userid."' and a_id=('$x'+3) ";
			$result1 = mysqli_query($con, $sql_1);
			$num_results1=mysqli_num_rows($result1);
				$row1=mysqli_fetch_array($result1);
				echo $row1['content'];?><br/>
</table>

<table>
<tr><td align="left"><p>d)<?php include("multi_checkbox.php");?></p></td></tr><br/> 
<tr><td align="left"><p><input type="checkbox" name="checkbox_1[]" id="chechbox_d1" value="checkbox_option_1"> <?php $sql_1="SELECT content FROM answers WHERE q_id ='$x' and Stage = '".$userid."' and a_id='$x'";
			$result1 = mysqli_query($con, $sql_1);
			$num_results1=mysqli_num_rows($result1);
				$row1=mysqli_fetch_array($result1);
				echo $row1['content'];?></p></td></tr><br/>
<tr><td align="left"><p><input type="checkbox" name="checkbox_2[]" id="chechbox_d2" value="checkbox_option_2"> <?php $sql_1="SELECT content FROM answers WHERE q_id ='$x' and Stage = '".$userid."' and a_id=$x+1";
			$result1 = mysqli_query($con, $sql_1);
			$num_results1=mysqli_num_rows($result1);
				$row1=mysqli_fetch_array($result1);
				echo $row1['content'];?></p></td></tr><br/>
<tr><td align="left"><p><input type="checkbox" name="checkbox_3[]" id="chechbox_d3" value="checkbox_option_3"> <?php $sql_1="SELECT content FROM answers WHERE q_id ='$x' and Stage = '".$userid."' and a_id=$x+2";
			$result1 = mysqli_query($con, $sql_1);
			$num_results1=mysqli_num_rows($result1);
				$row1=mysqli_fetch_array($result1);
				echo $row1['content'];?></p></td></tr><br/>
<tr><td align="left"><p><input type="checkbox" name="checkbox_4[]" id="chechbox_d4" value="checkbox_option_4"> <?php $sql_1="SELECT content FROM answers WHERE q_id ='$x' and Stage = '".$userid."' and a_id=$x+3";
			$result1 = mysqli_query($con, $sql_1);
			$num_results1=mysqli_num_rows($result1);
				$row1=mysqli_fetch_array($result1);
				echo $row1['content'];?> </p></td></tr><br/>
</table>

<table>
<!--extends-->
<tr><td align="left"><p>e)<?php include("text_question.php");?> <input type="text" name="answer"/></p></td></tr><br/><br/><br/><br/><br/>
</table>

<table>
<tr><td align="left"><p><input type="submit" name="submit_quiz" value="Υποβολή"/></p></td></tr><br/><br/>
</table>

</html>





