Route::get('/utilisateur/{id}', function ($id) {
    return "Profil de l'utilisateur $id";
});

Route::get('/article/{slug}', function ($slug) {
    return "Vous lisez l'article : $slug";
});
