<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
    <!--css-->
    <link rel="stylesheet" href="index.css">
    <title>동스청</title>
    
</head>
<body onload="showImage()" style="overflow: hidden;">

    <!--background image-->
    <div id="bgimg" ></div>

   <!--메인 텍스트-->
   <div class="main_box">
    <h3>동스청</h3>
    <p>나에게 맞는 전공동아리를 신청해보세요 !</p>
    <p>미림의 전공동아리를 <strong style="font-weight: bold;">동스청</strong>을 통해 알아보세요 !</p>
    <a href="main.html"><button>신청하기</button></a>
    
    <!--ul-->
    <div class="menu">
        <a href="main.html"><h3 id="mypage">동아리보기</h3></a>
        <h3>|</h3>
        <a href=""><h3 id="lookup">신청하기</h3></a>
        <h3>|</h3>


        <?php
       if(isset($_POST['id'])&&isset($_POST['pass'])){
        echo  "<a href='login.html'><h3 id='create'>관리자 로그인</h3></a>";
         }
     else{
        echo " <a href='adminlist.php'><h3>지원 현황 확인</h3></a>" ;
         }
        ?>
       
    </div>
</body>
</html>