<?php

// 값 넘겨받기
$uemail = $_POST['email'];
$upass = $_POST['pass'];

if($uemail == "mirim" || $upass = "1234"){
    echo "<script>alert('로그인 되었습니다.');</script>" ?>
    <meta http-equiv="refresh" content="1;url=Dong_s_chung/CA/main.html">
<?php
} else {
    echo "<script>alert('비밀번호가 일치하지않습니다');history.go(-1)</script>";
}?>