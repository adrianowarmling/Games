<?php
namespace App\Model;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Generos extends Model
{
    protected $table = 'generos';
    protected $fillable = array("id","descricao");
    protected $primaryKey = "id";
    public $timestamps = false;

    public function getGeneros()
    {
        return self::all();
    }

    public function getGenero($id)
    {
        $generos= self::find($id);
        if (is_null($generos)) {
            return false;
        }
        return $generos;
    }

    public function addGeneros()
    {
        $input = Input::all();
        $generos = new Generos($input);
        $generos->save();
        return $generos;
    }

    public function alteraGeneros($id)
    {
        $generos = self::find($id);
        if (is_null($generos)) {
            return false;
        }
        $input = Input::all();
        $generos->fill($input);
        $generos->save();
        return $generos;
    }

    public function deletarGeneros($id)
    {
        $generos = self::find($id);
        if (is_null($generos)) {
            return false;
        }
        return $generos->delete(); 
    }

    public function max(){
        return \DB::table('generos')->max('id');
    }
}
