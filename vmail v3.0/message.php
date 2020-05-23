<?php
$link = mysqli_connect("localhost", "root", "", "message");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$email = mysqli_real_escape_string($link, $_REQUEST['email']); 
$subject = mysqli_real_escape_string($link, $_REQUEST['subject']);
$message= mysqli_real_escape_string($link, $_REQUEST['message']);

$sql = "INSERT INTO mess (message) VALUES ('$message')";
if(mysqli_query($link, $sql)){
    header("Location:http://localhost/Assign/thankyou.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);

?>