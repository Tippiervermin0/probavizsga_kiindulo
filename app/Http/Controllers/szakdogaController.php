<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\szakdoga;

class szakdogaController extends Controller
{
    
       
        public function index(){
            $szakdoga = response()->json(Szakdoga::all());
            return $szakdoga;
        }
    
    
        public function index2(Request $uj){
            $ujszakdoga = new Szakdoga();
            $ujszakdoga->szakdoga_nev = $uj->szakdoga_nev;
            $ujszakdoga->githublink = $uj->githublink;
            $ujszakdoga->oldallink = $uj->oldallink;
            $ujszakdoga->tagokneve = $uj->tagokneve;
            $ujszakdoga->save();
            
        }

   
}
