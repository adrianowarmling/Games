<?php
namespace App\Http\Controllers;

use App\Model\Plataforma;
use Illuminate\Http\Request;

class PlataformaController extends Controller
{
    private $plataforma = null;

    public function __construct(Plataforma $plataforma)
    {
        $this->plataforma = $plataforma;
    }

    public function getPlataforma()
    {
        return response()->json($this->plataforma->getPlataforma(), 200)
            ->header('Content-Type', 'application/json');
    }

    public function getPlataforma1($id)
    {
        $plataforma = $this->plataforma->getPlataforma1($id);
        if (!$plataforma) {
            return response()->json(['response', 'Plataforma não encontrada'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($plataforma, 200)
            ->header('Content-Type', 'application/json');
    }

    public function addPlataforma()
    {
        return response()->json($this->plataforma->addPlataforma(), 201)
            ->header('Content-Type', 'application/json');
    }

    public function alteraPlataforma($id)
    {
        $genero = $this->plataforma->alteraPlataforma($id);
        if (!$plataforma) {
            return response()->json(['response', 'Plataforma não encontrada'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($plataforma, 200)
            ->header('Content-Type', 'application/json');
    }

    public function deletarPlataforma($id)
    {
        $plataforma = $this->plataforma->deletarPlataforma($id);
        if (!$plataforma) {
            return response()->json(['response', 'Plataforma não encontrada'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json(['response' => 'Plataforma deletada com sucesso!'], 200)
            ->header('Content-Type', 'application/json');
    }

    public function max(){
        return $this->plataforma->max();
    }

    public function loadInicial(){
        return view('mainAdriano');
    }

    public function loadConsultarPlataforma ()
    {
        return view("Plataforma.consultaPlataforma", [ "plataforma" => $this->plataforma->getPlataforma() ]);
    }

    public function loadCadastrarPlataforma(){
        return view('Plataforma.cadastroPlataforma', [
            'id' => $this->max() + 1
        ]);
    }

    public function loadAlteraPlataforma(Request $request, $id){
        $oModel = $this->plataforma->getPlataforma1($id);
        return view('Plataforma.alteraPlataforma', [
            'id' => $id,
            'model' => $oModel
        ]);
    }

}