<meta charset="UTF-8">
<?php
include './db_conn.php';

$id = $_POST['id'];
$pass = $_POST['pass'];

echo $id. "<br>" . $pass;

if(isset($_POST['id'])&&isset($_POST['pass'])){
    $id = $_POST['id'];
    $upass = $_POST['pass'];

    echo $uemail. "<br>" . $upass;

    $sql="SELECT * FROM admin where id='$id'&&pass='$upass'";
    if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){
        echo "성공";
        echo "사용자 이름= $id";
        echo("<script>location.href='update_form.php?idx=<?php echo $re[0]; ?>'; alert('로그인성공 :)');</script>"); 
    } else // echo("<script>location.href='index.html'; alert('로그인 실패 :)');</script>"); 
    echo "사용자 이름= $id";
    echo $id. "<br>" . $upass;
  }

?>

