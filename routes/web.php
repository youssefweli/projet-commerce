<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

//Route:: get('/shop/{nom}',[ArticleController::class,'index']);
// Route:: get sela indique nous definissons une route http de type get
// '/shop' c'ette route cere activer si l'utilisateur acceder a votre-domaine.com/shop

//ArticleController::class fait référence à la classe ArticleController,
//et 'index' indique la méthode à exécuter à l'intérieur de ce contrôleur.

// Route:: get('/shop',[ArticleController::class,'index'])->name('shop.index');
// Route:: get('/shop/{slug}-{id}',[ArticleController::class,'show'])
// ->where([
//     'id'=>'[0-9]+',//des chiffre ou moin un chiffre
//     'slug'=>'[a-zA-Z0-9\-]+'
// ])->name('shop.show');
// // name(), vous améliorez la clarté, la maintenance et la flexibilité de votre application





// Utilisation de prefix()  Cela signifie que toutes les routes définies à l'intérieur de ce groupe auront /shop comme partie de leur chemin.
Route::prefix('/shop')->group(function() {
    Route::get('/', [ArticleController::class, 'index'])->name('shop.index');
    Route::get('/{slug}-{id}', [ArticleController::class, 'show'])
        ->where([
            'id' => '[0-9]+',  // des chiffres, au moins un chiffre
            'slug' => '[a-zA-Z0-9\-]+'
        ])->name('shop.show');
});
