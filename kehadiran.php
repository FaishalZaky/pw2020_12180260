<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>MY Kegiatan Setiap Hari</title>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    body {
      background: cadetblue;
    }

    h2 {
      text-align: center;
    }
  </style>
</head>

<body>
  <h2>Kegiatan Seminggu</h2>
  <hr />
  <table>
    <tr>
      <th>Belajar Ngoding</th>
      <td>6 Jam x 7 Hari = 42 Jam</td>
    </tr>
    <br />
    <tr>
      <th>Ngaji</th>
      <td>1 Jam x 7 Hari = 7 Jam</td>
    </tr>
    <br />
    <tr>
      <th>Belajar Bahasa Ingrris</th>
      <td>1 Jam x 7 Hari = 7 Jam</td>
    </tr>
    <br />
    <tr>
      <th>Olahraga</th>
      <td>2 Jam x 7 Hari = 14 Jam</td>
    </tr>
    <br />
    <tr>
      <th>Tidur</th>
      <td>8 Jam x 7 Hari = 56 Jam</td>
    </tr>
    <br />
    <tr>
      <th>Sosialisasi</th>
      <td>3 Jam x 7 Hari = 21 Jam</td>
    </tr>
    <br />
    <tr>
      <th>Istirahat</th>
      <td>3 Jam x 7 Hari = 21 Jam</td>
    </tr>
    <br>
    <tr>
      <th>Total</th>
      <td>168 Jam/PerMinggu</td>
    </tr>
  </table>

  <br />
  <br />
  <br />
  <hr />
  <a class="nav-link" name="nav-item" href="index.php">Kehalaman MY Portfolio</a>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#92e2d2" fill-opacity="1" d="M0,96L48,122.7C96,149,192,203,288,213.3C384,224,480,192,576,165.3C672,139,768,117,864,106.7C960,96,1056,96,1152,112C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>
</body>

</html>