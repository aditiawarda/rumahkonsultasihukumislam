<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registratisi Klien</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="images/icons/fav.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
        <div class="center">

<div class="text-center">
  <div class="site-logo">
    <a href="index.php" class="js-logo-clone">RUMAH KONSULTASI HUKUM ISLAM</a>
  </div>
</div>

</div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
        
        </div>
      </nav>
    </header>

    <div class="bg-success py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><font color="FFFFFF">Klien <span class="mx-2 mb-0">/</span> <strong class="text-black">Registrasi Klien</strong></font></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Buat akun baru</h2>
          </div>
          <div class="col-md-7">

            <form action="user-register-proses.php" enctype="multipart/form-data" class="form-horizontal" method="post"> 
              
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Nama <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="fullname" required autofocus />
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Foto Profil <span class="text-danger">*</span></label>
                    <input type="file" name="image" class="form-control" required autofocus />
                  </div>
                  <div class="col-md-6">
                   <label for="c_fname" class="text-black">&nbsp;</label>
                    <select name="gender" class="form-control" required>
                      <option value="">Jenis Kelamin</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_lname" class="text-black">Username <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="username" required autofocus />
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="email" placeholder="" required autofocus />
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="c_subject" name="password" required autofocus />
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-6">
                    <input type="submit" class="btn btn-success btn-lg btn-block" name="register" value="Buat akun">
                  </div>
                  <div class="col-md-6">
                    <p>Sudah punya akun? <a href="user-login.php">login</a></p>
                  </div>
                </div>
              </div>
            </form>
            <br>
          </div>
          <div class="col-md-5 ml-auto">
          <div class="p-4 border mb-3">
            <center>
              <img src="images/kalig.png" width="413">
            </center>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer border-top bg-success py-3">
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p><font color="FFFFFF">
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> aditiawar All rights reserved
            </font>
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>