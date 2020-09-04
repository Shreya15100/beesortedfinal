<?php
$conn= mysqli_connect('127.0.0.1','root','');
if(!$conn)
{
    echo 'Not connected to server!';
}
if(!mysqli_select_db($conn,'beesorted'))
{
    echo 'Database not selected!';
}
$selectedCourse="";
$link="";
if (isset($_POST['course'])) {
    $selectedCourse = $_POST['course'];
}
ECHO "<p>".$selectedCourse."</p>";

$link = $_POST['link'];

ECHO "<p>".$link."</p>";
$sql1= "INSERT into ".$selectedCourse." VALUES('$link')";
if(!mysqli_query($conn,$sql1))
{
    echo 'not inserted';
}
else{
    echo 'inserted';
}
?>