<?php
include_once("connect.php");

$user = htmlspecialchars(trim($_POST['user']));
$txt = htmlspecialchars(trim($_POST['txt']));
if(empty($user)){
   echo "昵称不能为空！";
   exit;
}
if(empty($txt)){
   echo "评论内容不能为空！";
   exit;
}
$time = date("Y-m-d H:i:s");
$query=mysqli_query($link,"insert into comments(user,comment,addtime)values('$user','$txt','$time')");
if($query)  echo "1";	
?>