Route::get('/produit/{categorie}/{id}', function ($categorie, $id) {
    return "Produit $id dans la catégorie $categorie";
})->where(['id' => '[0-9]+', 'categorie' => '[a-zA-Z]+']);
