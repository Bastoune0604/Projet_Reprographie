<?php
	// On démarre la session AVANT toute chose
	session_start(); 
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
		
        <title>Daily Print | Mes paramètres</title>
        
    </head>
    <body>
    
		<!-- Navbar -->
		<nav class="nav nav-pills nav-justified navbar-dark bg-dark">
			<a class="nav-item nav-link" href="admin-news.php">Nouvelles inscriptions</a>
			<a class="nav-item nav-link" href="admin-users.php">Liste des utilisateurs</a>
			<a class="nav-item nav-link active" href="admin-param.php">Paramètres</a>
			<form action="../scripts/deconnexion.php">
				<button type="submit" class="nav-item nav-link deconnexion">Se déconnecter</button>
			</form>
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
				
					<legend class="color-blue">Mes paramètres : </legend>
					
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					
						<legend class="color-blue">Changement de mot de passe : </legend>
						
						<form method="POST" action="../scripts/changePassword.php">
							<div class="form-group">
								<label for="inputPassword1">Nouveau mot de passe :</label>
								<input type="password" class="form-control" id="inputPassword1" placeholder="Nouveau mot de passe" required>
							</div>
							<div class="form-group">
								<label for="inputPassword2">Confirmer le mot de passe :</label>
								<input type="password" class="form-control" id="inputPassword2" placeholder="Nouveau mot de passe" required>
							</div>
							<button type="submit" class="btn btn-primary">Changer de mot de passe</button>
						</form>
					
					</div>
					
					<br/>
					
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					
						<legend class="color-blue">Notifications par email : </legend>
						
						<form method="POST" action="../scripts/updateNotifications.php">
							<div class="form-row">
								<div class="col">
									<label for="inputNotifications"> Etat : </label>
									<select class="form-control" id="inputNotifications" required>
										<option>Sans</option>
										<option>Avec</option>
									</select>
								</div>
							</div>
							
							<br/>
							
							<div class="form-row">
								<div class="col">
									<button type="submit" class="btn btn-primary">Enregistrer </button>
								</div>
							</div>
						</form>
					
					</div>
					
				</div>
				
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
				
			</div>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        
        
    </body>
</html>
