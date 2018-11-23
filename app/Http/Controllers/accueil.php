<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class accueil extends Controller
{


//-----------------nom de la methode/fonction
  public function getAccueil()
    {
        //variable de la table/ ---------nom de la table
        $bd= DB::select('SELECT * FROM bd');
        // $connexion= DB::select('SELECT * FROM connexion');
        // $liste_envie= DB::select('SELECT * FROM liste_envie'); 
        // $mes_collections= DB::select('SELECT * FROM mes_collections'); 
        // $mes_avis= DB::select('SELECT * FROM mes_avis');


//------------------nom de la page .blade
        return view('accueil',
        [
//-----------nom de la table---nom de la variable
            'bd' => $bd,
            // 'connexion' => $connexion,
            // 'liste_envie' => $liste_envie,
            // 'mes_collections' => $mes_collections,
            // 'mes_avis' => $mes_avis,

        ]);
    }

}
