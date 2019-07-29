<div class="min_profile">
      <?php
userInfo($username_login, $conn);
?>
</div>

<?php

function userInfo($session_of_user, $conn)
{
    
    if (!isset($session_of_user)) {
        echo "
      <img class='profile notsignIn' src='images/icons/goverment.png'>
      
      <div class='userInfo_Container notsignIn'>
        Department of education (e-Exam) Second Chnace Programme developed to assist learners in preparation for exams. Sign up or login
      </div>

      <div class='button_holder'>
        <a class='style' href='#'>About</a>
        
      </div>
    ";
    } else {
        $query = $conn->prepare("SELECT * FROM `scp_users` WHERE username = '$session_of_user'");
        $query->execute();
        
        $results = $query->fetch(PDO::FETCH_ASSOC);
        
        $name     = $results['name'];
        $surname  = $results['surname'];
        $province = $results['province'];
        $user_xp  = $results['user_xp'];
        $profile  = $results['profile'];
        
        echo "
    <img class='profile' src='images/profile/default.png'>
      <div class='userInfo_Container'>
        <span class='UserNameSurname'>$name $surname</span>
        <span class='UserProvince'>$province</span>
        <span class='user_xp'>$user_xp px</span>
      </div>

      <div class='button_holder'>
        <a class='style' href='signOutUser.php'>Sign out</a>
        <a class='edit_information' href='profile.php'>Edit Profile<img class='edit_P' src='images/icons/pencil-edit-button.svg'></a>
      </div>


    ";
        
        
    }
    
}

?>