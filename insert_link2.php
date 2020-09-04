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
$selectedMajor='';
if (isset($_POST['major'])) {
    $selectedMajor = $_POST['major'];
}
ECHO   "<html>
            <head>
                <title>HackThis2020</title>
            </head>
            <body>
                <form method='POST' action='insert_link3.php'>
                    <h4>Select a course</h4>
                    <select type='text' name='course' id='course' value='course'>
                        <option value='Select a Course'>Select a Course</option>";
                        $sql= "SELECT * from ".$selectedMajor;
                        $result= $conn-> query($sql);
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
ECHO                   "<option value='".$row[$selectedMajor]."'>".$row[$selectedMajor]."</option>";
                    while($row = $result->fetch_assoc()) {
ECHO                   "<option value='".$row[$selectedMajor]."'>".$row[$selectedMajor]."</option>";
                    }         
ECHO               "</select>
                    <h4>Paste the Link</h4>
                    <input type = 'url' name='link'/>
                    <br/>
                    <br/>
                    <button type='submit'>Submit Link</button>
                </form>     
            </body>
        </html>";
/*$selectedCourse="";
$link="";
if (isset($_POST['course'])) {
    $selectedCourse = $_POST['course'];
}
ECHO "<p>".$selectedCourse."</p>";
if (isset($_POST['link'])) {
    $link = $_POST['link'];
}
ECHO "<p>".$link."</p>";
$sql1= "INSERT into '$selectedCourse' VALUES('$link')";
if(!mysqli_query($conn,$sql1))
{
    echo 'not inserted';
}
else{
    echo 'inserted';
}*/
//header("refresh:2;url=insert_link1.php");
?>