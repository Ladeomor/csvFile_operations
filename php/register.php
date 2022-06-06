<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);





}
function registerUser($username, $email, $password){
    $userData = $username. "," . $email. "," . $password. "\n";
    $csvFileOpen = fopen("../storage/users.csv", "a");
    fwrite($csvFileOpen, $userData);
    fclose($csvFileOpen);    
}


if(isset($_POST) & !empty($_POST)){
    echo "User successfully registered";
}
echo "<br>";

echo "HANDLE THIS PAGE";



