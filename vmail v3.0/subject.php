<?php
$link = mysqli_connect("localhost", "root", "", "subject");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
$subject = mysqli_real_escape_string($link, $_REQUEST['subject']);


$sql = "INSERT INTO sub (subj) VALUES ('$subject')";
if(mysqli_query($link, $sql)){
    header("Location:http://localhost/Assign/message.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);

?>