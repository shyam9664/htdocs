<?php
include("./config.php");
$getstudents = $conn->prepare("SELECT id, name FROM students");
$getstudents->execute();
$students = $getstudents->fetchAll();

echo "<select>";
echo "<option>select student</option>";
foreach($students as $student){
    echo "<option value=".$student['id'].">".$student['name']."</option>";
}


echo "/<select>";
?>