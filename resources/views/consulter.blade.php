<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>BDtheque</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/accueil.css" rel="stylesheet">
	</head>

	<body>

		<h3>Toutes les collections</h3>

		 <div class="container-fluid">
                    <div class="row">
                      @foreach ($collection as $collec)
                      <div class="col-md-6">
                        <h3 class="titrePresentation"><i><strong>
                          <p>{{ $collec->collections_nom }}</p>
                        </h3></i></strong>
                            <img src="{{ $collection->image }}"> 
                            <h4><p><strong>ACHAT : {{ $collec->achat_quantite }}</strong></p></h4>  
                            <h4><p class="sortie"><strong>VENTE : {{ $collec->vente_quantite }}</strong></p>
                            <p><strong>POSSEDE : {{ $collec->possede_quantite }}</strong></p>
                            </h4>  
                      </div>
                      @endforeach    
                    </div>
                </div>





















		 <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>	
</html>