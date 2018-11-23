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
                      @foreach ($collection as $collection)
                      <div class="col-md-6">
                        <h3 class="titrePresentation"><i><strong>
                          <p>{{ $collection->collections_nom }}</p>
                        </h3></i></strong>
                            <img class='collec' src="{{ $collection->image }}"> 
                            <h4><p><strong>ACHAT : {{ $collection->achat_quantite }}</strong></p></h4>  
                            <h4><p class="sortie"><strong>VENTE : {{ $collection->vente_quantite }}</strong></p>
                            <p><strong>POSSEDE : {{ $collection->possede_quantite }}</strong></p>
                            </h4>  
                      </div>
                      @endforeach    
                    </div>
                </div>





















		 <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>	
</html>