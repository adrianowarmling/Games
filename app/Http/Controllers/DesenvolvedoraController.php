<?php
namespace App\Http\Controllers;

use App\Model\Desenvolvedora;
use Illuminate\Http\Request;

class DesenvolvedoraController extends Controller
{
    private $desenvolvedora = null;

    public function __construct(Desenvolvedora $desenvolvedora)
    {
        $this->desenvolvedora = $desenvolvedora;
    }

    public function getDesenvolvedora()
    {
        return response()->json($this->desenvolvedora->getDesenvolvedora(), 200)
            ->header('Content-Type', 'application/json');
    }

    public function getDesenvolvedora1($id)
    {
        $desenvolvedora = $this->desenvolvedora->getDesenvolvedora1($id);
        if (!$desenvolvedora) {
            return response()->json(['response', 'Desenvolvedora não encontrada'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($desenvolvedora, 200)
            ->header('Content-Type', 'application/json');
    }

    public function addDesenvolvedora()
    {
        return response()->json($this->desenvolvedora->addDesenvolvedora(), 201)
            ->header('Content-Type', 'application/json');
    }

    public function alteraDesenvolvedora($id)
    {
        $desenvolvedora = $this->desenvolvedora->alteraDesenvolvedora($id);
        if (!$desenvolvedora) {
            return response()->json(['response', 'Desenvolvedora não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($desenvolvedora, 200)
            ->header('Content-Type', 'application/json');
    }

    public function deletarDesenvolvedora($id)
    {
        $desenvolvedora = $this->desenvolvedora->deletarDesenvolvedora($id);
        if (!$desenvolvedora) {
            return response()->json(['response', 'Desenvolvedora não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json(['response' => 'Desenvolvedora deletado com sucesso!'], 200)
            ->header('Content-Type', 'application/json');
    }

    public function max(){
        return $this->desenvolvedora->max();
    }

    public function loadInicial(){
        return view('mainAdriano');
    }

    public function loadConsultarDesenvolvedora ()
    {
        return view("Desenvolvedora.consultaDesenvolvedora", [ "desenvolvedora" => $this->desenvolvedora->getDesenvolvedora() ]);
    }

    public function loadCadastrarDesenvolvedora(){
        return view('Desenvolvedora.cadastroDesenvolvedora', [
            'id' => $this->max() + 1
        ]);
    }
    public function loadAlteraDesenvolvedora(Request $request, $id){
        $oModel = $this->desenvolvedora->getDesenvolvedora1($id);
        return view('Desenvolvedora.alteraDesenvolvedora', [
            'id' =>$id,
            'model' => $oModel
        ]);
        
    }

}