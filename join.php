<meta charset="UTF-8">
<?php
include './db_conn.php';

$caname = $_POST['ca'];
$id = $_POST['id'];
$pass = $_POST['pass'];


$sql="insert into admin(id, pass, ca)values('$id', '$pass', '$caname')";
mysqli_query($conn,$sql);
mysqli_close($conn);

echo("<script>location.href='index.html'; alert('회원가입이 완료되었습니다. :)');</script>"); 

?>

