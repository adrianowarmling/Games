<?php
namespace App\Http\Controllers;

use App\Model\Games;
use App\Model\Desenvolvedora;
use App\Model\Generos;
use App\Model\Plataforma;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    private $games = null;

    public function __construct(Games $games)
    {
        $this->games = $games;
    }

    public function getGames()
    {
        return response()->json($this->games->getGames(), 200)
            ->header('Content-Type', 'application/json');
    }

    public function getGame($id)
    {
        $games = $this->games->getGame($id);
        if (!$games) {
            return response()->json(['response', 'Game não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($games, 200)
            ->header('Content-Type', 'application/json');
    }

    public function addGames()
    {
        return response()->json($this->games->addGames(), 201)
            ->header('Content-Type', 'application/json');
    }

    public function alteraGames($id)
    {
        $genero = $this->games->alteraGames($id);
        if (!$games) {
            return response()->json(['response', 'Games não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($games, 200)
            ->header('Content-Type', 'application/json');
    }

    public function deletarGames($id)
    {
        $games = $this->games->deletarGames($id);
        if (!$games) {
            return response()->json(['response', 'Games não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json(['response' => 'Games deletado com sucesso!'], 200)
            ->header('Content-Type', 'application/json');
    }

    public function max(){
        return $this->games->max();
    }

    public function loadInicial(){
        return view('mainAdriano');
    }

    public function loadConsultarGames ()
    {
        return view("Games.consultaGames", [ "games" => $this->games->getGames() ]);
    }

    public function loadCadastrarGames(){
        $oDesen = new Desenvolvedora;
        $oDesen1 = new Generos;
        $oDesen2 = new Plataforma;

        return view('Games.cadastroGames', [
            'id' => $this->max() + 1,
            'desenvolvedoras' => $oDesen->getDesenvolvedora(),
            'generos' => $oDesen1->getGeneros(),
            'plataformas' => $oDesen2->getPlataforma()
            
        ]);
    }
    public function loadAlteraGames(Request $request, $id){
        $oDesen = new Desenvolvedora;
        $oDesen1 = new Generos;
        $oDesen2 = new Plataforma;
        $oModel = $this->games->getGame($id);
        return view('Games.alteraGames', [
            'id' =>$id,
            'model' => $oModel,
            'desenvolvedoras' =>$oDesen->getDesenvolvedora(),
            'generos' => $oDesen1->getGeneros(),
            'plataformas' => $oDesen2->getPlataforma()
        ]);
    }

}