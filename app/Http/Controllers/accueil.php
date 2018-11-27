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
       

//------------------nom de la page .blade
        return view('accueil',
        [
//-----------nom de la table---nom de la variable
            'bd' => $bd,
            

        ]);
    }

}
