use App\Greeting;
Route::get('create-greeting', function () {
$greeting = new Greeting;
$greeting->body = 'Hello, World!';
$greeting->save();
});
Route::get('first-greeting', function () {
return Greeting::first()->body;
});
