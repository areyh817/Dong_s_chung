<meta charset="UTF-8">
<?php
include './db_conn.php';


$caname = $_POST['ca'];
$name = $_POST['name'];
$student_id = $_POST['student_id'];
$motive = $_POST['content'];
$phone = $_POST['phone'];

$sql="insert into submit(student_id, name, tell, motive, ca)values('$student_id', '$name','$phone', '$motive', '$caname')";
mysqli_query($conn,$sql);
mysqli_close($conn);

echo("<script>location.href='index.html'; alert('지원서 제출이 완료되었습니다 :)');</script>"); 

?>

