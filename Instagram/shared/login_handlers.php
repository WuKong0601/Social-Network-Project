<?php 


if(loggedIn()){
    Redirect::to('index.php');
}

if (Input::exists()){
    if(isset($_POST['submitButton'])){
        $form_errors=array();
        $required_fields=array("email_username", "password");
        $form_errors=array_merge($form_errors,check_empty_fields($required_fields));
        

        //collect form data and store in variables
        $email_username = escape($_POST['email_username']);
        $password = escape($_POST['password']);

        $user_id = $account->login_user($email_username, $password);
        if ($account->passed()){
        //check if error array is empty, if yes process form data
            if (empty($form_errors)) {
                session_regenerate_id();
                $_SESSION['user_id'] = $user_id;
                Redirect::to('index');
            }
            }else {
                $form_errors = array_merge($form_errors, $account->errors());
            }

         }
    }

$title="Login • Instagram";
$keywords = "Instagram, Share and capture world's moments, share, capture, share, login, signup";
?>