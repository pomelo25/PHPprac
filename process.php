<?php
  $sql = "insert into topic (title, description, author, created) values('".$_POST['title']."', '".$_POST['description']."', '".$_POST['author']."', now())";
  
  $conn = mysqli_connect("localhost", "root", 111111);
  mysqli_select_db($conn, 'opentutorials');
  $result = mysqli_query($conn, $sql);
  header("Location: http://localhost/index.php");
?>
