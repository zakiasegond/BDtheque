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
       


//------------------nom de la page .blade
        return view('utilisateur',
        [
//-----------nom de la table---nom de la variable
            'utilisateur' => $utilisateur,
           

        ]);
    }

}
