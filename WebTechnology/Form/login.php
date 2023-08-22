<?php
if(isset($_POST['signup'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "email: " . $email . "<br>";
    echo "password: " . $password . "<br>";

}
?>