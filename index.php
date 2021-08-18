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
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- My CSS -->
  <link rel="stylesheet" href="style.css" />

  <title>MY PORTFOLIO MFZ</title>
</head>

<body id="home">
  <!-- Navbar -->

  <nav class="navbar shadow-sm fixed-top navbar-expand-lg navbar-dark" style="background-color:  cadetblue">
    <div class="container">
      <a class="navbar-brand" href="#">Muhammad Faishal Zaky</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="kehadiran.php">MY Kegiatan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Projects</a>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Jumbotron -->
  <section class="jumbotron text-center">
    <img src="img/zaky.jpg" width="200" class="rounded-circle img-thumbnail" />
    <h2 class="display-4">Muhammad Faishal Zaky</h2>
    <h4 class="lead">( Universitas Nusa Mandiri )</h4>
    <h2 class="lead">( Teknik Informatika )</h2>
    <h2 class="lead">( 12.6A.09 )</h2>
    <h2 class="lead">( 12180260 )</h2>
    <h2 class="lead">( Mahasiswa Aktif )</h2>
    <h2 class="lead">( Front End Developer )</h2>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="cadetblue" fill-opacity="1" d="M0,96L48,122.7C96,149,192,203,288,224C384,245,480,235,576,208C672,181,768,139,864,149.3C960,160,1056,224,1152,229.3C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </section>

  <!-- Akhir Jumbotron -->

  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>About Me</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-5 text-center">
        <div class="col-4">
        </div>
        <div class="col-4">
          <p>Saya adalah mahasiswa aktif Universitas Nusa Mandiri Tangerang semester 7, jurusan Teknik informatika. Saya ingin menerapkan dan mengembangkan kemampuan saya dalam bidang Teknik Informatika yang mengusai ilmu-ilmu tentang Front end developer, Microsoft Word, Microsoft Power Point. Saya dapat bekerja dengan baik secara team ataupun independen dan berkomunikasi dengan baik.</p>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="cadetblue" fill-opacity="1" d="M0,96L48,122.7C96,149,192,203,288,224C384,245,480,235,576,208C672,181,768,139,864,149.3C960,160,1056,224,1152,229.3C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </section>

  <!-- Akhir About -->

  <!-- Projects -->
  <section id="projects">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>My Projects</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-5 text-center">
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="projects/Projects4.jpg" class="card-img-top" alt="Projects4">
            <div class="card-body">
              <p class="card-text">Bismillah</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="projects/Projects1.jpg" class="card-img-top" alt="Projects1.jpg">
            <div class="card-body">
              <p class="card-text">Bismillah</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="projects/Projects2.jpg" class="card-img-top" alt="Projects2.jpg">
            <div class="card-body">
              <p class="card-text">Bismillah</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="projects/Projects3.jpg" class="card-img-top" alt="Projects3">
            <div class="card-body">
              <p class="card-text">Bismillah</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="projects/Projects4.jpg" class="card-img-top" alt="Projects4">
            <div class="card-body">
              <p class="card-text">Bismillah</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="projects/Projects3.jpg" class="card-img-top" alt="Projects3">
            <div class="card-body">
              <p class="card-text">Bismillah</p>
            </div>
          </div>
        </div>
  </section>

  <!-- Akhir Projects -->

  <!-- Contact -->
  <section id="contact">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>Contact</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form action="kirim.php" method="POST" name="form" class="form-box">
            <label for="name">Name</label><br>
            <input type="text" name="name" class="inp" placeholder="Enter Your name" required><br>
            <label for="email">Email ID</label><br>
            <input type="email" name="email" class="inp" placeholder="Enter Your email" required><br>
            <label for="phone">Phone</label><br>
            <input type="tel" name="phone" class="inp" placeholder="Enter Your phone" required><br>
            <label for="message">message</label><br>
            <textarea name="msg" class="msg-box" placeholder="Enter Your Message Here..." required></textarea><br>
            <input type="submit" name="submit" value="Send" class="sub-btn">
          </form>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="cadetblue" fill-opacity="1" d="M0,96L48,122.7C96,149,192,203,288,224C384,245,480,235,576,208C672,181,768,139,864,149.3C960,160,1056,224,1152,229.3C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </section>
  <!-- Akhir Contact -->

  <!-- Footer -->
  <footer class="bg-primary text-white text-center">
    <p>Creadted with love by<a href="https://www.instagram.com/faishalzaky04/" class="text-white fw-bold"> Muhamamad Faishal Zaky</a></p>
  </footer>
  <!-- Akhir Footer -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>