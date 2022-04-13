<meta charset="UTF-8">
<?php
session_start();
include './db_conn.php';


if(isset($_POST['id'])&&isset($_POST['pass'])){
  $uid = $_POST['id'];
  $upw = $_POST['pass'];

  $sql="SELECT * FROM admin where id='$uid'&&pass='$upw'";
  if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){
    $_SESSION['user_id'] = $uid;
    echo "<script>alert('로그인 되었습니다.');</script>";
    ?>
    <meta http-equiv="refresh" content="1;url=../index.html">
    <?php
  } else echo "아이디 또는 비밀번호가 일치하지 않습니다.";
}

?>