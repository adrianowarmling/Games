<?php
namespace App\Model;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Plataforma extends Model
{
    protected $table = 'plataforma';
    protected $fillable = array("id","tipo");
    protected $primaryKey = "id";
    public $timestamps = false;

    public function getPlataforma()
    {
        return self::all();
    }

    public function getPlataforma1($id)
    {
        $plataforma= self::find($id);
        if (is_null($plataforma)) {
            return false;
        }
        return $plataforma;
    }

    public function addPlataforma()
    {
        $input = Input::all();
        $plataforma = new Plataforma($input);
        $plataforma->save();
        return $plataforma;
    }

    public function alteraPlataforma($id)
    {
        $plataforma = self::find($id);
        if (is_null($plataforma)) {
            return false;
        }
        $input = Input::all();
        $plataforma->fill($input);
        $plataforma->save();
        return $plataforma;
    }

    public function deletarPlataforma($id)
    {
        $plataforma = self::find($id);
        if (is_null($plataforma)) {
            return false;
        }
        return $plataforma->delete(); 
    }

    public function max(){
        return \DB::table('plataforma')->max('id');
    }
}
