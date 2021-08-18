<?php
include "connect.php";
// menangkap data yang di kirim dari form
if (isset($_POST["kirim"])) {
  $nama = $_POST["nama_lengkap"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $no_handphone = $_POST["password"];
  $jenis_kelamin = $_POST["jenis_kelamin"];
  $file = $_POST["file"];
  //menginput data ke database
  mysqli_query($connect, "INSERT INTO users VALUES('','$nama','$email','$password','$no_handphone','$jenis_kelamin','$file')");

  // mengalihkan halaman kembali ke index.php
  header("location:login.php");

  echo "Register telah tersimpan";
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>REGISTRASI MY PORTFOLIO MFZ</title>
  <style type="text/css">
    h1 {
      text-align: center;
      border-style: dotted;
      border-width: 15px;
      text-shadow: 2px 2px white;
    }

    h3 {
      text-decoration: underline;
    }

    h4 {
      text-decoration: underline;
    }

    body {
      background-color: cadetblue;
    }

    input {
      background: burlywood;
    }
  </style>
</head>

<body>
  <form action="" method="POST">
    <h1>REGISTRASI</h1>
    <hr />
    <h3>Nama Lengkap :</h3>
    <input type="text" name="nama_lengkap" />

    <br />
    <h3>Email :</h3>
    <input type="email" name="email" />

    <br />

    <h3>Password :</h3>
    <input type="password" name="password" />

    <br />
    <h3>No.Handphone :</h3>
    <input type="text" name="no_handphone" />

    <br />
    <hr />

    <h3>Jenis Kelamin :</h3>
    <input type="radio" name="jenis_kelamin" value="Pria" />Pria
    <input type="radio" name="jenis_kelamin" value="Wanita" />Wanita

    <br />
    <hr />

    <h4>Kartu KTP/KTM :</h4>
    <input type="file" name="file" />

    <br />
    <hr />
    <button type="submit" name="kirim">REGISTER</button>
    <a href="login.php">Kembali KeHalaman Login</a>
  </form>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#92e2d2" fill-opacity="1" d="M0,96L48,122.7C96,149,192,203,288,213.3C384,224,480,192,576,165.3C672,139,768,117,864,106.7C960,96,1056,96,1152,112C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>
</body>

</html>