<?php

include ('../../../functions_php/answerCorretionCollection.php');

//userAnswers
//1.1
$a1_1_1 = strtoupper($_POST['a1_1_1']);
$a1_1_2 = strtoupper($_POST['a1_1_2']);
$a1_1_3 = strtoupper($_POST['a1_1_3']);
$a1_1_4 = strtoupper($_POST['a1_1_4']);
$a1_1_5 = strtoupper($_POST['a1_1_5']);
$a1_1_6 = strtoupper($_POST['a1_1_6']);
$a1_1_7 = strtoupper($_POST['a1_1_7']);

//1.2
$a1_2_1 = strtoupper($_POST['a1_2_1']);
$a1_2_2 = strtoupper($_POST['a1_2_2']);
$a1_2_3 = strtoupper($_POST['a1_2_3']);
$a1_2_4 = strtoupper($_POST['a1_2_4']);
$a1_2_5 = strtoupper($_POST['a1_2_5']);
$a1_2_6 = strtoupper($_POST['a1_2_6']);
$a1_2_7 = strtoupper($_POST['a1_2_7']);
$a1_2_8 = strtoupper($_POST['a1_2_8']);

//1.3
$a1_3_1 = strtoupper($_POST['a1_3_1']);
$a1_3_2 = strtoupper($_POST['a1_3_2']);
$a1_3_3 = strtoupper($_POST['a1_3_3']);
$a1_3_4 = strtoupper($_POST['a1_3_4']);
$a1_3_5 = strtoupper($_POST['a1_3_5']);


//correctAnswers
//1.1
$a1_1_1_A = strtoupper($_POST['a1_1_1_A']);
$a1_1_2_A = strtoupper($_POST['a1_1_2_A']);
$a1_1_3_A = strtoupper($_POST['a1_1_3_A']);
$a1_1_4_A = strtoupper($_POST['a1_1_4_A']);
$a1_1_5_A = strtoupper($_POST['a1_1_5_A']);
$a1_1_6_A = strtoupper($_POST['a1_1_6_A']);
$a1_1_7_A = strtoupper($_POST['a1_1_7_A']);

//1.2
$a1_2_1_A = strtoupper($_POST['a1_2_1_A']);
$a1_2_2_A = strtoupper($_POST['a1_2_2_A']);
$a1_2_3_A = strtoupper($_POST['a1_2_3_A']);
$a1_2_4_A = strtoupper($_POST['a1_2_4_A']);
$a1_2_5_A = strtoupper($_POST['a1_2_5_A']);
$a1_2_6_A = strtoupper($_POST['a1_2_6_A']);
$a1_2_7_A = strtoupper($_POST['a1_2_7_A']);
$a1_2_8_A = strtoupper($_POST['a1_2_8_A']);

//1.3
$a1_3_1_A = strtoupper($_POST['a1_3_1_A']);
$a1_3_2_A = strtoupper($_POST['a1_3_2_A']);
$a1_3_3_A = strtoupper($_POST['a1_3_3_A']);
$a1_3_4_A = strtoupper($_POST['a1_3_4_A']);
$a1_3_5_A = strtoupper($_POST['a1_3_5_A']);


//Determine marks recevied by user

$mark = 2;
$correct_Q1 = 0;
$correct_Q2 = 0;
$correct_Q3 = 0;

if ($a1_1_1 == $a1_1_1_A)
{
	echo "
	<script>
	$('#1_1_1').after(' ✔✔');
	$('#1_1_1').css('border', '2px solid #4CAF50');
	</script>
	";

	$correct_Q1+=$mark;
}
else
{
	echo "
	<script>
	$('#1_1_1').after(' ✘✘<br> Correct is : <b>$a1_1_1_A</b>');
	$('#1_1_1').css('border', '2px solid #f44336');
	</script>
	";

}

