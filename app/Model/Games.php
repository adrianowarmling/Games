<?php
namespace App\Model;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    protected $table = 'games';
    protected $fillable = array("id","nome","ano","fx_etaria","tipo_id","desenvolvedora_id","genero_id");
    protected $primaryKey = "id";
    public $timestamps = false;

    public function getGames()
    {
        return \DB::table("games")
                    ->select(\DB::raw("games.id, games.nome, games.ano, games.fx_etaria, desenvolvedora.nome_desenvolvedora, generos.descricao, plataforma.tipo "))
                    ->join("desenvolvedora", "games.desenvolvedora_id", "=", "desenvolvedora.id")
                    ->join("generos", "games.genero_id", "=", "generos.id")
                    ->join("plataforma", "games.tipo_id", "=", "plataforma.id")
                    ->get();
    }

    public function getGame($id)
    {
        $games= self::find($id);
        if (is_null($games)) {
            return false;
        }
        return $games;
    }

    public function addGames()
    {
        $input = Input::all();
        $games = new Games($input);
        $games->save();
        return $games;
    }

    public function alteraGames($id)
    {
        $games = self::find($id);
        if (is_null($games)) {
            return false;
        }
        $input = Input::all();
        $games->fill($input);
        $games->save();
        return $games;
    }

    public function deletarGames($id)
    {
        $games = self::find($id);
        if (is_null($games)) {
            return false;
        }
        return $games->delete(); 
    }

    public function max(){
        return \DB::table('games')->max('id');
    }
}
