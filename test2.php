<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/12
 * Time: 15:24
 */

//echo "Hello world!";
//$conn=mysqli_connect("localhost","root" ,"" ,"taxforum" );
//// 检测连接
//if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//}
//echo "连接成功";
////创建数据库
//$sql="create database myDB";
//if($conn ->query($sql)===true){
//    echo "创建数据库成功。";
//}else{
//    echo "erro creating databsae:" . $conn ->error;
//}
////查询数据表
//$sql1="select * from question";
//$result=$conn ->query($sql1);
//if($result ->num_rows>0){
//    //输出数据
//    while($row = $result->fetch_assoc()) {
//        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//    }
//}else{
//    echo "0 结果";
//}
//$conn ->close();

function a(){
    echo "111";
}
function b(){
   return "hhhhh";
}
echo a();
echo b();
?>