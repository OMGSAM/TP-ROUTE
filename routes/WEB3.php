Route::get('/utilisateur/{id}', function ($id) {
    return "Profil de l'utilisateur $id";
})->where('id', '[0-9]+');

Route::get('/article/{slug}', function ($slug) {
    return "Vous lisez l'article : $slug";
})->where('slug', '[a-zA-Z\-]+');
