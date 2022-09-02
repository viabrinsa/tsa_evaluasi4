<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>BRINS GROUP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </script>
    <script>
        $(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideDown("slow");
    });
    });
    </script>
 
</head>

<body>
    <!-- Navbar -->
    <div id="flip">SELAMAT DATANG DI BRINS GROUP</div>
    <nav id="panel" class="navbar navbar-default">
        <div  class="container">
            <div  class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">BRINS GROUP</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">BERANDA</a></li>
                    <li><a href="#">SEJARAH BERDIRI</a></li>
                    <li><a href="#">CABANG</a></li>
                    <li><a href="formlogin.php" class="btn btn-default btn-light">
                        <span class="button"></span> LOGIN
                    </a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- First Container -->
    <img src="img/brins.jpg" style="width:100%;height:500px" class="img-fluid" alt="...">


    <!-- Third Container -->
    <div class="container-fluid bg-3 text-center">
        <h3 class="margin"><b>SEJARAH BRINS GROUP</b></h3>

        <div class="image">
            <img src="img/toko.jpg"style="width: 500px" alt="sejarah jamu" />
        </div>
        <br />

        <div class="text-center">
            <h4><b>SEJARAH BRINS GROUP</b></h4>
                <p>
                Brinstore didirikan oleh seorang pemudi pada tahun 2019. Brinstore menjual berbagai produk paket internet, top up game dan Brinstore sendiri juga 
                berkolaborasi dengan pedangang daging sapi yaitu Jagal Abilowo.
                </p>
        </div>

    </div>
    <!-- sixth Container (Grid) -->
    <div class="container-fluid bg-2 text-center">
        <h2 class="margin">CABANG</h2>
        <br>
        <div class="row">
          <div class="col-sm-6">
            <img
              src="img/brinstore.jpg"
              class="img-responsive margin"
              style="width:100%"
              alt="Image"
            />
            <div class="sub-judul">
              <h4><b>BRINSTORE</b></h4>
              </div>
            
          </div>
          <div class="col-sm-6">
            <img
              src="img/brincell.jpg"
              class="img-responsive margin"
              style="width:100%"
              alt="Image"
            />
            <div class="sub-judul">
              <h4><b>BRINSCELL</b></h4>
              </div>
          </div>
        </div>
    </div>
</body>

    <!-- Footer -->
    <footer class="footer bg-light">

        <div class="container">            
            <p class="text-muted small mb-4 mb-lg-0">&copy;BRINS GROUP @2022</p>
          </div>

    </footer>
    

</html>