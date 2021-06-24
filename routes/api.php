    <?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*Route::middleware('api')->group(function(){
    Route::resource('produtos', ProdutoController::class);
});*/

Route::get('livros', 'LivroController@index');
Route::group(['prefix' => 'livro'], function(){
    Route::post('add', 'LivroController@add');
    Route::get('edit/{id}', 'LivroController@edit');
    Route::post('update/{id}', 'LivroController@update');
    Route::delete('delete/{id}', 'LivroController@delete');
});
