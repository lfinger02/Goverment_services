<?php

		require_once('../includes/config.php');
		$pastpaper_year = $_POST['pastpaper_year'];
    $exam_name = $_POST['exam_name'];

		
		$query = $conn->prepare("SELECT * FROM `$exam_name` WHERE exam_year = '$pastpaper_year'");
        $query->execute();
        
        while ($results = $query->fetch(PDO::FETCH_ASSOC))
        {
        	$exam_ID   	  = $results['exam_ID'];
        	$exam_subject = $results['exam_subject'];
        	$exam_name2 	  = $results['exam_name'];
        	$exam_marks   = $results['exam_marks'];
        	$exam_year	  = $results['exam_year'];
        	$exam_time	  = $results['exam_time'];
        	$exam_icon	  = $results['exam_icon'];
        	$exam_link	  = $results['exam_link'];

         
          $username =$_SESSION['userLoggedIn'];

          //$name = 'business_studies';
          $fetch_query = $conn->prepare("SELECT * FROM `scp_examtakers` WHERE exam_TakerUsername = '$username' AND exam_ID = '$exam_ID' AND exam_name = '$exam_name'");
          $fetch_query->execute();

          $exam_try = $fetch_query->fetch(PDO::FETCH_ASSOC);

          if ($exam_try == 0)
          { 
        	echo 
        	"
<div class='challenge'>
   <a href='#' class='object_block_3'>
   <img src='images/subject_icons/$exam_icon' class='lock'>    <span class='question1'>$exam_name2</span>
   </a> 
   <div class='information'>
      <span class='name'>$exam_subject</span><br>
      <span class='school'>MARKS: <b>$exam_marks</b></span><br>
      <span class='school'>$exam_year</span><br>
      <span class='ExamTime'>TIME: $exam_time mins</span>
      <a class='accept_challenge' href='exams/$exam_link?exam_ID=$exam_ID&user=".$username."'>Take test</a>
   </div>
</div>
        	";
        }
        else
        {

          $DateExamTaken   = $exam_try['exam_TakerDate'];
          $marksLearnerGot = (int)$exam_try['marks_attained'];

          $PassMark = $marksLearnerGot / $exam_marks * 100;
          $passOrFail = "";


          if($PassMark >= 50 && $PassMark <= 79) {
                $passOrFail = "<span class='status' style='
                                background-color: #8BC34A;
                                padding: 3px;
                                color: #fff;
                              '>Passed</span>";

            }else if($PassMark >= 80 && $PassMark <= 100) {
                $passOrFail = "<span class='status' style='
                               background-color: #8BC34A;
                               padding: 3px;
                               color: #fff;
                               '>Distinction</span>";
            }else if($PassMark >= 0 && $PassMark <= 49) {
                $passOrFail = "<span class='status' style='
                               background-color: #F44336;
                               padding: 3px;
                               color: #fff;
                               '>Failed</span>";
                             }


          echo "<div class='challenge'>
   <a href='#' class='object_block_3'>
   <img src='images/subject_icons/business.svg' class='lock'><span class='question1'>$exam_name2
   </span>
   </a> 
   <div class='information'>$passOrFail</span></span><br>
      <span class='school'>$marksLearnerGot/$exam_marks</span><br>
      <span class='school'>Taken: $DateExamTaken</span><br>
      <a class='style-leader' data-toggle='modal' data-target='#Leaderboard' href='#'>Leaderboard<img src='images/icons/group.svg' class='leader'></a>
      <a class='style-leader report' data-toggle='modal' data-target='#report' href='#'>My Report</a>
   </div>
</div>";

echo 
"
  <div class='modal fade' id='Leaderboard' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog Leaderboard' role='document'>
    <div class='modal-content Leaderboard'>
      <div class='modal-header Leaderboard'>
        <img src='images/icons/trophy.svg' class='leader'>
        <h5 class='modal-title Leaderboard' id='exampleModalLabel'>Leaderboard - $exam_name2</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body Leaderboard'>
        
        <div class='scroll_learners'>";

      $fetch_ExamLeaderboard = $conn->prepare("SELECT * FROM `scp_examtakers` WHERE `scp_examtakers`.`exam_ID` = '$exam_ID' AND `scp_examtakers`.exam_name = '$exam_name' ORDER BY marks_attained desc LIMIT 100");
      $fetch_ExamLeaderboard->execute();

      $exameePosition = 0;
      while ($LeaderboardFetched = $fetch_ExamLeaderboard->fetch(PDO::FETCH_ASSOC))
      {

            $username       = $LeaderboardFetched['exam_TakerUsername'];
            $ExamsMarks     = $LeaderboardFetched['exam_marks'];
            $MarkObtained   = $LeaderboardFetched['marks_attained'];
            $exameePosition++;
            

            $fetchExameeDetails = $conn->prepare("SELECT * FROM `scp_users` WHERE username = '$username'");
            $fetchExameeDetails->execute();

            while ($fetchDetails = $fetchExameeDetails->fetch(PDO::FETCH_ASSOC))
            {

              $name         = $fetchDetails['name'];
              $surname      = $fetchDetails['surname'];
              $province     = $fetchDetails['province'];
              $profile      = ($fetchDetails['none'] = 'none' ? 'default' : $fetchDetails['none']);


              echo "<div class='test_leaderboard_container'>
              <div class='testTaker_profile_container'>
              <img class='testTaker_image' src='images/profile/$profile".'.png'."'>
              <div class='testTaker_position'>$exameePosition</div>
              </div>
              <div class='testTaker_personal_details'>
              <span class='info_name'>$name $surname</span>
              <br>
              <span class='info_Extra'>$province</span>
              </div>
              <div class='testTaker_Mark'>
              <div class='yourMark'>$MarkObtained</div>/<div class='testMark'>$ExamsMarks</div>
              </div>
              </div>";
            }
      }

  echo "</div>
      </div>
    </div>
  </div>
</div>
";
        }

    }

?>