
<!DOCTYPE html>
	<html>

<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/bootstrap4-neon-glow.min.css">
    
    
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
	<title>Adivina el numero...</title>

</head>

<body>
<div class="navbar-dark text-white">
    <div class="container">
      <nav class="navbar px-0 navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
			<a href="index.html" class="pl-md-0 p-3 text-light">Start</a>
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
		  <p class="mt-5 text-grey text-spacey">
	<form action="index.php" method="post">
		Ingrese el numero:<input type="text" name="txtnumero">
		<input type="submit" name="btnjugar" value="JUGAR"/>
		<input type="submit" name="btnnumero" value="NUEVO JUEGO"/>
		</p>      
        </div>
      </div>
  </div>
</div>  

	</form>
	<?php 
	session_start();
	error_reporting(E_ALL^E_NOTICE);
	if (isset($_POST['txtnumero'])) {
		# code...
		$numero=$_POST['txtnumero'];
		//echo $numeros;
		$_SESSION['I']=$_SESSION['I']+1;
		$_SESSION['A'][$_SESSION['I']-1][0]=$numero;

		if ($numero==""||$numero<1||$numero>100) {
			# code...
			header("location:index.php");
			session_destroy();
		}
		if(isset($_SESSION['aleatorio'])==false){

			$_SESSION['contador']=0;
			$_SESSION['aleatorio']=rand(1,100);
        }
        if (isset($_SESSION['aleatorio'])) {
        	# code...
        	$_SESSION['contador']=$_SESSION['contador']+1;
        	if ($_SESSION['aleatorio']<$numero) {
        		# code...
        		$_SESSION['A'][$_SESSION['I']-1][0]=  $numero."es alto";
        	}
        	elseif ($_SESSION['aleatorio']>$numero) {
        		# code...
        		$_SESSION['A'][$_SESSION['I']-1][0]=$numero."es bajo";
        	}
        	elseif ($_SESSION['aleatorio']==$numero) {
        		# code...
        		$_SESSION['A'][$_SESSION['I']-1][0]=$numero."ADIVINASTE! en ".$_SESSION['contador']." intentos";
        	}
        	for ($i=0; $i <$_SESSION['I'] ; $i++) { 
        		# code...
        		echo $_SESSION['A'][$i][0]."<br>";
        	}
        }
	}
	if (isset($_GET['btnnumero'])) {
		# code...
		session_destroy();
	}

	?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>