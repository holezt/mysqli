<?php include"config.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $d['nama_usaha']; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="" method="POST">
        <h2 class="form-signin-heading">Login Pelanggan</h2>
        <label for="inputText" class="sr-only">Email address</label>
        <input type="text" id="inputText" class="form-control" name="nama" placeholder="Nama" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="idvoucer" class="form-control" placeholder="Kode Voucer" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Ingatkan saya
          </label>
        </div>
        <input class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="Login">
      </form>

    </div> <!-- /container -->
  </body>
</html>
<?php
include"config.php";
    if (isset($_POST['nama'])){
//	echo"<script>alert('hello');</script>";

		$nama = stripslashes($_REQUEST['nama']); // removes backslashes
		$nama = $conn->real_escape_string($nama); //escapes special characters in a string
		$idvoc = stripslashes($_REQUEST['idvoucer']);
		$idvoc = $conn->real_escape_string($idvoc);
		
	//Checking is user existing in the database or not
	 
  $query = $conn->query("SELECT * FROM pelanggan WHERE nama_pelanggan='$nama' AND id_voucer='$idvoc'");
		$rows = $query->num_rows();//error terus
        if($rows==1){
			$_SESSION['namas'] = $nama;
			header("Location: index.php"); // Redirect user to index.php
            }else{
               echo"tidak ada nama ".$nama;
            }
     }
?>