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
       

//------------------nom de la page .blade
        return view('collection',
        [
//-----------nom de la table---nom de la variable
            'collection' => $collection,
            
        ]);
    }

}