if ($a1_1_2 == $a1_1_2_A)
{
	echo "
	<script>
	$('#1_1_2').after(' ✔✔');
	$('#1_1_2').css('border', '2px solid #4CAF50');
	</script>
	";

	$correct_Q1+=$mark;
}
else
{
	echo "
	<script>
	$('#1_1_2').after(' ✘✘<br> Correct is : <b>$a1_1_2_A</b>');
	$('#1_1_2').css('border', '2px solid #f44336');
	</script>
	";

}

if ($a1_1_3 == $a1_1_3_A)
{
	echo "
	<script>
	$('#1_1_3').after(' ✔✔');
	$('#1_1_3').css('border', '2px solid #4CAF50');
	</script>
	";

	$correct_Q1+=$mark;
}
else
{
	echo "
	<script>
	$('#1_1_3').after(' ✘✘<br> Correct is : <b>$a1_1_3_A</b>');
	$('#1_1_3').css('border', '2px solid #f44336');
	</script>
	";

}

if ($a1_1_4 == $a1_1_4_A)
{
	echo "
	<script>
	$('#1_1_4').after(' ✔✔');
	$('#1_1_4').css('border', '2px solid #4CAF50');
	</script>
	";

	$correct_Q1+=$mark;
}
else
{
	echo "
	<script>
	$('#1_1_4').after(' ✘✘<br> Correct is : <b>$a1_1_4_A</b>');
	$('#1_1_4').css('border', '2px solid #f44336');
	</script>
	";

}


if ($a1_1_5 == $a1_1_5_A)
{
	echo "
	<script>
	$('#1_1_5').after(' ✔✔');
	$('#1_1_5').css('border', '2px solid #4CAF50');
	</script>
	";

	$correct_Q1+=$mark;
}
else
{
	echo "
	<script>
	$('#1_1_5').after(' ✘✘<br> Correct is : <b>$a1_1_5_A</b>');
	$('#1_1_5').css('border', '2px solid #f44336');
	</script>
	";

}

if ($a1_1_6 == $a1_1_6_A)
{
	echo "
	<script>
	$('#1_1_6').after(' ✔✔');
	$('#1_1_6').css('border', '2px solid #4CAF50');
	</script>
	";

	$correct_Q1+=$mark;
}
else
{
	echo "
	<script>
	$('#1_1_6').after(' ✘✘<br> Correct is : <b>$a1_1_6_A</b>');
	$('#1_1_6').css('border', '2px solid #f44336');
	</script>
	";

}

if ($a1_1_7 == $a1_1_7_A)
{
	echo "
	<script>
	$('#1_1_7').after(' ✔✔');
	$('#1_1_7').css('border', '2px solid #4CAF50');
	</script>
	";

	$correct_Q1+=$mark;
}
else
{
	echo "
	<script>
	$('#1_1_7').after(' ✘✘<br> Correct is : <b>$a1_1_7_A</b>');
	$('#1_1_7').css('border', '2px solid #f44336');
	</script>
	";

}





if ($a1_2_1 == $a1_2_1_A)
{
	echo "
	<script>
	$('#1_2_1').after(' ✔✔');
	$('#1_2_1').css('border', '2px solid #4CAF50');
	</script>
	";

	$correct_Q2+=$mark;
}
else
{
	echo "
	<script>
	$('#1_2_1').after(' ✘✘<br> Correct is : <b>$a1_2_1_A</b>');
	$('#1_2_1').css('border', '2px solid #f44336');
	</script>
	";

}

if ($a1_2_2 == $a1_2_2_A)
{
	echo "
	<script>
	$('#1_2_2').after(' ✔✔');
	$('#1_2_2').css('border', '2px solid #4CAF50');
	</script>
	";

	$correct_Q2+=$mark;
}
else
{
	echo "
	<script>
	$('#1_2_2').after(' ✘✘<br> Correct is : <b>$a1_2_2_A</b>');
	$('#1_2_2').css('border', '2px solid #f44336');
	</script>
	";

}

