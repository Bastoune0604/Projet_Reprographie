<?php
	// On démarre la session AVANT toute chose
	session_start(); 
	
	// S'il n'a rien a faire ici 
	if($_SESSION['statut'] !== "Reprographie"){
		include("../scripts/deconnexion.php");
		deconnexion_site();
	}
?>
<!doctype html>
<html lang="fr">
    <head>
    
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Daily Print">
        <meta name="keywords" content="HTML,CSS, PHP, JavaScript">
        <meta name="author" content="Daily Print TEAM">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		
		<!-- My css -->
        <link rel="stylesheet" href="../css/style.css">       
		
        <title>Daily Print | Les demandes</title>
        
    </head>
    <body>
    
        <!-- Navbar -->
		<nav class="nav nav-pills nav-justified navbar-dark bg-dark">
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
				<a class="nav-item nav-link active" href="repro-visual.php">Les demandes</a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
				<a class="nav-item nav-link" href="repro-stat.php">Statistiques</a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
				<a class="nav-item nav-link" href="param.php">Paramètres</a>
			</div> 
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
				<a class="nav-item nav-link" href="../scripts/deconnexion.php">Se déconnecter</a>
			</div> 
		</nav>
        
		<content class="container" role="main">
		
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-4 col-lg-4"></div>
                <div class="col-xs-8 col-sm-8 col-md-4 col-lg-4">
                    <img src="../img/logo.png" class="img-fluid" alt="Responsive image" />
                </div>
                <div class="col-xs-2 col-sm-2 col-md-4 col-lg-4"></div>
            </div>
			
            <br/>
			
            <div class="row ">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
				
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 panel">
				
                    <legend class="color-blue">Les demandes : </legend>
					
					<!-- Div modifiée par le js -->
					<div id="data">
						<table class="table table-hover table-bordered table-responsive">
							<thead>
								<tr class="background-black">
									<th scope="col" class="center">#</th>
									<th scope="col" class="center col-xs-4 col-sm-4 col-md-4 col-lg-4">Numéro de la demande</th>
									<th scope="col" class="center col-xs-4 col-sm-4 col-md-4 col-lg-4"> Demandeur </th>
									<th scope="col" class="center col-xs-4 col-sm-4 col-md-4 col-lg-4"> Etat de la demande </th>
								</tr>
							</thead>
					</div>
					
				</div>
				
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
			</div>
		</content>

		<!-- Modal -->
		<div class="modal fade" id="requestInfo" tabindex="-1" role="dialog" aria-labelledby="request" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="modalCenterTitle">Information sur la demande</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
					</div>
				</div>
			</div>
		</div>





        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="../js/repro-visual.js"></script>
        
    </body>
</html>