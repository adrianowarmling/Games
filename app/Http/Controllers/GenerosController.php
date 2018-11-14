<?php
namespace App\Http\Controllers;

use App\Model\Generos;
use Illuminate\Http\Request;

class GenerosController extends Controller
{
    private $generos = null;

    public function __construct(Generos $generos)
    {
        $this->generos = $generos;
    }

    public function getGeneros()
    {
        return response()->json($this->generos->getGeneros(), 200)
            ->header('Content-Type', 'application/json');
    }

    public function getGenero($id)
    {
        $generos = $this->generos->getGenero($id);
        if (!$generos) {
            return response()->json(['response', 'Genero não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($generos, 200)
            ->header('Content-Type', 'application/json');
    }

    public function addGeneros()
    {
        return response()->json($this->generos->addGeneros(), 201)
            ->header('Content-Type', 'application/json');
    }

    public function alteraGeneros($id)
    {
        $genero = $this->generos->alteraGeneros($id);
        if (!$generos) {
            return response()->json(['response', 'Generos não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($generos, 200)
            ->header('Content-Type', 'application/json');
    }

    public function deletarGeneros($id)
    {
        $generos = $this->generos->deletarGeneros($id);
        if (!$generos) {
            return response()->json(['response', 'Generos não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json(['response' => 'Generos deletado com sucesso!'], 200)
            ->header('Content-Type', 'application/json');
    }

    public function max(){
        return $this->generos->max();
    }

    public function loadInicial(){
        return view('mainAdriano');
    }

    public function loadConsultarGeneros ()
    {
        return view("Genero.consultaGeneros", [ "generos" => $this->generos->getGeneros() ]);
    }

    public function loadCadastrarGeneros(){
        return view('Genero.cadastroGeneros', [
            'id' => $this->max() + 1
        ]);
    }
    public function loadAlteraGeneros(Request $request, $id){
        $oModel = $this->generos->getGenero($id);
        return view('Genero.alteraGeneros', [
            'id'    => $id,
            'model' => $oModel
        ]);
    }

}