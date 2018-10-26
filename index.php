<?php
if(!empty($_POST['username']) && !empty($_POST['password']) ) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if($username == 'chris' && $password == 'may') {
    redirect('index.php');
  }
}
mysqli_close($conn);
?>