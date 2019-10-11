<?php 
// Name
function check_name () {
    if(filter_has_var(INPUT_POST, 'name')){
        $name = $_POST['name'];
        
        if (filter_var($name, FILTER_SANITIZE_STRING)){
            return "Name is valid";
        } else {
            return "Name is not valid";
        } 
    }
    } 

    // Lastname
function check_lastname () {
    if(filter_has_var(INPUT_POST, 'lastname')){
        $lastname = $_POST['lastname'];
        
        if (filter_var($lastname, FILTER_SANITIZE_STRING)){
            return "Lastname is valid";
        } else {
            return "Lastname is not valid";
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
    } else {
        return "Email is not valid";
    } 
}
} 

    // Message
    function check_message () {
        if(filter_has_var(INPUT_POST, 'message')){
            $message = $_POST['message'];
            
            if (filter_var($message, FILTER_SANITIZE_STRING)){
                return "Message is valid";
            } else {
                return "Message is not valid";
            } 
        }
        } 


?>