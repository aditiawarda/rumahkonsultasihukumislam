<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: user-profile.php");
        } 
    }
    else
            header("Location: user-login.php?message=error-login");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login Klien</title>
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
          <div class="col-md-12 mb-0"><font color="FFFFFF">Klien<span class="mx-2 mb-0">/</span> <strong class="text-black">Login</strong></font> </div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Login disini</h2>
          </div>
          <div class="col-md-7">
          	
            
              
              <div class="p-3 p-lg-5 border">

                <?php 
                    if (!empty($_GET['message']) && $_GET['message'] == 'success-regist') {
                      echo '<div class="alert alert-success">Registrasi berhasil. Silahkan login</div>';
                    }
                    else if (!empty($_GET['message']) && $_GET['message'] == 'success-update') {
                      echo '<div class="alert alert-success">Data berhasil dirubah. Silahkan login kembali</div>';
                    }
                    else if (!empty($_GET['message']) && $_GET['message'] == 'error-login') {
                      echo '<div class="alert alert-danger">Login gagal. pastikan data benar</div>';
                    }
                    else if (!empty($_GET['message']) && $_GET['message'] == 'success-delete') {
                      echo '<div class="alert alert-success">Akun berhasil dihapus. login dengan akun lain</div>';
                    }
                ?> 

                <form action="" method="post">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Username<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="username" required autofocus />
                  </div>
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Password<span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="c_fname" name="password" required autofocus />
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <input type="submit" name="login" class="btn btn-success btn-lg btn-block" value="Login">
                  </div>
                  <div class="col-md-6">
                    <p>Daftar akun baru? <a href="user-register.php">Buat akun</a></p>
                  </div>
                </div>
              </div>
            </form>
            <br>
          <br>
          </div>
          
          <div class="col-md-5 ml-auto">
            <div class="p-4 border mb-3">
            <center>
              <img src="images/banner.jpg" width="418" heigth="140">
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