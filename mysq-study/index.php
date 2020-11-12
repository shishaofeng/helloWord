<?php
header('content-type:text/html;charset=utf-8');
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '123456';
$conn = mysqli_connect($dbhost,$dbuser,$dbpass); // 链接句柄
// var_dump($conn);
if(!$conn){
    die('Could not connect: ' . mysqli_error());
  // code...
}else {
  echo '连接成功';
  echo '</br>';
  $create_data_base =  "CREATE DATABASE  IF NOT EXISTS mydatabase";
  $retval = mysqli_query( $conn, $create_data_base);
  if(!$retval){
      die('创建数据库失败: ' . mysqli_error($conn));
  }else {
    // code...

    echo '</br>';
    echo '数据库创建成功';
    echo '</br>';
  }


  $sql = "CREATE TABLE phpstudy( ".
          "id INT NOT NULL AUTO_INCREMENT, ".
          "submission_date DATE, ".
          "PRIMARY KEY ( id ))ENGINE=InnoDB DEFAULT CHARSET=utf8; ";

  mysqli_select_db( $conn, 'mydatabase' );
  $retval = mysqli_query( $conn, $sql );
  if(! $retval )
  {
      die('数据表创建失败: ' . mysqli_error($conn));
  }else {
    echo "数据表创建成功\n";

  }

}



// <?php
// $dbhost = 'localhost';  // mysql服务器主机地址
// $dbuser = 'root';            // mysql用户名
// $dbpass = '123456';          // mysql用户名密码
// $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
// if(! $conn )
// {
//     die('Could not connect: ' . mysqli_error());
// }
// echo '数据库连接成功！';
// mysqli_close($conn);
//
