<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //Contrutor com exemplo de middleware no controller
    public function __construct()
    {
        # code...
        //$this->middleware('auth');

        /*
        $this->middleware('auth')->only([
            'contato',
            'categoria'
        ]);
        */
    }
    public function index()
    {
        # code...
        $teste = 'Teste de variavel';
        $teste2 = 'Teste de variavel 2';
        $teste3 = 'Teste de variavel 3';
        $var1 = '123';
        $arrayData = [1, 2, 3, 4, 5, 6, 7, 8];
        //return view('site.teste', ['teste' => $teste]); //para passar uma variável
        return view('site.home.index', compact('teste','teste2', 'teste3', 'var1', 'arrayData'));
    }

    public function contato()
    {
        # code...
        return view('site.contato.contato');
    }

    public function categoria($id)
    {
        # code...
        return "Pagina da categoria número {$id}";
    }

    public function categoriaOption($id = 1)
    {
        # code...
        return "Pagina da categoria número [$id]";
    }
}
