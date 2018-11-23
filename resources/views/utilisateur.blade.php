<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>bdtheque</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/accueil.css" rel="stylesheet">
	</head>

	<body>




		<h3>Espace personnel</h3>

                <div class="container-fluid">
                    <div class="row">
                      @foreach ($utilisateur as $utilisateur)
                      <div class="col-md-6">
                        <h4 class="titrePresentation"><i><strong>
                          <p>NOM : {{ $utilisateur->utilisateur_nom }}</p>
                        </h4></i></strong>
                            
                            <h4><p><strong>PRENOM : {{ $utilisateur->utilisateur_prenom }}</strong></p></h4>  
                            <h4><p>PSEUDO : {{ $utilisateur->utilisateur_pseudo }}</p></h4>  
                          <h4><p class="sortie"><strong>DATE DE NAISSANCE : {{ $utilisateur->utilisateur_date_naissance }}</strong></p>
                          </h4>  
                      </div>
                      @endforeach    
                    </div>
                </div>
                           

          

                




        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
		
	</body>
</html>