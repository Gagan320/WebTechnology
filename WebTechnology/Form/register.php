
<?php
require('dbconnect.php');
/*
if(isset($_POST['submit'])){
  
    $username=$_POST['username'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];


    if($password != $repassword){
        echo "Password and Confirm Password not Matched";
    } else {    
       // echo $username."<br>".$email."<br>".$mobile."<br>".$password."<br>".$email."<br>".$mobile."<br>";
        require('dbconnect.php');
        $sql = "INSERT INTO `bca2078` 
            (`ID`,`username`,`password`,`mobile`,`email`,`userlevel`)
            VALUES
            ('0', '$username','$password','$mobile','$email','Admin')";
        //echo $sql;
        $conn->query($sql);
    }
}
*/
$sql="SELECT * FROM bca2078";
//$query=$conn->query($sql);
echo $sql;
/*
if($query->num_rows !=0){
    
    echo "<table>";
    echo "<tr><th>ID</th><th>Username</th><th>Password</th><th>Mobile</th><th>Email</th><th>User Level</th></tr>";
    while($res=$query->fetch_array()){
        echo "<tr>";
        echo "<td>".$res[0]."</td>";
        echo "<td>".$res[1]."</td>";
        echo "<td>".$res[2]."</td>";
        echo "<td>".$res[3]."</td>";
        echo "<td>".$res[4]."</td>";
        echo "<td>".$res[5]."</td>";
        echo "</tr>";
    }
    
} 
*/
?>
