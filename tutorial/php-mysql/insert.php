<form action="" method="post">
<input type="text" name="name" placeholder="Enter your name">
<br/>
<br/>
<input type="text" name="batch" placeholder="Enter your batch">
<br/>
<br/>
<input type="text" name="year" placeholder="Enter your year">
<br/>
<br/>
<button>add new student</button>
</form>
<br/>
<br/>
<?php
if(isset($_POST['name'])){
    $name= $_POST['name'];
    $batch= $_POST['batch'];
    $year= $_POST['year'];
    include("./config.php");

$student=$conn->prepare("INSERT INTO `students` (id,name, batch, year)
values (null, '$name','$batch', '$year')
 ");
 $result=$student->execute();
 if($result){

    echo "data inserted successfully";
 }
}