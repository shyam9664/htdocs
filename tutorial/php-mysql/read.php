<?php
include "./config.php";
$getstudents = $conn->prepare("SELECT * FROM students");
$getstudents->execute();
$students = $getstudents->fetchAll();

echo "<table border='1'>";
foreach($students as $student){
    echo "<tr>
    <td>" .$student['id']. "</td>
     <td>" .$student['name']. "</td>
      <td>" .$student['batch']. "</td>
       <td>" .$student['year']. "</td>
      </tr>";
}
echo "</table>";
?>