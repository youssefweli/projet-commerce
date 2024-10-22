<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{

    // public function index( Request $request ,string $nom)//on a une methode index qui accepte un parametre request
    // {
    //   //  dd($request->input('nom','anonyme'));  // dd est une function qui affiche le contenu passer en parametre
    //     dd('bienvenue'.$nom);
    //     return 'une premiere page avec laravel ';
    // }
    public function index()
    {
                return 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
    }
    public function show (string $slug,string $id)
    {
          return "slug: $slug<br>ID   : $id" ;
    }
}

