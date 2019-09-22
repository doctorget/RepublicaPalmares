<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Palmares.homeRestrita');
    }
    
    public function ShowForm()
    {
        return view('cadastro.cadastro');
    }

    public function registrar(Request $request)
    {   


        $cpf = $request->cpf;
        $tipo_documento = 'Pessoa Fisica';
        $nome = $request->nome;
        $Nascimento = $request->nascimento;
        $idade = '22';
        $nome_responsavel = 'Maria Lourdes';
        $genero = $request->genero;
        $endereco = $request->endereco;
        $bairro = $request->bairro;
        $cidade = $request->cidade;
        $uf = $request->uf;
        $cep = $request->cep;
        $DDD = '11';
        $fone1 = $request->fone1;
        $email = $request->email;

        $pessoa = new Pessoa();
        $pessoa->CPF = $cpf;
        $pessoa->Tipo_documento = $tipo_documento;
        $pessoa->nome = $nome;
        $pessoa->Nascimento = $Nascimento;
        $pessoa->idade = $idade;
        $pessoa->Nome_responsavel = $nome_responsavel;
        $pessoa->Genero = $genero;
        $pessoa->Endereço = $endereco;
        $pessoa->Bairro = $bairro;
        $pessoa->cidade = $cidade;
        $pessoa->uf = $uf;
        $pessoa->cep = $cep;
        $pessoa->DDD = $DDD;
        $pessoa->Fone1 = $fone1;
        $pessoa->email = $email;

        $pessoa->save();

        redirect('/homerestrita/listapessoas');

    }

    public function listarpessoas()
    {
        $pessoas = Pessoa::query()
        ->orderBy('nome')
        ->get();
        
        return view('cadastro.cadastroLista', compact('pessoas'));
    }

    public function modalidade()
    {
        return view('Palmares.modalidade');
    }

    public function curso()
    {
        return view('Palmares.cursolista');
    }

    public function doacao()
    {
        return view('Palmares.doacaoLista');
    }

    
}
