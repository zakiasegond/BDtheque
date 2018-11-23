<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>bdtheque</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/accueil.css" rel="stylesheet">
	</head>

	<body>

		<h3>Decouvrez des BD</h3>

			<div class="container-fluid">
                    <div class="row">
                      @foreach ($decouvrir as $decouvrir)
                      <div class="col-md-6">
                            <img src="{{ $decouvrir->bd_nom }}">  
                      </div>
                      @endforeach    
                    </div>
                </div>








		<script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>
