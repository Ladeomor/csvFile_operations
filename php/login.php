<?php
    session_start();

if(isset($_POST['submit'])){
    $username = $_POST['email'];
    $password = $_POST['password'];

loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
    
    $path = "../storage/users.csv";
    if(file_exists($path)){
        $fileContent = trim(file_get_contents($path));
        $contents = explode("\n", $fileContent);
        $users = [];
        foreach($contents as $value){
            $user = explode(',', $value);
            $users[$user[1]] = $user[2];
        }
            
        if(isset($users[$_POST['email']]) & $users[$_POST['email']] === $_POST['password']){
            $_SESSION['username'] = $email;
            header("location: http://localhost/userAuth/dashboard.php");
        }else{
           // echo 'user does not exist';

            header("location: http://localhost/userAuth/forms/login.html");

        }
    
        


    }

    
}
echo"<br>";

echo "HANDLE THIS PAGE";

