<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class decouvrir extends Controller
{


//-----------------nom de la methode/fonction
  public function getDecouvrir()
    {
        //variable de la table/ ---------nom de la table
        $decouvrir= DB::select('SELECT * FROM decouvrir');
        


//------------------nom de la page .blade
        return view('decouvrir',
        [
//-----------nom de la table---nom de la variable
            'decouvrir' => $decouvrir,
           

        ]);
    }

}
