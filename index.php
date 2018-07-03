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
    <link rel="icon" href="../favicon.ico">
    <title><?php echo $d['nama_usaha']; ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/offcanvas.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>  
    <script type="text/javascript" src="js/offcanvas.js"></script>
   </head>
<body>
       <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
          <?php echo $d['nama_usaha']; ?></a>
        </div>
       <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">Profil</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kontak <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">HP/WA : 0856-0081-2768</a></li>
                <li><a href="#">Email : jarwonozt@yahoo.com</a></li>
                <li><a href="#">Facebook : HoleztID</a></li>
              
              </ul>
            </li>
          </ul>          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
 </ul>
    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Pelanggan</button>
          </p>
          <div class="jumbotron">
            <h1>Hello, User</h1>
            <p>
               <?php echo $d['info']; ?>
            </p>
            
          </div>
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item active"><?php echo $d['nama_usaha']; ?></a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; 
        <?php 
        echo date("Y ");
         echo $d['nama_usaha']; 
        ?>, HOSPOT</p>
      </footer>

    </div><!--/.container-->

</body>
</html>