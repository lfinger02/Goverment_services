<?php

include('includes/config.php');

$userIsLoggedIn = false;
$username_login = null;

if (!isset($_COOKIE['user']))
{
  echo "Cookie was not found";
}
else
{
 /* if(($_COOKIE['user']) === "")
  {
    $username_login = $_COOKIE["user"];
    $_SESSION["userLoggedIn"] = $username_login;
  }
  */
}

if(!isset($_SESSION['userLoggedIn']))
{
  echo "User is not logged in";
  $userLoggedIn = false;
}
else
{
  $userLoggedIn = true;
  $username_login = $_SESSION['userLoggedIn'];
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

    <title>e-Exam</title>
  </head>
  <body>
    
    <?php
          include('none_db_includes/exam_header.php');
    ?>

    <div class="choose_subject">
        <div class="heading_subjects">e-Assessment</div>

    </div>


     <?php
          include('none_db_includes/profile_section.php');
    ?>


    <div class="space"></div>

    <div class="learner_showcase">
 <h4 class="header_subject_coach">Supported Subjects<!--img class="imggg" src="assets/coach.svg"--></h4>

  <div class="scrolling-wrapper"><!--subject_coach/business_studies.php-->
    <button class="card" data-toggle="modal" data-target="#businessModal"><h2>Business studies</h2></button>
    <button class="card" data-toggle="modal" data-target="#economicsModal"><h2>Economics</h2></button>
    <button class="card" data-toggle="modal" data-target="#geographyModal"><h2>Geography</h2></button>
    <button class="card" data-toggle="modal" data-target="#lifescienceModal"><h2>Life science</h2></button>
    <button class="card" data-toggle="modal" data-target="#argicultural_scienceModal"><h2>Argicultrual Science</h2></button>
    <button class="card" data-toggle="modal" data-target="#physcialscienceModal"><h2>Physical science</h2></button>
    <button class="card" data-toggle="modal" data-target="#businessModal"><h2>English FAL</h2></button>
    <button class="card" data-toggle="modal" data-target="#geographyModal"><h2>History</h2></button>
    <button class="card" data-toggle="modal" data-target="#geographyModal"><h2>Mathematics</h2></button>
    <button class="card" data-toggle="modal" data-target="#geographyModal"><h2>Mathematics lit</h2></button>
    <button class="card" data-toggle="modal" data-target="#geographyModal"><h2>Accounting</h2></button>
    <!--button  class="card"><h2>Tourism</h2></button>
    <button  class="card"><h2>Economics</h2></button>
    <button  class="card"><h2>English FAL</h2></button>
    <button  class="card"><h2>English HL</h2></button-->
  </div>

</div>

<?php
    include('none_db_includes/modals/business_studies.php');
    include('none_db_includes/modals/economics.php');
    include('none_db_includes/modals/geography.php');
    include('none_db_includes/modals/life_science.php');
    include('none_db_includes/modals/argicultural_science.php');
    include('none_db_includes/modals/physcial_science.php');
?>


<div class="min_profile3">
    <h4 class="challenges_header">Avaliable e-Exams</h4>

<div class="scroll_container">

  

<div class="shimmer_loader">
<div class="shimmer_container">
   <div href="#" class="shimmer"></div> 
    <div class="information_shimmer">
      <div class="shimmer_info"></div>
      <div class="shimmer_info2"></div>
      <div class="shimmer_info3"></div>
   </div>
</div>
<div class="shimmer_container">
   <div href="#" class="shimmer"></div> 
    <div class="information_shimmer">
      <div class="shimmer_info"></div>
      <div class="shimmer_info2"></div>
      <div class="shimmer_info3"></div>
   </div>
</div>
</div>
   <div id="pastpaper_RequestResults"></div>
 

 

      </div>
   </div>

   <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
   <script type="text/javascript">
     
 

    $(document).ready(function(){

      ShowHideHandles.registerFormHandle();

      var province_choice = "none";

      $("#P_SelectionNC").click(function(){

        $('#p_1').attr('src', 'images/icons/checked.svg');

        //disabler
        $('#p_2').attr('src', 'images/provinces_icons/province_EC.svg');
        $('#p_3').attr('src', 'images/provinces_icons/province_FS.svg');
        $('#p_4').attr('src', 'images/provinces_icons/province_GP.svg');
        $('#p_5').attr('src', 'images/provinces_icons/province_KZN.svg');
        $('#p_6').attr('src', 'images/provinces_icons/province_LP.svg');
        $('#p_7').attr('src', 'images/provinces_icons/province_MP.svg');
        $('#p_8').attr('src', 'images/provinces_icons/province_NW.svg');
        $('#p_9').attr('src', 'images/provinces_icons/province_WC.svg');


        province_choice = "Northern Cape";


      });

      $("#P_SelectionEC").click(function(){

        $('#p_2').attr('src', 'images/icons/checked.svg');


        //disabler
        $('#p_1').attr('src', 'images/provinces_icons/province_NC.svg');
        $('#p_3').attr('src', 'images/provinces_icons/province_FS.svg');
        $('#p_4').attr('src', 'images/provinces_icons/province_GP.svg');
        $('#p_5').attr('src', 'images/provinces_icons/province_KZN.svg');
        $('#p_6').attr('src', 'images/provinces_icons/province_LP.svg');
        $('#p_7').attr('src', 'images/provinces_icons/province_MP.svg');
        $('#p_8').attr('src', 'images/provinces_icons/province_NW.svg');
        $('#p_9').attr('src', 'images/provinces_icons/province_WC.svg');


        province_choice = "Eastern Cape";

      });

      $("#P_SelectionFS").click(function(){

        $('#p_3').attr('src', 'images/icons/checked.svg');


        //disabler
        $('#p_1').attr('src', 'images/provinces_icons/province_NC.svg');
        $('#p_2').attr('src', 'images/provinces_icons/province_EC.svg');
        $('#p_4').attr('src', 'images/provinces_icons/province_GP.svg');
        $('#p_5').attr('src', 'images/provinces_icons/province_KZN.svg');
        $('#p_6').attr('src', 'images/provinces_icons/province_LP.svg');
        $('#p_7').attr('src', 'images/provinces_icons/province_MP.svg');
        $('#p_8').attr('src', 'images/provinces_icons/province_NW.svg');
        $('#p_9').attr('src', 'images/provinces_icons/province_WC.svg');


        province_choice = "Free State";

      });

      $("#P_SelectionGP").click(function(){

        $('#p_4').attr('src', 'images/icons/checked.svg');


        //disabler
        $('#p_1').attr('src', 'images/provinces_icons/province_NC.svg');
        $('#p_2').attr('src', 'images/provinces_icons/province_EC.svg');
        $('#p_3').attr('src', 'images/provinces_icons/province_FS.svg');
        $('#p_5').attr('src', 'images/provinces_icons/province_KZN.svg');
        $('#p_6').attr('src', 'images/provinces_icons/province_LP.svg');
        $('#p_7').attr('src', 'images/provinces_icons/province_MP.svg');
        $('#p_8').attr('src', 'images/provinces_icons/province_NW.svg');
        $('#p_9').attr('src', 'images/provinces_icons/province_WC.svg');


        province_choice = "Gauteng";

      });

      $("#P_SelectionKZN").click(function(){

        $('#p_5').attr('src', 'images/icons/checked.svg');


        //disabler
        $('#p_1').attr('src', 'images/provinces_icons/province_NC.svg');
        $('#p_2').attr('src', 'images/provinces_icons/province_EC.svg');
        $('#p_3').attr('src', 'images/provinces_icons/province_FS.svg');
        $('#p_4').attr('src', 'images/provinces_icons/province_GP.svg');
        $('#p_6').attr('src', 'images/provinces_icons/province_LP.svg');
        $('#p_7').attr('src', 'images/provinces_icons/province_MP.svg');
        $('#p_8').attr('src', 'images/provinces_icons/province_NW.svg');
        $('#p_9').attr('src', 'images/provinces_icons/province_WC.svg');


        province_choice = "Kwa-Zulu Natal";

      });

      $("#P_SelectionLP").click(function(){

        $('#p_6').attr('src', 'images/icons/checked.svg');


        //disabler
        $('#p_1').attr('src', 'images/provinces_icons/province_NC.svg');
        $('#p_2').attr('src', 'images/provinces_icons/province_EC.svg');
        $('#p_3').attr('src', 'images/provinces_icons/province_FS.svg');
        $('#p_4').attr('src', 'images/provinces_icons/province_GP.svg');
        $('#p_5').attr('src', 'images/provinces_icons/province_KZN.svg');
        $('#p_7').attr('src', 'images/provinces_icons/province_MP.svg');
        $('#p_8').attr('src', 'images/provinces_icons/province_NW.svg');
        $('#p_9').attr('src', 'images/provinces_icons/province_WC.svg');


        province_choice = "Limpopo";

      });

      $("#P_SelectionMP").click(function(){

        $('#p_7').attr('src', 'images/icons/checked.svg');

        
        //disabler
        $('#p_1').attr('src', 'images/provinces_icons/province_NC.svg');
        $('#p_2').attr('src', 'images/provinces_icons/province_EC.svg');
        $('#p_3').attr('src', 'images/provinces_icons/province_FS.svg');
        $('#p_4').attr('src', 'images/provinces_icons/province_GP.svg');
        $('#p_5').attr('src', 'images/provinces_icons/province_KZN.svg');
        $('#p_6').attr('src', 'images/provinces_icons/province_LP.svg');
        $('#p_8').attr('src', 'images/provinces_icons/province_NW.svg');
        $('#p_9').attr('src', 'images/provinces_icons/province_WC.svg');


        province_choice = "Mpumalanga";

      });

      $("#P_SelectionNW").click(function(){

        $('#p_8').attr('src', 'images/icons/checked.svg');


        //disabler
        $('#p_1').attr('src', 'images/provinces_icons/province_NC.svg');
        $('#p_2').attr('src', 'images/provinces_icons/province_EC.svg');
        $('#p_3').attr('src', 'images/provinces_icons/province_FS.svg');
        $('#p_4').attr('src', 'images/provinces_icons/province_GP.svg');
        $('#p_5').attr('src', 'images/provinces_icons/province_KZN.svg');
        $('#p_6').attr('src', 'images/provinces_icons/province_LP.svg');
        $('#p_7').attr('src', 'images/provinces_icons/province_MP.svg');
        $('#p_9').attr('src', 'images/provinces_icons/province_WC.svg');


        province_choice = "North West";

      });

      $("#P_SelectionWC").click(function(){

        $('#p_9').attr('src', 'images/icons/checked.svg');


        //disabler
        $('#p_1').attr('src', 'images/provinces_icons/province_NC.svg');
        $('#p_2').attr('src', 'images/provinces_icons/province_EC.svg');
        $('#p_3').attr('src', 'images/provinces_icons/province_FS.svg');
        $('#p_4').attr('src', 'images/provinces_icons/province_GP.svg');
        $('#p_5').attr('src', 'images/provinces_icons/province_KZN.svg');
        $('#p_6').attr('src', 'images/provinces_icons/province_LP.svg');
        $('#p_7').attr('src', 'images/provinces_icons/province_MP.svg');
        $('#p_8').attr('src', 'images/provinces_icons/province_NW.svg');


        province_choice = "Western Cape";

      });

      $("#registerUser").click(function(){

        //Show_2
        var Rname     = $("#register-name").val();
        var Rsurname  = $("#register-surname").val();
        var Remail    = $("#register-email").val();

        //Show_3
        var Rusername = $("#register-username").val();
        var Rpassword = $("#register-password").val();
        var R2password = $("#register-re-password").val();


                    $.ajax({
                        type: "POST",
                        url: 'includes/classes/registerUser.php',
                        data: {
                               Rprovince: province_choice,
                               Rname: Rname,
                               Rsurname: Rsurname,
                               Remail,Remail,
                               Rusername,Rusername,
                               Rpassword,Rpassword,
                               R2password,R2password

                        },
                        success: function(data){

                            $('#register_result').html(data);

                        }
                    });



      });  


       $("#loginUser").click(function(){

          var login_username = $("#login-username").val();
          var login_password = $("#login-password").val();

                    $.ajax({
                        type: "POST",
                        url: 'includes/classes/loginUser.php',
                        data: {
                               login_username: login_username,
                               login_password: login_password
                        },
                        success: function(data){

                            $('#login_result').html(data);

                        }
                    });
       });

       
       $.getScript('functions_js_pastpaperRequests/pastpaperRequest.js', function() {
      //alert('Load was performed.');
      });

    });


    class ShowHideHandles {

  static registerFormHandle() {
    var next_control;
    next_control = 0;

    $("#next_register").click(function () {
      next_control++;

      console.log(next_control);

      if (next_control <= 0)
        next_control = 0;

      if (next_control >= 2)
        next_control = 2;

      switch (next_control) {
        case 1:
          $(".show_1").hide();
          $(".show_3").hide();
          $(".show_2").show();

          $("#Already_a_user").hide();
          $("#back_register").show();

          $("#next_register").show();;
          break;
        case 2:
          $(".show_1").hide();
          $(".show_2").hide();
          $(".show_3").show();

          $("#next_register").hide();;
          break;
        case 0:
          $(".show_1").show();
          $(".show_3").hide();
          $(".show_2").hide();

          $("#Already_a_user").show();
          $("#back_register").hide();

          $("#next_register").show();

          ;
        default:
          ;

      }

    });

    $("#back_register").click(function () {
      next_control--;

      console.log(next_control);

      if (next_control <= 0)
        next_control = 0;

      if (next_control >= 2)
        next_control = 2;

      switch (next_control) {
        case 1:
          $(".show_1").hide();
          $(".show_3").hide();
          $(".show_2").show();

          $("#Already_a_user").hide();
          $("#back_register").show();

          $("#next_register").show();;
          break;
        case 2:
          $(".show_1").hide();
          $(".show_2").hide();
          $(".show_3").show();

          $("#back_register").hide();;
          break;
        case 0:
          $(".show_1").show();
          $(".show_3").hide();
          $(".show_2").hide();

          $("#Already_a_user").show();
          $("#back_register").hide();

          $("#next_register").show();

          ;
        default:
          ;

      }

    });

  }
}

   </script>

    

     <!--Optional JavaScript
    jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

</body></html>