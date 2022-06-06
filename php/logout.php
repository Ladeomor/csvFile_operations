<?php
session_start();
logout();
function logout(){
    if($_SESSION['username']){
        unset($_SESSION['username']);
        session_destroy();
    
        header("location: http://localhost/userAuth/forms/login.html");
    
    }else{
        //echo 'Session is inactive';
    }
   


}

echo "HANDLE THIS PAGE";
?>