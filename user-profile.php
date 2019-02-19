<?php require_once("user-auth.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Profil Klien</title>
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
          <div class="col-md-12 mb-0"><font color="FFFFFF">Klien <span class="mx-2 mb-0">/</span> <strong class="text-black">Profil Klien </font></strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 ml-auto">
          <div class="p-4 border mb-3">
          <center>
                <img src="images/kuf1.png" width="411" height="140">
                </center>
              </div>
  	        <div class="p-4 border mb-3">
              <div class="card-body text-center">
                <center><img class="img img-responsive rounded-circle mb-3" width="200" src="user/<?php echo $_SESSION['user']['image'] ?>" /></center>
                  <h2><?php echo  $_SESSION["user"]["fullname"] ?></h2>
                  <p><?php echo $_SESSION["user"]["email"] ?></p>
                  <hr>
                  <ul class="list-group">
                    <li class="list-group-item"><h4>Username saya <?php echo $_SESSION["user"]["username"] ?></h4></li>
                    <li class="list-group-item"><h4><?php echo $_SESSION["user"]["city"] ?> +62 <?php echo $_SESSION["user"]["phone"] ?></h4></li>
                    <li class="list-group-item"><h4><?php echo $_SESSION["user"]["gender"] ?></h4></li>
                  </ul>
                  <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-success"><a href="user-setting.php?id=<?php echo $_SESSION['user']['id']; ?>"><font color="white">Pengaturan</font></a></button>
                    <button type="button" class="btn btn-success"><a href="user-logout.php" onclick="return confirm('Anda yakin ingin logout?')"><font color="white">Logout</font></a></button>
                  </div>
              </div>
              
            </div>
            
          </div>
          <div class="col-md-7">
            <div class="p-3 p-lg-5 border">

                  <?php 
                    if (!empty($_GET['message']) && $_GET['message'] == 'success') {
                      echo '<div class="alert alert-success">Berhasil terkirim</div>';
                    }
                    else if (!empty($_GET['message']) && $_GET['message'] == 'failed') {
                      echo '<div class="alert alert-danger">Gagal terkirim</div>';
                    }
                  ?> 

            <h3>Ruang Berbagi</h3>

             <div class="card mb-3">
              <div class="card-body">
               <form action="featur-status.php" method="post" />
                <input type="hidden" name="fullname" value="<?php echo $_SESSION['user']['fullname']; ?>">
                  <div class="form-group">
                      <textarea class="form-control" name="testi" placeholder="Apa yang ingin kamu bagikan?"></textarea>
                      <input type="submit" name="status" class="btn btn-sm btn-success btn-lg btn-block" value="Bagikan">
                  </div>
                 </form>
                </div>
              </div>

                  <h3>Linimasa</h3>

              <?php
                $link = mysqli_connect("localhost", "root", "", "db-rkhi");

                $result = mysqli_query($link, "select * from testimoni order by dt DESC limit 3");
                  while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {

              ?>

              <div class="card mb-3">
                <div class="card-body">
                  <div class="form-group row">
                    <div class="col-md-6">
                      <p align="left"><strong><h4><?php echo $row["fullname"]; ?></h4></strong></p>
                    </div>
                    <div class="col-md-6">
                      <p align="right"><?php echo $row["dt"]; ?></p>
                    </div>
                  </div>
                  <div class="card mb-3">
                    <div class="card-body">
                      <p><?php echo $row["testi"]; ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>
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