<?php

if(isset($_POST['submit']))
{


$date=$_POST['date'];
$title=$_POST['title'];
$note=$_POST['note'];
$username=$_POST['username'];

}

echo $date;
echo $title;
echo $note;
echo $username;

require('dbconnect.php');
$sql = "
INSERT INTO note (ID,date,title,notebody,user)
VALUES ('0', '$date', '$title', '$note', '$username');
";

echo $sql;
$conn->query($sql);






       
        
?>