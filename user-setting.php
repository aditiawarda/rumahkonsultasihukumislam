<?php
require_once("user-auth.php");
require_once("config.php");


if(isset($_POST['edit'])){

  if(isset($_POST) && !empty($_FILES['image']['name'])){

    $name = $_FILES['image']['name'];

	  $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = $_POST['email'];

    list($txt, $ext) = explode(".", $name);
    $image_name = time().".".$ext;
    $tmp = $_FILES['image']['tmp_name'];

if(move_uploaded_file($tmp, 'user/'.$image_name)){
      $sql = "UPDATE users SET image='$image_name', fullname='$fullname', gender='$gender', username='$username', city='$city', phone='$phone', email='$email', password='$password' WHERE id='$id' ";
      //echo "<img width='200px' src='upload/".$image_name."' class='preview'>";

      $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
    	":id" => $id,
      ":image" => $image_name,
      ":name" => $name,
      ":gender" => $gender,
      ":username" => $username,
      ":city" => $city,
      ":phone" => $phone,
      ":password" => $password,
      ":email" => $email
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: user-login.php");
    header("Location: user-login.php?message=success-update");
}
}
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pengaturan Klien</title>
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
          <div class="col-md-12 mb-0"><font color="FFFFFF">Klien <span class="mx-2 mb-0">/</span> <strong class="text-black">Pengaturan Data Klien</strong></font></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Pengaturan Akun</h2>
          </div>
          <div class="col-md-7">

            <form action="" enctype="multipart/form-data" class="form-horizontal" method="post"> 
              <input type="hidden" name="id" value="<?php echo $_SESSION["user"]["id"] ?>" />
              <div class="p-3 p-lg-5 border">
              	<div class="form-group row">
                  <div class="col-md-6">
                    <center>
                    <br>
                		<img class="img img-responsive rounded-circle mb-3" width="180" src="user/<?php echo $_SESSION['user']['image'] ?>" />
                    </center>
              	  </div>
                  <div class="col-md-6">
                    <p><font size=4>Assalamualaikum <?php echo $_SESSION['user']['fullname'] ?> senang bisa mengenal anda, konsultasikan permasalahan anda di RKHI, dengan senang hati kami akan membantu.</font>
                    <br><br>
                    Telepon : 0<?php echo $_SESSION['user']['phone'] ?>
                    <br>
                    Kota &nbsp&nbsp;&nbsp&nbsp;: <?php echo $_SESSION['user']['city'] ?>
                    </p>
                  </div>
              	</div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Foto Profil <span class="text-danger">*</span></label>
                    <input type="file" name="image" class="form-control" required autofocus />
                  </div>
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Nama <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="fullname" required="required" value="<?php echo  $_SESSION["user"]["fullname"] ?>" />
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Jenis Kelamin : <?php echo  $_SESSION["user"]["gender"] ?></label>
                    <select name="gender" class="form-control" required>
                      <option value="">Jenis Kelamin</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>

                
                 <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Kota : <?php echo  $_SESSION["user"]["city"] ?></label>
                    <input type="text" class="form-control" id="c_fname" name="city" placeholder="Your City" value="<?php echo  $_SESSION["user"]["city"] ?>" required="required"/>
                  </div>
                  <div class="col-md-6">
                  <label for="c_fname" class="text-black">Telepon : 0<?php echo $_SESSION["user"]["phone"] ?></label>
                    <input type="text" class="form-control" id="c_fname" name="phone" required="required" value="<?php echo  $_SESSION["user"]["phone"] ?>" placeholder="New phone number" />
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Username <span class="text-danger">*</span></label>
                     <input type="text" class="form-control" id="c_fname" name="username" required="required" value="<?php echo  $_SESSION["user"]["username"] ?>"/>
                  </div>
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="email" required="required" value="<?php echo  $_SESSION["user"]["email"] ?>"/>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" required="required" id="c_subject" name="password" placeholder="Password baru. Jika password tidak dirubah masukan password asal"/>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-6">
                    <input type="submit" class="btn btn-success btn-lg btn-block" name="edit" value="Simpan">
                  </div>
                  <div class="col-md-6">
                    <p>Kembali ke profil? <a href="user-profile.php?id=<?php echo $_SESSION["user"]["id"] ?>">Lihat</a></p>
                  </div>
                  <div class="col-md-6">
                  <br>
                     <p>Hapus akun?<a href="user-delete.php?id=<?php echo $_SESSION["user"]["id"] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus akun?')"><span class="text-danger"> Hapus akun</span></a>
                  </div>
                </div>
              </div>
            </form>
            <br>
          </div>
          <div class="col-md-5 ml-auto">
            <div class="p-4 border mb-3">
            <center>
              <img src="images/kufi.png" width="400" height="855">
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