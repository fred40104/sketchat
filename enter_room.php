<?php

require_once("./db_config.php");

$name = $_GET['enter-name'];
$room = $_GET['enter-room'];

if($name != NULL && $room != NULL) {
  $result = mysql_query("SELECT * FROM room WHERE name='$room'");
  $num = mysql_num_rows($result);
  if($num == 0) {
    //The room does not exist
    echo "<script>alert('The room does not exist'); location.href = './sign.html';</script>";
  }
  else if($num == 1) {
    $result = mysql_query("SELECT * FROM chatter WHERE name='$name' AND room='$room' AND leave_time IS NULL");
    $num = mysql_num_rows($result);
    if($num == 0) {
      //Fresh chatter, allow to enter the room
      $time = date("H-m-d H:i:s");
      mysql_query("INSERT INTO chatter SET id=0, name='$name', room='$room', enter_time='$time'");
      header("location: ./chatroom.html?$room");
    }
    else if($num == 1) {
      //The chatter has been chatting in that room now, no more access
      echo "<script>alert('There is a same chatter at the same room'); location.href = './sign.html';</script>";
    }
    else {
      //Unexpected Error: There are two chatter are the same name
      $time = date("H-m-d H:i:s");
      mysql_query("INSERT INTO err_msg SET id=0, filename='enter_room.php', message='There are two same room name at the same time', time='$time'");
      header("location: ./sign.html");
    }
  }
  else {
    //There are two same room name 
    $time = date("H-m-d H:i:s");
    mysql_query("INSERT INTO err_msg SET id=0, filename='enter_room.php', message='There are two same room name at the same time', time='$time'");
    header("location: ./sign.html");
  }
}
else {
  header("location: ./sign.html");
}


?>
