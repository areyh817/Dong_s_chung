<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
<style>
  table {
    margin : 0 auto;
    border-top: 1px solid #444444;
    border-collapse: collapse;
    font-family: 'NanumSquare', sans-serif !important;
    width: 70%;
    text-align : center;
    font-size : 13.5px;
  }
  th, td {
    padding-top : 30px;
    border-bottom: 1px solid #444444;
    border-left: 1px solid #444444;
    padding: 25px;

  }
  th:first-child, td:first-child {
    border-left: none;
  }
  span{
    font-family: 'NanumSquare', sans-serif !important;
  }
  .addtxt{
    font-size : 16px;
    font-weight : bold;
    margin-top : 30px;
  }

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>동스청 동아리 지원 현황</title>
    <script src=""></script>
</head>
<body>
</body>
</html>
<table>
<tr>
    <td style="font-weight:bold; font-size: 16px">이름</td>
    <td style="font-weight:bold; font-size: 16px ">학번</td>
    <td style="font-weight:bold; font-size: 16px ">지원동기</td>
    <td style="font-weight:bold; font-size: 16px ">전화번호</td>
</tr>
<?php
session_start();
$userid = $_SESSION['user_id'];

$conn=mysqli_connect('localhost','dongschung','dong2022!','dongschung');

// session에서 동아리 이름 가져오기
$selct_ca=mysqli_query ($conn,"SELECT ca FROM admin where id='$userid'");
$row = mysqli_fetch_assoc($selct_ca);
$ca_name = $row['ca'];

// 동아리 이름에서 submit 제출자 가져오기
$sql = "SELECT * FROM submit WHERE ca='$ca_name'";
$res= mysqli_query($conn, $sql);

for($i = 0; $i < mysqli_num_rows($res); $i++){
    $re = mysqli_fetch_row($res);
    echo "<tr>";
    echo "<td style='width : 45px;'>".$re[1]."</td>";
    echo "<td>".$re[0]."</td>";
    echo "<td style='width : 80px;'>".$re[3]."</td>";
    echo "<td>".$re[2]."</td>";
?>
<?php
    echo "<br>";
    echo "</tr>";
}
echo "</table>";
?>