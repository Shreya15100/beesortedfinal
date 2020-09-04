
<?php
//this file add majors when the add major button is clicked
$conn= mysqli_connect('Localhost','id14606355_root','K4qhW$IV^P1-c^2Y');
if(!$conn)
{
    echo 'not connected to server';
}
if(!mysqli_select_db($conn,'id14606355_beesorted'))
{
    echo 'database not selected';
}
$major= $_POST['major'];
$sql= "INSERT into major VALUES('$major')";
if(!mysqli_query($conn,$sql))
{
    echo 'not inserted';
}
else{
    echo 'inserted';
    $sql1= "CREATE TABLE $major($major text unique)";
    if(!mysqli_query($conn,$sql1))
    {
        echo ' not created table';
    }
    else{
        echo ' created table';
    }
}
header("refresh:2;url=insert_major.html");


?>