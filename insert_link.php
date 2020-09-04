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
$sql= "SELECT * from major";
$result= $conn-> query($sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
ECHO    "<html>
        <head>
            <title>HackThis2020</title>
        </head>
        <body>";
            ECHO "<form method='POST' action=''>
                <h4>Select a Major</h4>
                <select name='major' id='major' onchange='getSelectedMajor()'>
                    <option value='Select a Major'>Select a Major</option>";
                    ECHO "<option value='".$row["major"]."'>".$row["major"]."</option>";
                    while($row = $result->fetch_assoc()) {
                        ECHO "<option value='".$row["major"]."'>".$row["major"]."</option>";
                        
                    }         
            ECHO "</select>
                <script>
                function getSelectedMajor() {
                        selectElement = document.querySelector('#major'); 
                        selectedMajor = selectElement.value;
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.open('GET', 'insert_link.php?selectedMajor='+ selectedMajor, true);
                        xmlhttp.send();
                }
               </script>";           
                    $selectedMajor = $_REQUEST['selectedMajor'];
            ECHO   "<h4>Select a course</h4>
                <select type='text'  name='course' id='course' value='course'/>
                    <option value='Select a Course'>Select a Course</option>";
                    $sql1= "SELECT * from ".$selectedMajor;
                    $result1= $conn-> query($sql1);
                    $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
        ECHO        "<option value='".$row1["course"]."'>".$row1["course"]."</option>";
                    while($row1 = $result1->fetch_assoc()) {
                        ECHO "<option value='".$row1["course"]."'>".$row1["course"]."</option>";
                    }         
        ECHO   "<br/> 
                <br/>
        <h4>Paste the Link</h4>
        <input type = 'url' name='link'/>
        <br/>
        <br/>
        <button type='submit'>Submit Link</button>
      </form>     
    </body>
 </html>";
 $selectedMajor="";
 $courseNumber="";
if (isset($_POST['major'])) {
    $selectedMajor = $_POST['major'];
}

if (isset($_POST['course'])) {
    $courseNumber = $_POST['course'];


$link = $_POST['link'];

$sql2= "INSERT into ".$courseNumber." VALUES('$link')";
if(!mysqli_query($conn,$sql2))
{
    echo 'not inserted';
}
else{
    echo 'inserted';
}
//header("refresh:2;url=insert_link.php");
/* (if we need to check the user selected 'select a major')if (selectedMajor.length == "") {
                        document.getElementById("txtHint").innerHTML = "";
                        return;
                    } else {
                        (used to add element?) )if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("txtHint").innerHTML = this.responseText;
                            }
                        };
                        selectElement = document.querySelector('#major'); 
                    selectedMajor = selectElement.value;
                    var xmlhttp = new XMLHttpRequest();
                        xmlhttp.open('GET', 'insert_link.php?selectedMajor='+ selectedMajor, true);
                        xmlhttp.send();*/
}
?>