<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipement;

class equipementsController extends Controller
{
    public function equipements(){
        return view('equipements');
    }
    public function equipementsPost(Request $req){
       $equipement= new equipement();
       $equipement->nom= $req->nom;
       $equipement->description= $req->description;
       $equipement->categorie= $req->categorie;
       $equipement->disponibilite= $req->disponibilite;
       $equipement->prixLocation= $req->prixLocation;
       $equipement->save();

    }
}