if ($a1_2_3 == $a1_2_3_A)
{
	echo "
	<script>
	$('#1_2_3').after(' ✔✔');
	$('#1_2_3').css('border', '2px solid #4CAF50');
	</script>
	";

	$correct_Q2+=$mark;
}
else
{
	echo "
	<script>
	$('#1_2_3').after(' ✘✘<br> Correct is : <b>$a1_2_3_A</b>');
	$('#1_2_3').css('border', '2px solid #f44336');
	</script>
	";

}

if ($a1_2_4 == $a1_2_4_A)
{
	echo "
	<script>
	$('#1_2_4').after(' ✔✔');
	$('#1_2_4').css('border', '2px solid #4CAF50');
	</script>
	";

	$correct_Q2+=$mark;
}
else
{
	echo "
	<script>
	$('#1_2_4').after(' ✘✘<br> Correct is : <b>$a1_2_4_A</b>');
	$('#1_2_4').css('border', '2px solid #f44336');
	</script>
	";

}

if ($a1_2_5 == $a1_2_5_A)
{
	echo "
	<script>
	$('#1_2_5').after(' ✔✔');
	$('#1_2_5').css('border', '2px solid #4CAF50');
	</script>
	";

	$correct_Q2+=$mark;
}
else
{
	echo "
	<script>
	$('#1_2_5').after(' ✘✘<br> Correct is : <b>$a1_2_5_A</b>');
	$('#1_2_5').css('border', '2px solid #f44336');
	</script>
	";

}
if ($a1_2_6== $a1_2_6_A)
{
	echo "
	<script>
	$('#1_2_6').after(' ✔✔');
	$('#1_2_6').css('border', '2px solid #4CAF50');
	</script>
	";

	$correct_Q2+=$mark;
}
else
{
	echo "
	<script>
	$('#1_2_6').after(' ✘✘<br> Correct is : <b>$a1_2_6_A</b>');
	$('#1_2_6').css('border', '2px solid #f44336');
	</script>
	";

}

if ($a1_2_7 == $a1_2_7_A)
{
	echo "
	<script>
	$('#1_2_7').after(' ✔✔');
	$('#1_2_7').css('border', '2px solid #4CAF50');
	</script>
	";

	$correct_Q2+=$mark;
}
else
{
	echo "
	<script>
	$('#1_2_7').after(' ✘✘<br> Correct is : <b>$a1_2_7_A</b>');
	$('#1_2_7').css('border', '2px solid #f44336');
	</script>
	";

}
if ($a1_2_8 == $a1_2_8_A)
{
	echo "
	<script>
	$('#1_2_8').after(' ✔✔');
	$('#1_2_8').css('border', '2px solid #4CAF50');
	</script>
	";

	$correct_Q2+=$mark;
}
else
{
	echo "
	<script>
	$('#1_2_8').after(' ✘✘<br> Correct is : <b>$a1_2_8_A</b>');
	$('#1_2_8').css('border', '2px solid #f44336');
	</script>
	";

}

if (answerCorrection::ft_grade_user($a1_3_1, $a1_3_1_A, 2) == 2)
{
		echo "
	<script>
	$('#1_3_1').after(' ✔✔');
	$('#1_3_1').css('border', '2px solid #4CAF50');
	</script>
	";
	$correct_Q3+=$mark;
}
else
{
	echo "
	<script>
	$('#1_3_1').after(' ✘✘<br> Correct is : <b>$a1_3_1_A</b>');
	$('#1_3_1').css('border', '2px solid #f44336');
	</script>
	";
}

if (answerCorrection::ft_grade_user($a1_3_2, $a1_3_2_A, 2) == 2)
{
		echo "
	<script>
	$('#1_3_2').after(' ✔✔');
	$('#1_3_2').css('border', '2px solid #4CAF50');
	</script>
	";
	$correct_Q3+=$mark;
}
else
{
	echo "
	<script>
	$('#1_3_2').after(' ✘✘<br> Correct is : <b>$a1_3_2_A</b>');
	$('#1_3_2').css('border', '2px solid #f44336');
	</script>
	";
}

