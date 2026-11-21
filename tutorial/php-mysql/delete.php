<?php
include("./config.php");
$getstudents = $conn->prepare("delete from students where id='4'");
$getstudents->execute();
?>