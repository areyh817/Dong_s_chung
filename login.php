<meta charset="UTF-8">
<?php
include './db_conn.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

echo $email. "<br>" . $pass;

if(isset($_POST['email'])&&isset($_POST['pass'])){
    $uemail = $_POST['email'];
    $upass = $_POST['pass'];

    echo $uemail. "<br>" . $upass;

    $sql="SELECT * FROM user where email='$uemail'&&pass='$upass'";
    if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){
        echo "사용자 이름= $uemail";
        echo("<script>location.href='index.html'; alert('로그인성공 :)');</script>"); 
    } else // echo("<script>location.href='index.html'; alert('로그인 실패 :)');</script>"); 
    echo "사용자 이름= $uemail";
    echo $uemail. "<br>" . $upass;
  }

?>

