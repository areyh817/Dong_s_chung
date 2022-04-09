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
    <link rel="stylesheet" href="css/main.css">
    <!--script-->
    <!--<script type="text/javascript"> 

        var imgArray=new Array(); 

        imgArray[0]="background01.jpg"; 
        imgArray[1]="background02.jpg"; 
    
        function showImage(){ 

            var imgNum=Math.round(Math.random()*1); 
            var objImg=document.getElementById("bgimg"); 
    
            objImg.src=imgArray[imgNum]; 
            setTimeout(showImage,1000); 
            } 
    </script>-->
    <title>동아리 페이지</title>
    
</head>
    <!--ul-->
    <div class="menu">
        <a href=""><h3 id="mypage">마이페이지</h3></a>
        <h3>|</h3>
        <a href="main.html"><h3 id="lookup">동아리보기</h3></a>
        <h3>|</h3>
        <a href=""><h3 id="create">신청하기</h3></a>
        <h3>|</h3>
        <a href="login.html"><h3 id="recommand">로그인</h3></a>
    </div>

    <br><br><br><br>
    <!-- 프로필 -->
 
    <img src="profile.png" class="profile_img"> 
    <h1 class="mypage_title">&nbsp; CPU 동아리</h1>

    <!-- 한줄긋기 -->
    <hr>

    <!-- 회원정보 -->
    <div class="part">
    <div class="part1">
        <h2 class="info_title">회원 정보</h2>
        <div class="member_info">
            소속 과 <br>
            <input type="text" name="major"><br>
            학번 <br>
            <input type="text" name="hakbun"><br>
            이메일 <br>
            <input type="email" name="email"><br>
            
            <div class="btn_info">
                <button class = "edit_info">회원정보수정</button>
                <br><br>
                <button class = "del_info">회원 탈퇴</button>
            </div>  
        </div> 
    </div>

    <!--세로 한 줄 긋기-->
    <hr class="height">  

    <!--내 동아리 신청 현황-->
    <div class = "my_sub">
        <span class = "my_sub_txt">지원 현황</span><br>
        <span class = "my_sub_info">동아리 지원 현황을 확인하세요!</span>

        <div class = "sub_table">
            <table class="table">
                <tr>
                  <td>순번</td>
                  <td>학번</td>
                  <td>이름</td>
                  <td>전화번호</td>
                  <td>지원동기</td>     
                </tr>


              <tr>
              <?php
              
              include ("./db_conn.php");
              
              $sql="select * from submit";
              $result=mysqli_query($conn,$sql);
              $num=mysqli_num_rows($result);
              $count=1;
              
              for($i=0;$i<$num;$i++) {
                  $re=mysqli_fetch_array($result);
                  
                  ?>
              
                <?php
                  echo "<td>$count</td>";
                  echo "<td>$re[id]</td>";
                  echo "<td>$re[name]</td>";
                  echo "<td>$re[tell]</td>";
                  echo "<td>$re[motive]</td>";
    
                 ?>
              </tr>
                <?php
                $count++;
                }
                ?>
              
              
                </table>
              </form>
        </div>
    </div>    
</div>


        
  
   
</body>
</html>