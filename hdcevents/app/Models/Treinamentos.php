<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treinamentos extends Model
{
    protected $table='treinamentos';

    public function cargos()
    {
        return $this->hasOne(Cargos::class,'id','idCargo');
    }

}