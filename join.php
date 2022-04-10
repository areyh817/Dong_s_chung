<meta charset="UTF-8">
<?php
include './db_conn.php';

$name = $_POST['name'];
$student_id = $_POST['student_id'];
$email = $_POST['email'];
$tell = $_POST['tell'];
$pass = $_POST['pass'];


$sql="insert into user(student_id, email, name, pass, tell)values('$student_id', '$email', '$pass', '$name','$tell')";
mysqli_query($conn,$sql);
mysqli_close($conn);

echo("<script>location.href='index.html'; alert('회원가입이 완료되었습니다. :)');</script>"); 

?>

