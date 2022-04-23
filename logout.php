<?
session_start();

session_unset(); // 세션제거

session_destroy(); // 세션삭제
?>



<script>
    alert("로그아웃");
</script>
<meta http-equiv='refresh' content='0;url=index.php'> 