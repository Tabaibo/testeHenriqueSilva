<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/enviar', function(Illuminate\Http\Request $request){
    
    $produto = new App\Models\Produtos();
    $produto->codigo = $request->get('codigo');
    $produto->nome = $request->get('nome');
    $produto->categoria = $request->get('categoria');
    $produto->preco_unit = $request->get('preco_unit');
    $produto->descricao = $request->get('descricao');
    
    $produto->save();

    echo "O seu produto foi armazenado com sucesso! O seu código: " .$produto->codigo;
});

Route::get('/lista', function(){
    return view ('lista',array('produto'=>App\Models\Produtos::all()));
});
