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
        <?php 
            session_start(); 
            if ($_SESSION['status'] == 'login'){ 
                
            } 
        ?> 
    <!-- Navbar -->
    <div id="flip">SELAMAT DATANG <?php echo $_SESSION['username'] ?></div>
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
                    <li><a href="#">WISATA</a></li>
                    <li><a href="" class="btn btn-default btn-light">
                        <span class="button"></span> LOGOUT
                    </a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- First Container -->
    <img src="img/bgkediri.jpg" style="width:100%;height:500px" class="img-fluid" alt="...">


    <!-- Third Container -->
    <div class="container-fluid bg-3 text-center">
        <h3 class="margin"><b>SEJARAH KEDIRI</b></h3>

        <div class="image">
            <img src="img/bgkediri.jpg"style="width: 800px" alt="sejarah jamu" />
        </div>
        <br />

        <div class="text-center">
            <h4><b>SEJARAH KERAJAAN KEDIRI</b></h4>
                <p>
                Wilayah kerajaan Raja Airlangga dikenal sebagai Kahuripan. 
                Pembagian kerajaan tersebut dilakukan Brahmana sakti bernama Empu Bharada. 
                Kedua kerajaan tersebut dikenal sebagai Kerajaan Jenggala (Kahuripan) 
                dan Panjalu (Kediri). Kerajaan ini dibatasi oleh Gunung Kawi 
                dan Sungai Brantas, seperti dikisahkan dalam prasasti Mahaksubya (1289 M), 
                kitab Negarakertagama (1365 M), dan kitab Calon Arang (1540 M).
                </p>
        </div>

    </div>
    <!-- sixth Container (Grid) -->
    <div class="container-fluid bg-2 text-center">
        <h2 class="margin">INFORMASI WISATA</h2>
        <br>
        <div class="row">
          <div class="col-sm-4">
            <img
              src="img/kelud.jpg"
              class="img-responsive margin"
              style="width:100%"
              alt="Image"
            />
            <div class="sub-judul">
              <h4><b>Gunung Kelud</b></h4>
              </div>
            <p>
            Wisata Gunung Kelud menjadi destinasi yang menarik untuk dikunjungi. Setelah meletus beberapa tahun lalu, 
            Gunung Kelud menjadi salah satu tempat wisata yang selalu ramai dikunjungi saat hari libur....<a href="">Selengkapnya</a>
            </p>
            
          </div>
          <div class="col-sm-4">
            <img
              src="img/korea.jpg"
              class="img-responsive margin"
              style="width:100%"
              alt="Image"
            />
            <div class="sub-judul">
              <h4><b>Kampung Korea</b></h4>
              </div>
            <p>
            Area bertema dengan model rumah Korea, pohon berbunga & rental pakaian tradisional "hanbok"...<a href="">Selengkapnya</a>
            </p>
          </div>
          <div class="col-sm-4">
            
            <img
              src="img/candy.jpg"
              class="img-responsive margin"
              style="width:100%"
              alt="Image"
            />
            <div class="sub-judul">
              <h4><b>Dunia Candy</b></h4>
              </div>
            <p>
            Wisata Dunia Candy merupakan sebuah tempat wisata baru yang dikhususkan untuk keluarga.
            lokasinya tidak terlalu jauh dari pusat Kota Kediri atau tepatnya berada di Sukorejo, Wates, Kediri....<a href="">Selengkapnya</a>
            </p>
          </div>
        </div>
    </div>
</body>

    <!-- Footer -->
    <footer class="footer bg-light">

        <div class="container">            
            <p class="text-muted small mb-4 mb-lg-0">&copy; Kediri asik @2022</p>
          </div>

    </footer>
    

</html>