if (answerCorrection::ft_grade_user($a1_3_3, $a1_3_3_A, 2) == 2)
{
		echo "
	<script>
	$('#1_3_3').after(' ✔✔');
	$('#1_3_3').css('border', '2px solid #4CAF50');
	</script>
	";
	$correct_Q3+=$mark;
}
else
{
	echo "
	<script>
	$('#1_3_3').after(' ✘✘<br> Correct is : <b>$a1_3_3_A</b>');
	$('#1_3_3').css('border', '2px solid #f44336');
	</script>
	";
}

if (answerCorrection::ft_grade_user($a1_3_4, $a1_3_4_A, 2) == 2)
{
		echo "
	<script>
	$('#1_3_4').after(' ✔✔');
	$('#1_3_4').css('border', '2px solid #4CAF50');
	</script>
	";
	$correct_Q3+=$mark;
}
else
{
	echo "
	<script>
	$('#1_3_4').after(' ✘✘<br> Correct is : <b>$a1_3_4_A</b>');
	$('#1_3_4').css('border', '2px solid #f44336');
	</script>
	";
}

if (answerCorrection::ft_grade_user($a1_3_5, $a1_3_5_A, 2) == 2)
{
		echo "
	<script>
	$('#1_3_5').after(' ✔✔');
	$('#1_3_5').css('border', '2px solid #4CAF50');
	</script>
	";
	$correct_Q3+=$mark;
}
else
{
	echo "
	<script>
	$('#1_3_5').after(' ✘✘<br> Correct is : <b>$a1_3_5_A</b>');
	$('#1_3_5').css('border', '2px solid #f44336');
	</script>
	";
}

$total_1_1 = 20;
$total_1_2 = 10;
$total_1_3 = 10;

$totalMarksAttained = $correct_Q1 + $correct_Q2 + $correct_Q3; 
$totalMarkPercengtage = round($totalMarksAttained / 40 * 100, 0);

echo 
"
<div class='modal-body'>
        <div class='qMark'><b>1.1 </b>";echo passShower($correct_Q1, $total_1_1); echo " / $total_1_1</div>
        <div class='qMark'><b>1.2 </b>";echo passShower($correct_Q2, $total_1_2); echo " / 10</div>
        <div class='qMark'><b>1.3 </b>";echo passShower($correct_Q3, $total_1_3); echo " / 10</div>
        
        <div class='Mark_absolute'>
          $totalMarkPercengtage%
        </div>

        <div class='totalMark'><b>TOTAL</b> : ";echo passShower($totalMarksAttained, 40); echo " / 40</div>
        <div class='feedback_section'>Feedback</div>
        <div class='feedback_report'>You did well for your multiple choice question.</div>

</div>

";


function passShower($mark_user_got, $out_of)
{

	$percentage = $mark_user_got / $out_of * 100;

	if ($percentage <= 29)
		echo "<span class='bad'>$mark_user_got</span>";
	if ($percentage >= 30 && $percentage <=49)
		echo "<span class='okay'>$mark_user_got</span>";
	if ($percentage >=50)
		echo "<span class='good'>$mark_user_got</span>";
}

	require_once('../../../includes/config.php');

	$username = $_POST['username'];
	$exam_ID = $_POST['exam_ID'];

	$updateTable = $conn->prepare("UPDATE `scp_examTakers` SET `marks_attained` = '$totalMarksAttained' WHERE `scp_examTakers`.`exam_TakerUsername` = '$username' AND `scp_examTakers`.`exam_ID` = '$exam_ID' ");
    $updateTable->execute();

    if ($updateTable)
    	{
      		$getTotalScore = $conn->prepare("SELECT * FROM `scp_users`  WHERE username = '$username'");
      		$getTotalScore->execute();
      		$rowScore = $getTotalScore->fetch(PDO::FETCH_ASSOC);

      		$CurrentScore = $rowScore['user_xp'];
      		$UpdateXpScore = $CurrentScore+=$totalMarksAttained;

      		$updateQuery = $conn->prepare("UPDATE scp_users SET user_xp='$UpdateXpScore' WHERE username = '$username'");
      		$updateQuery->execute();

      		


    	}

?>