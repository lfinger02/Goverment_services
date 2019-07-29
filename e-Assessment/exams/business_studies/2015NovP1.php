<?php

require_once('../../includes/config.php');


if(!isset($_SESSION["userLoggedIn"])) {
   header("Location: ../../index.php");
   
} else
   
   {
      $getID = $_GET['exam_ID'];
      $getUsername = $_GET['user'];
      

    $query = $conn->prepare("SELECT * FROM `scp_examtakers`  WHERE exam_TakerUsername = '$getUsername' AND exam_ID = '$getID' AND exam_name = 'Business Studies'");
    $query->execute();
    

    if($query->rowCount() == 0) {
      
    $fetch_weeklyExam = $conn->prepare("SELECT * FROM `business_studies`  WHERE exam_ID = '$getID'");
    $fetch_weeklyExam->execute();
    $exam = $fetch_weeklyExam->fetch(PDO::FETCH_ASSOC);

    $examName = $exam['exam_subject'];
    $examMarks = $exam['exam_marks'];
    $exam_name = $exam['exam_name'];
    $exam_TakenDate = date("jS F Y");
    $tempMark = 0;

    $updateTable = $conn->prepare("INSERT INTO `scp_examtakers` (`ID`, `exam_ID`, `exam_TakerUsername`, `exam_marks`, `marks_attained`, `exam_name`, `exam_TakerDate`) VALUES (NULL, :eID, :eTU, :eM, :ma, :eN, :eT)");

    $updateTable->bindParam(":eID", $getID);
    $updateTable->bindParam(":eTU", $getUsername);
    $updateTable->bindParam(":eM", $examMarks);
    $updateTable->bindParam(":ma", $tempMark);
    $updateTable->bindParam(":eN", $examName);
    $updateTable->bindParam(":eT", $exam_TakenDate);

    $updateTable->execute();

    if($updateTable) {

         echo "Updated scp_examtakers";

            
         } else {
            echo 'an error occured';
            //exit();
         }

    

    } else {
      
      echo "User exisit";
      $fetch_weeklyExam = $conn->prepare("SELECT * FROM `business_studies`  WHERE exam_ID = '$getID'");
      $fetch_weeklyExam->execute();
      $exam = $fetch_weeklyExam->fetch(PDO::FETCH_ASSOC);

         $exam_name = $exam['exam_name'];


    }

   ?>


<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link type="text/css" rel="stylesheet" href="css/style.css">
      <title>Business_studies Exam</title>
   </head>
   <body>
      <div class="e-exam_header">
         <div class="profile_image">
            <img id="logo" class="my_avater" src="../../images/icons/RSA-Basic-Education-LOGO.jpg">
         </div>
         <div class="exam_beginWritten">
           <?php echo $exam_name; ?>
         </div>
      </div>
      <div class="row_container">
         <div class="left_containe">
            <div class="exam_name">
               <?php echo $exam_name; ?>
            </div>
            <div class="time_counter">
               <div class="left_title">Exam Time :</div>
               <img class="timer" src="../images/clock.svg"> <time id="countdown">30:00</time>
            </div>
            <button data-toggle="modal" data-target="#report" id="submit_answers" class="submit_answer">Submit Answer</button>

            <input type="text" class="hidden_Answer" id="username" value="<?php echo $getUsername ?>">
            <input type="text" class="hidden_Answer" id="exam_ID" value="<?php echo $getID ?>">

         </div>
         <div class="question_container">
            <div class="question_paper">
               <h4 class="Section_title">SECTION A (COMPULSORY)</h4>
               <h4 class="Section_title">QUESTION 1</h4>
               <div class="Question_explanation_container">
                  <b>1.1</b> Various options are provided as possible answers to the following questions.
                  Choose the answer and write only the letter (A–D) next to the question 
               </div>
               <div class="Question_section">
                  <div class="Question">
                     <b>1.1.1</b> According to this theory of leadership employees are encouraged
to work hard because they will receive rewards:
                  </div>
                  <div class="Question_options">
                     <b>A</b> Situational
                     <br>
                     <b>B</b> Charismatic
                     <br>
                     <b>C</b> Transactional
                     <br>
                     <b>D</b> Democratic
                  </div>
                  <input class="input_multipleQuestion" type="text" id="1_1_1">
                  <input class="hidden_Answer" type="text" value="D" id="1_1_1_A">
               </div>
               <div class="Question_section">
                  <div class="Question">
                     <b>1.1.2</b> Businesses need to ensure that borrowers/clients will be able to
                     repay their loans within the period stipulated before granting a loan.
                     This is one of the main aims of the ...
                  </div>
                  <div class="Question_options">
                     <b>A</b> Consumer Protection Act, 2008 (Act 68 of 2008).
                     <br>
                     <b>B</b> National Credit Act, 2005 (Act 34 of 2005).
                     <br>
                     <b>C</b> Labour Relations Act,1995 (Act 66 of 1995)
                     <br>
                     <b>D</b> Employment Equity Act, 1998 (Act 55 of 1998)
                  </div>
                  <input class="input_multipleQuestion" type="text" id="1_1_2">
                  <input class="hidden_Answer" type="text" value="D" id="1_1_2_A">
               </div>
               <div class="Question_section">
                  <div class="Question">
                     <b>1.1.3</b> ... communicate largely by means of interaction, behaviour or
                     charisma. 
                  </div>
                  <div class="Question_options">
                     <b>A</b> Leaders
                     <br>
                     <b>B</b> Followers
                     <br>
                     <b>C</b> Employees
                     <br>
                     <b>D</b> Subordinates
                  </div>
                  <input class="input_multipleQuestion" type="text" id="1_1_3">
                  <input class="hidden_Answer" type="text" value="D" id="1_1_3_A">
               </div>
               <div class="Question_section">
                  <div class="Question">
                     <b>1.1.4</b> An over-insured warehouse implies that it is insured for ...
                  </div>
                  <div class="Question_options">
                     <b>A</b> less than its replacement value
                     <br>
                     <b>B</b> less than its actual value.
                     <br>
                     <b>C</b> more than its market value.
                     <br>
                     <b>D</b> equal to its book value.
                  </div>
                  <input class="input_multipleQuestion" type="text" id="1_1_4">
                  <input class="hidden_Answer" type="text" value="D" id="1_1_4_A">
               </div>
               <div class="Question_section">
                  <div class="Question">
                     <b>1.1.5</b> This problem-solving technique allows a manager to find solutions
                     on his/her own:
                  </div>
                  <div class="Question_options">
                     <b>A</b> Brainstorming
                     <br>
                     <b>B</b> Delphi
                     <br>
                     <b>C</b> Empty chair
                     <br>
                     <b>D</b> Forced combination
                  </div>
                  <input class="input_multipleQuestion" type="text" id="1_1_5">
                  <input class="hidden_Answer" type="text" value="D" id="1_1_5_A">
               </div>
               <div class="Question_section">
                  <div class="Question">
                     <b>1.1.6</b> SASOL Ltd is not only concerned about their financial position, but
                     also about their social and environmental successes. They
                     therefore report on their ... performance.
                  </div>
                  <div class="Question_options">
                     <b>A</b> profitability
                     <br>
                     <b>B</b> social
                     <br>
                     <b>C</b> Porter's Five Forces
                     <br>
                     <b>D</b> triple bottom line
                  </div>
                  <input class="input_multipleQuestion" type="text" id="1_1_6">
                  <input class="hidden_Answer" type="text" value="D" id="1_1_6_A">
               </div>
               <div class="Question_section">
                  <div class="Question">
                     <b>1.1.7</b> Joseph has just been appointed as the maintenance supervisor at
                     Blue Beach Hotel. He will receive the policies and procedures
                     manual of the hotel during the ... programme
                  </div>
                  <div class="Question_options">
                     <b>A</b> placement
                     <br>
                     <b>B</b> induction
                     <br>
                     <b>C</b> recruitment
                     <br>
                     <b>D</b> screening
                  </div>
                  <input class="input_multipleQuestion" type="text" id="1_1_7">
                  <input class="hidden_Answer" type="text" value="D" id="1_1_7_A">
               </div>
               <div class="Question_section">
                  <div class="Question">
                     <b>1.1.8</b> Browns Architects Inc. is an example of a …
                  </div>
                  <div class="Question_options">
                     <b>A</b> partnership.
                     <br>
                     <b>B</b> close corporation.
                     <br>
                     <b>C</b> personal-liability company
                     <br>
                     <b>D</b> private company.
                  </div>
                  <input class="input_multipleQuestion" type="text" id="1_1_8">
                  <input class="hidden_Answer" type="text" value="D" id="1_1_8_A">
               </div>
               <div class="Question_section">
                  <div class="Question">
                     <b>1.1.9</b> Senzo invested R8 000 at Burger Bank at 10% simple interest for
                     three years. Burger Bank will pay out ... after three years when the
                     investment matures. 
                  </div>
                  <div class="Question_options">
                     <b>A</b> R10 400
                     <br>
                     <b>B</b> R8 800
                     <br>
                     <b>C</b> R10 648
                     <br>
                     <b>D</b> R2 400
                  </div>
                  <input class="input_multipleQuestion" type="text" id="1_1_9">
                  <input class="hidden_Answer" type="text" value="D" id="1_1_9_A">
               </div>
               <div class="Question_section">
                  <div class="Question">
                     <b>1.1.10</b> DJ Vynil plays music at events on a part-time basis. The demand
                     for his services has increased and he is considering making it his
                     full-time business. A weakness revealed by his SWOT analysis
                     could be ... 
                  </div>
                  <div class="Question_options">
                     <b>A</b> municipal by-laws that limit noise levels in certain areas.
                     <br>
                     <b>B</b> expensive sound systems.
                     <br>
                     <b>C</b> more invitations to high-profile events
                     <br>
                     <b>D</b> experience as a DJ.
                  </div>
                  <input class="input_multipleQuestion" type="text" id="1_1_10">
                  <input class="hidden_Answer" type="text" value="D" id="1_1_10_A">
               </div>
               <div class="Sized-Box"></div>
            </div>



            <div class="question_paper">
               <div class="Question_explanation_container">
                  <b>1.2</b> Complete the following statements by using the word(s)/abbreviation in the list
                  below. Write only the word(s)/abbreviation next to the question number 
               </div>
               <div class="Question">

                  <b>1.2.1</b> A maximum of (ten/fifty) members can form a close corporation.
    <input class="abbreviation_input" type="text" id="1_2_1"><input class="hidden_Answer" type="text" value="Gross" id="1_2_1_A"> 
               </div>

               <div class="Question">
                  <b>1.2.2</b>(Gross/Net) pay is an amount received by an employee after deductions.
                  <input class="abbreviation_input" type="text" id="1_2_2"><input class="hidden_Answer" type="text" value="D" id="1_2_2_A">
               </div>
               <div class="Question">
                  <b>1.2.3</b>
                  <input class="abbreviation_input" type="text" id="1_2_3"><input class="hidden_Answer" type="text" value="D" id="1_2_3_A"> is the system which ensures that the final product meets the
                  required standards.
               </div>
               <div class="Question">
                  <b>1.2.4</b> The 
                  <input class="abbreviation_input" type="text" id="1_2_4"><input class="hidden_Answer" type="text" value="D" id="1_2_4_A"> procedure may be used to resolve the case of verbal abuse
                  of the secretary by her manager. 
               </div>
               <div class="Question">
                  <b>1.2.5</b> The 
                  <input class="abbreviation_input" type="text" id="1_2_5"><input class="hidden_Answer" type="text" value="D" id="1_2_5_A"> Development Strategy includes action plans to ensure that
                  the level of post-school education and training improves. 
               </div>
               <div class="Sized-Box"></div>
               <div class="Question_explanation_container">
                  <b>1.3</b> Choose a description from COLUMN B that matches a term/Act in
                  COLUMN A. Write only the letter (A–J) next to the question number 
               </div>
               <img class="question_image" src="images/2015NovP1/1.3.PNG">
               <div class="table_column">
                  <table class="tg">
                     <tr>
                        <th class="tg-s268">1.3.1</th>
                        <th class="tg-s268">1.3.2</th>
                        <th class="tg-s268">1.3.3</th>
                        <th class="tg-s268">1.3.4</th>
                        <th class="tg-s268">1.3.5</th>
                     </tr>
                     <tr>
                        <td class="tg-s268">
                           <input class="column_input" type="text" id="1_3_1">
                           <input class="hidden_Answer" type="text" value="D" id="1_3_1_A">
                        </td>
                        <td class="tg-s268">
                           <input class="column_input" type="text" id="1_3_2">
                           <input class="hidden_Answer" type="text" value="D" id="1_3_2_A">
                        </td>
                        <td class="tg-s268">
                           <input class="column_input" type="text" id="1_3_3">
                           <input class="hidden_Answer" type="text" value="D" id="1_3_3_A">
                        </td>
                        <td class="tg-s268">
                           <input class="column_input" type="text" id="1_3_4">
                           <input class="hidden_Answer" type="text" value="D" id="1_3_4_A">
                        </td>
                        <td class="tg-s268">
                           <input class="column_input" type="text" id="1_3_5">
                           <input class="hidden_Answer" type="text" value="D" id="1_3_5_A">
                        </td>
                     </tr>
                  </table>
               </div>
               <div class="Sized-Box"></div>
               <div id="result"></div>
            </div>
         </div>
      </div>

      <!-- Modal -->
<div class="modal fade" id="report" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
  <div class="modal-dialog report" role="document">
    <div class="modal-content report">
      <div class="modal-header report">
        <h5 class="modal-title" id="exampleModalLabel">Report</h5>
        
      </div>
      <div id="show_results"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary report" data-dismiss="modal">Corrections</button>
        
      </div>
    </div>
  </div>
</div>
   
   <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
   
        <script type="text/javascript">
   var seconds = 1200;
      function secondPassed() {
          var minutes = Math.round((seconds - 30)/60),
              remainingSeconds = seconds % 60;

          if (remainingSeconds < 10) {
              remainingSeconds = "0" + remainingSeconds;
          }

          document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
          if (seconds == 0) {
              clearInterval(countdownTimer);
             submitAnswer();
          } else {
              seconds--;
          }
      }
      var countdownTimer = setInterval('secondPassed()', 1000);
</script>
<script src="ajax_calls/gradeUser.js" type="text/javascript"></script>  
   </script>
   

       <!--Optional JavaScript
    jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
</html>

<?php

}

?>