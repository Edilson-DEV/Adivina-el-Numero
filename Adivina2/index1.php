<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap4-neon-glow.min.css">


    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    <title>Adivina el numero...</title>

</head>

<body>
    <div class="navbar-dark text-white">
        <div class="container">
            <nav class="navbar px-0 navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a href="/Adivina/index.html" class="pl-md-0 p-3 text-light">Menu Principal</a>
                    </div>
                </div>
            </nav>

        </div>
    </div>





    <div class="jumbotron bg-transparent mb-0 radius-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <h1 class="display-2">Adivina el <span class="vim-caret">Numero</span></h1>



                    <form action="index1.php" method="post" class="row">
                        <div class="col-12  ">
                            <label for="">Ingrese el numero</label>
                            <input type="text" class="form-control" name="txtnumero">
                        </div> <br><br>
                        <div class="col-12 d-flex justify-content-center mt-4">
                            <button type="submit" class="btn btn-success btn-shadow px-3 my-2 ml-0 text-left" name="btnjugar" value="jugar">JUGAR</button>
                            <button type="submit" class="btn btn-primary btn-shadow px-3 my-2 ml-0 text-left" name="nuevo" value="restart">NUEVO
                                JUEGO</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="col-12">
            <div class="alert alert-success" role="alert">
                <?php
              include "controlador.php";
              $juego= new JuegoController();

              if(isset($_REQUEST['btnjugar'])=='jugar'){
                  $juego->setNumero(($_REQUEST['txtnumero']));
                  ?>
                <strong> <?php echo $juego->StarGame(); ?> </strong>
                <?php
              }elseif (isset($_REQUEST['nuevo'])=='restart') {
                session_destroy();

                header("location:../index.php");
              }

              ?>

            </div>

        </div>
    </div>

</body>

</html>