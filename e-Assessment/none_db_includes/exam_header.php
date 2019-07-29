<div class="e-exam_header">
      <div class="profile_image">
          <img id="logo" class="my_avater" src="images/icons/RSA-Basic-Education-LOGO.jpg">      
      </div>

     <?php 

        if ($userLoggedIn === true)
        {

          echo 
          "
            <button data-toggle='modal' data-target='#notification' id='notificationButton' class='notification'><img class='notify' src='images/icons/notification.svg'><div class='active2'>25</div></button>
          ";
        }
        else 
        {
          echo 
          "
          <button data-toggle='modal' data-target='#exam-login' class='sign_up login'>Log in</button>

            <div class='modal fade' id='exam-login' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog login' role='document'>
    <div class='modal-content login'>
      <div class='modal-header login'>
        <img class='scp_icon' src='images/icons/scp_icon.svg'>  
        
      </div>
      <h4 class='welcome2'>Welcome again</h4>
      <div class='message-login'>Practise online for your exams, know exactly which topics you need to focus more on.</div>
      <div class='modal-body login'>
        
        <input placeholder='Username' class='login_input' type='text' id='login-username'>
        <input placeholder='Password' class='login_input' type='password' id='login-password'>
        <a href='#' class='s'>Forgot your password?</a>

        <div id='login_result'></div>

      </div>
      <div class='modal-footer'>
        <button id='loginUser' type='button' class='btnlogin'>login</button>
        <button data-dismiss='modal' data-toggle='modal' data-target='#exam-signup' type='button' class='btnlogin register'>I'm still new</button>
      </div>
    </div>
  </div>
</div>

        <button data-toggle='modal' data-target='#exam-signup' class='sign_up'>Sign up</button>

        <div class='modal fade' id='exam-signup' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog login' role='document'>
    <div class='modal-content login'>
      <div class='modal-header login'>
        <img class='scp_icon' src='images/icons/scp_icon.svg'>  
        
      </div>
      <h4 class='welcome'>Register for e-Exam</h4>

      <div class='show_1'>
      <div class='message-login register'>Which Province are you located in ?</div>
      <div class='modal-body Register'>
        
      <div class='scroll'>
";
        
          include('province_selection.php');
        
  echo "
        </div>

      </div>
  </div>

  <div class='show_2'>
      <div class='message-login register'>What is your name, surname and email ?</div>
      <div class='modal-body Register'>
        
        
        <input placeholder='Name' autocomplete='off' class='login_input' type='text' id='register-name'>
        <input placeholder='Surname' autocomplete='off' class='login_input' type='text' id='register-surname'>
        <input placeholder='Email' autocomplete='off' class='login_input' type='email' id='register-email'>
  
      

      </div>
  </div>

  <div class='show_3'>
      <div class='message-login register'>You almost ready to practice...</div>
      <div class='modal-body Register'>
        
        <input placeholder='Username' autocomplete='off' class='login_input' type='text' id='register-username'>
        <input placeholder='Password' autocomplete='off' class='login_input' type='password' id='register-password'>
        <input placeholder='Re-Password' autocomplete='off' class='login_input' type='password' id='register-re-password'>
      
        <button type='button' id='registerUser' class='btnlogin register'>Register</button>
      </div>
  </div>
  <div id='register_result'></div>

      <div class='modal-footer'>
        <button data-dismiss='modal' data-toggle='modal' data-target='#exam-login' type='button' id='Already_a_user' class='btnlogin'>Already have an Account</button>
        <button type='button' id='back_register' class='btnlogin back'>Back</button>
        <button type='button' id='next_register' class='btnlogin register'>next</button>
      </div>
    </div>
  </div>
</div>
          ";
        }


     ?>

    </div>