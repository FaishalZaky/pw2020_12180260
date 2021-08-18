<?php
session_start();

if (isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}

require "connect.php";

// ketika tombol login ditekan
if (isset($_POST["masuk"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];

  if ($hasil = mysqli_query(
    $connect,
    "SELECT * FROM users WHERE email = '$email'"
  )) {
    $users = mysqli_fetch_assoc($hasil);
    if ($password == $users["password"]) {
      // set session
      $_SESSION['login'] = true;

      header("Location: index.php");
      exit;
    }
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>LOGIN MY PORTFOLIO MFZ</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="style.css" />
  <style type="text/css">
    h1 {
      text-align: center;
      border-style: dotted;
      border-width: 15px;
      text-shadow: 2px 2px white;

    }

    h3 {
      text-align: center;
      color: beige;
    }

    h2 {
      text-align: center;
      color: beige;
    }

    h4 {
      text-align: center;
      color: black;
    }

    h4 {
      text-align: center;
      color: black;
    }

    label {
      color: black;
    }

    body {
      font-family: 'Exo 2', sans-serif;
      background-color: cadetblue;
    }

    from-group {
      text-align: center;
    }

    div {
      text-align: center;
      background: cadetblue;
    }
  </style>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container">
    <h1>LOGIN</h1>
    <h2>SELAMAT DATANG</h2>
    <h4>Di Portfolio Muhammad Faishal Zaky</h4>
    <h4>( SILAKAN LOGIN TERLEBIH DAHULU AGAR BISA MASUK KE PORTFOLIO SAYA )</h4>
    <hr />

    <form action="" method="POST">
      <div id="frame">
        <div class="form-group">
          <label>Email :</label>
          <br />
          <input type="text" name="email" required />
        </div>

        <div class="form-group">
          <br />
          <label>Password :</label>
          <br>
          <input type="password" name="password" required />
        </div>
        <br />
        <div class="form-group">
          <button type="submit" name="masuk">MASUK</button>
          <br />
          <a href="register.php">
            <h4>REGISTER</h4>
          </a>
        </div>
      </div>
  </div>
  </form>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#92e2d2" fill-opacity="1" d="M0,96L48,122.7C96,149,192,203,288,213.3C384,224,480,192,576,165.3C672,139,768,117,864,106.7C960,96,1056,96,1152,112C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>
</body>

</html>