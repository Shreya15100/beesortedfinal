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
ECHO   "<html>
            <head>
                <title>HackThis2020</title>
            </head>
            <body>";
ECHO           "<form method='POST' action='insert_link2.php'>
                    <h4>Select a Major</h4>
                    <select name='major' id='major'>
                        <option value='Select a Major'>Select a Major</option>";
ECHO                   "<option value='".$row["major"]."'>".$row["major"]."</option>";
                    while($row = $result->fetch_assoc()) {
ECHO                   "<option value='".$row["major"]."'>".$row["major"]."</option>";
                    }         
ECHO               "</select>
                    <br/>
                    <br/>    
                    <button type='submit'>Submit Major</button>
                </form>     
            </body>
        </html>";

?>