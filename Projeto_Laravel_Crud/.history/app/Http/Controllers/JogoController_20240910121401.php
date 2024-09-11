<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;
use App\Http\Requests\adicionarRequest;

class JogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function authorize()
    {
        return true;  // Certifique-se de retornar true para permitir a validação
    }

     
        public function cadastrar(Request $req)
        {
            $jogos = Jogo::all();  // Exemplo de lógica com dados do banco
            return view('cadastrar', ['jogos' => $jogos]);
        }
        public function adicionar(adicionarRequest $req){      
          try{
             $jogo = new Jogo;
             $jogo-> titulo = $req->titulo;
             $jogo->anolanc = $req->anolanc;
             $jogo-> classi = $req->classi;
             $jogo-> genero = $req->genero;
             $jogo->pontuacao= $req->pontuacao;
             $jogo-> plataforma = $req->plataforma;
             $jogo-> empresa = $req->empresa;
             if ($req->hasFile('capa') && $req->file('capa')->isValid()) {
            
                $jogo->capa = $req->file('capa')->store('capas', 'public');
            }
            $jogo->save();
            return redirect()->back()->with('success', 'Filme adicionado com sucesso!');
        } catch (\Exception $e) {
            
            return redirect()->back()->withErrors(['error' => 'Ocorreu um erro ao adicionar o filme: ' . $e->getMessage()]);
        }
    } 

    public function atualizar(adicionarRequest $req){
        $jogos
    }

public function listar(Request $req){
    $jogos = Jogo::all();
    return view('listar', ['jogos' => $jogos]);
}
public function excluir(Request $req){
$jogo = Jogo::find($req->id);
$jogo->delete();
return redirect()->back();
}
public function editar(Request $req){
$jogo = Jogo::find($req->id);
return view('editar')->with("jogo", $jogo);
}


}