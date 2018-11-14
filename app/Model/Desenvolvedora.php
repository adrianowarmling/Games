<?php
namespace App\Model;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Desenvolvedora extends Model
{
    protected $table = 'desenvolvedora';
    protected $fillable = array("id","nome_desenvolvedora","ceo");
    protected $primaryKey = "id";
    public $timestamps = false;

    public function getDesenvolvedora()
    {
        return self::all();
    }

    public function getDesenvolvedora1($id)
    {
        $desenvolvedora= self::find($id);
        if (is_null($desenvolvedora)) {
            return false;
        }
        return $desenvolvedora;
    }

    public function addDesenvolvedora()
    {
        $input = Input::all();
        $desenvolvedora = new Desenvolvedora($input);
        $desenvolvedora->save();
        return $desenvolvedora;
    }

    public function alteraDesenvolvedora($id)
    {
        $desenvolvedora = self::find($id);
        if (is_null($desenvolvedora)) {
            return false;
        }
        $input = Input::all();
        $desenvolvedora->fill($input);
        $desenvolvedora->save();
        return $desenvolvedora;
    }

    public function deletarDesenvolvedora($id)
    {
        $desenvolvedora = self::find($id);
        if (is_null($desenvolvedora)) {
            return false;
        }
        return $desenvolvedora->delete(); 
    }

    public function max(){
        return \DB::table('desenvolvedora')->max('id');
    }
}
