use Illuminate\Support\Facades\Route;

Route::get('/bonjour', function () {
    return "Bonjour et bienvenue sur mon site !";
});

Route::get('/apropos', function () {
    return view('about');
});

Route::get('/contact', function () {
    return '
        <form>
            <label>Nom :</label>
            <input type="text" name="nom"><br>
            <label>Email :</label>
            <input type="email" name="email"><br>
            <label>Message :</label>
            <textarea name="message"></textarea><br>
            <button type="submit">Envoyer</button>
        </form>
    ';
});
