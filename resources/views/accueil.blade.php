<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/accueil.css" rel="stylesheet">
        <title>BDthèque</title>

    </head>

    <body>
        <h1>BDthèque</h1>
        

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost:8000/collection">Consulter des BD<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost:8000/decouvrir">Découvrir des BD</a>
      </li>
    </ul>
    <ul class="navbar-nav mr-auto">
    <form class="form-inline my-2 my-lg-0">
      <form action="https://localhost:8000" id="myform">
      <input class="form-control mr-sm-2" type="search" type="text" name="q" value="" placeholder="Rechercher" aria-label="Rechercher">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
    </form>
    </form>
    </ul>

        

      <li class="navbar-nav mr-auto">
        <a class="nav-link" href="http://localhost:8000/connexion">Connexion</a>
      </li>
  </div>
</nav>


    <h3 class="new"><span>Nouveautés</span></h3>

                <div class="container-fluid">
                    <div class="row">
                      @foreach ($bd as $bd)
                      <div class="col-md-6">
                        <h4 class="titrePresentation"><i><strong>
                          <p><span>{{ $bd->bd_nom }}</span></p>
                        </h4></i></strong>
                            <img src="{{ $bd->url_image }}"> 
                            <h5><p>{{ $bd->bd_auteur }}</p></h5>  
                            <h5><p class="sortie"><strong>DATE DE SORTIE : {{ $bd->bd_date_sortie }}</strong></p>
                            <p><strong>COMMENTAIRES : {{ $bd->bd_commentaires }}</strong></p>
                            <p><strong>NOTE : {{ $bd->bd_notes }}</strong></p></h5>  
                      </div>
                      @endforeach    
                    </div>
                </div>
                           

          

                




        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>