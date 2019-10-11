<?php 


$errorName = $errorMessage = $errorLastname = $errorEmail = false;



// Name
function check_name () {
    if(filter_has_var(INPUT_POST, 'name')){
        $name = $_POST['name'];
        
        if (filter_var($name, FILTER_SANITIZE_STRING)){
            return "Name is valid";
            $errorName = false;
        } else {
            return "Name is not valid";
            $errorName = true;
        } 
    }
} 

    // Lastname
function check_lastname () {
    if(filter_has_var(INPUT_POST, 'lastname')){
        $lastname = $_POST['lastname'];
        
        if (filter_var($lastname, FILTER_SANITIZE_STRING)){
            return "Lastname is valid";
            $errorLastname = false;
        } else {
            return "Lastname is not valid";
            $errorLastname = true;
        } 
    }
} 



// Email
function check_mail () {
    if(filter_has_var(INPUT_POST, 'email')){
        $email = $_POST['email'];

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            return "Email is valid";
            $errorEmail = false;
        } else {
            return "Email is not valid";
            $errorEmail = true;
        } 
    }
} 

    // Message
    function check_message () {
        if(filter_has_var(INPUT_POST, 'message')){
            $message = $_POST['message'];
            
            if (filter_var($message, FILTER_SANITIZE_STRING)){
                return "Message is valid";
                $errorMessage = false;
            } else {
                return "Message is not valid";
                $errorMessage = true;
            } 
        }
    }   
                
        if (isset($_POST['submit'])) {
            echo "$errorName $errorLastname $errorEmail $errorMessage";
            if(!$errorName && !$errorLastname && !$errorEmail && !$errorMessage) {
            feedback("All your informations has been validated and sent", "success");
            $to = 'g.wastelain@gmail.com';  
            $subject = 'the subject';
            $message = 'hello';
            $headers = 'From: g.wastelain@gmail.com' . "\r\n" .
            'Reply-To: g.wastelain@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
            mail($to, $subject, $message, $headers);
            }
        }
        
        function feedbackForm($arg, $type = "invalid"){
            echo '<div class="'.$type.'-feedback text-center">'.$arg.'</div>';
        }

        function feedback($arg, $type = "danger"){
            echo '<div class="alert alert-'.$type.' text-center notification">'.$arg.'</div>';
        }


?>