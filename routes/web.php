<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
  return view('inicio');
});
*/

Route::get('/',[
  'as'=>'inicial',
  'uses'=>'EditionController@site'
  ]);

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('volta',[
  'as' => 'volta',
  'uses' => 'VoltaController@volta'
]);

Route::get('/adm',['as' => 'adm', 'uses' => 'HomeController@index']);

Route::group(['middleware' => 'auth'], function() {

  Route::resource('editar', 'EditionController', ['except' => 'show']);

  Route::get('/lista', ['as' => 'lista',function () {
      return view('lista', array('contatos' => App\Contato::all()));
  }]);

});

Route::post('/enviar', function(Illuminate\Http\Request $request){
  $contato = new App\Contato();
  $contato->nome = $request->get('nome');
  $contato->email = $request->get('email');
  $contato->mensagem = $request->get('mensagem');
  $contato->save();
  echo "Sua mensagem foi enviada com suceddo! Código: " . $contato->id;
});
