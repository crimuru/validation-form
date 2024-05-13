<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $user_email = $_POST["user_email"];
    $user_password = $_POST["user_password"];

    
    if (empty($user_email) || empty($user_password)) {
        print "Please enter both email and password.";
    } else {
        
        
        if ($user_email === "admin@email.com" && $user_password === "password") {
            print "Login successful!";
            
            
        } else {
            print "Invalid username or password.";
        }
    }
}
?>