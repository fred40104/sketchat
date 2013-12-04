<?php

require("./db_config.php");

$name = $_GET['create-name'];
$room = $_GET['create-room'];


if($name != NULL && $room != NULL) {
  $result = mysql_query("SELECT * FROM room WHERE name='$room' AND over_time IS NULL");
  $num = mysql_num_rows($result);
  if($num == 0) {
    //Allow to create room
    $time = date("H-m-d H:i:s");
    mysql_query("INSERT INTO room SET id=0, name='$room', creater='$name', create_time='$time'");
    $result = mysql_query("SELECT * FROM chatter WHERE name='$name' AND room='$room' AND leave_time IS NULL");
    $num = mysql_num_rows($result);
    if($num == 0) {
      $result = mysql_query("INSERT INTO chatter SET id=0, name='$name', room='$room', enter_time='$time'");
      header("location: ./chatroom.html?$room");
    }
    else {
      $time = date("H-m-d H:i:s");
      mysql_query("INSERT INTO err_msg SET id=0, filename='create_room.php', message='The chatter table and room table does not synchronize', time='$time'");
      header("location: ./sign.html");
    }
  }
  else if($num == 1) {
    //The room name has been used
    echo "<script>alert('The room name has been used, Please rename.'); location.href = './sign.html';</script>";
  }
  else {
    //Unexpected Error
    $time = date("H-m-d H:i:s");
    mysql_query("INSERT INTO err_msg SET id=0, filename='create_room.php', message='The chatter table and room table does not synchronize', time='$time'");
    header("location: ./sign.html");
  }
}
else {
  header("location: ./sign.html");
}


?>
