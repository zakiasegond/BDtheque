<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class utilisateur extends Controller
{


//-----------------nom de la methode/fonction
  public function getUtilisateur()
    {
        //variable de la table/ ---------nom de la table
        $utilisateur= DB::select('SELECT * FROM utilisateur');
        // $connexion= DB::select('SELECT * FROM connexion');
        // $liste_envie= DB::select('SELECT * FROM liste_envie'); 
        // $mes_collections= DB::select('SELECT * FROM mes_collections'); 
        // $mes_avis= DB::select('SELECT * FROM mes_avis');


//------------------nom de la page .blade
        return view('utilisateur',
        [
//-----------nom de la table---nom de la variable
            'utilisateur' => $utilisateur,
            // 'connexion' => $connexion,
            // 'liste_envie' => $liste_envie,
            // 'mes_collections' => $mes_collections,
            // 'mes_avis' => $mes_avis,

        ]);
    }

}
