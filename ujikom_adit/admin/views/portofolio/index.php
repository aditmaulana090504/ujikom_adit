<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio</title>
    <!-- CSS Bootsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
<link rel="stylesheet" href="<?=BASEURL;?>/asset/css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
<link style="border-radius: 100%;" rel="icon" href="">
  <title>Portofolio</title>
  </head>
  <body>
    
    <!--- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black">
      <div class="container">
          <a class="navbar-brand" href="#home"><img class="rounded-circle" src="<?=BASEURL;?>/asset/img/images.jpg" width="30" height="30"></a>
        <a class="navbar-brand" href="#home">aditmaulana</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Project</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a></li>
              </ul>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    <!--jumbotron-->
<section class="jumbotron text-center">
    <div class="jumbotron text-center">
      <img src="http://localhost/ujikom_adit/public/asset/img/images.jpg" alt="" width="200" height="200" class="rounded-circle img-thumbnail"/>
      <h1 class="display-4">Adit</h1>
      <p class="lead">Siwa | SMKN 4 Tasikmalaya.</p>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,128L48,154.7C96,181,192,235,288,224C384,213,480,139,576,112C672,85,768,107,864,133.3C960,160,1056,192,1152,202.7C1248,213,1344,203,1392,197.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
    <!-- akhir jumbotron -->
    <!-- About -->
    <section id="about">
      <div class="container">
        <div clas="row text-center mb-3">
          <div class="col">
            <h2>About me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <p>aditmaulana</p>
          </div>
          <div class="col-4">
            <p>welcome</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir About -->
<!--Project-->
<section id="project">
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <h2>My Project</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="http://localhost/ujikom_adit/public/asset/img/1.jpg" class="card-img-top" alt="img1">
          <div class="card-body">
            <p class="card-text">Pangandaran beach</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="http://localhost/ujikom_adit/public/asset/img/2.jpg" class="card-img-top" alt="img2">
          <div class="card-body">
            <p class="card-text">family 12 rpl 3</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="http://localhost/ujikom_adit/public/asset/img/3.jpg" class="card-img-top" alt="img3">
          <div class="card-body">
            <p class="card-text">healing</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#5000ca" fill-opacity="1" d="M0,288L21.8,288C43.6,288,87,288,131,245.3C174.5,203,218,117,262,117.3C305.5,117,349,203,393,218.7C436.4,235,480,181,524,149.3C567.3,117,611,107,655,122.7C698.2,139,742,181,785,208C829.1,235,873,245,916,234.7C960,224,1004,192,1047,170.7C1090.9,149,1135,139,1178,144C1221.8,149,1265,171,1309,197.3C1352.7,224,1396,256,1418,272L1440,288L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path></svg>
</section>
<!--akhir Project-->

<!--Contact-->
<section id="contact">
  <div class="container">
    <div class="row text-center text-light">
      <div class="col">
        <h2>Contact me</h2>
      </div>
    </div>
    
    <div class="row justify-content-center mb-3">
      <div class="col-md-8">
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="Text" class="form-control" id="name" aria-describedby="name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="email">
          </div>
          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#343a40" fill-opacity="1" d="M0,128L40,133.3C80,139,160,149,240,170.7C320,192,400,224,480,234.7C560,245,640,235,720,213.3C800,192,880,160,960,160C1040,160,1120,192,1200,181.3C1280,171,1360,117,1400,90.7L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
  <!--Akhir Contact-->
  
  <!--footer-->
  <footer class="bg-dark text-white text-center p-2">
    <p>Created with Hand by <a href="https://www.youtube.com/channel/UCQ6FpdTxvBcTj0UQfbZR58A" class="text-white font-weight-bold">adit</a></p>
  </footer>
<!--akhir footer-->

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>