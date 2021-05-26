<?php 
require 'functions.php';

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
      echo "<script>
              alert('Registrasi Berhasil');
              document.location.href = 'login.php';
          </script>";
  } else {
      echo "<script>
                alert('Registrasi Gagal!');
          </script>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrasi | Asrillper Watch</title>
  <style type="text/css">

    body {
      background-image: url(assets/img/bg2.jpg);
    }

    .bg-login {
      display: flex;
      height: 100vh;
      justify-content: center;
      align-items: center;
    }
    
  </style>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
</head>

<body class="bg-login">

  <div class="box-login">
    <h2>REGISTRASI</h2>
    <form action="" method="POST">
      <input type="text" name="user" placeholder="Username" class="input-control">
      <input type="password" name="pass" placeholder="Password" class="input-control">
      <input type="submit" name="register" value="REGISTER" class="btn">
    </form>
  </div>

</body>
</html>