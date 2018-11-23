<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class collection extends Controller
{


//-----------------nom de la methode/fonction
  public function getCollection()
    {
        //variable de la table/ ---------nom de la table
        $collection= DB::select('SELECT * FROM collection');
        // $connexion= DB::select('SELECT * FROM connexion');
        // $liste_envie= DB::select('SELECT * FROM liste_envie'); 
        // $mes_collections= DB::select('SELECT * FROM mes_collections'); 
        // $mes_avis= DB::select('SELECT * FROM mes_avis');


//------------------nom de la page .blade
        return view('collection',
        [
//-----------nom de la table---nom de la variable
            'collection' => $collection,
            // 'connexion' => $connexion,
            // 'liste_envie' => $liste_envie,
            // 'mes_collections' => $mes_collections,
            // 'mes_avis' => $mes_avis,

        ]);
    }

}
