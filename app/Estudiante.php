<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Nota;
class Estudiante extends Model
{
    protected $fillable = ['dni', 'nombre', 'apellido1', 'apellido2', 'f_nacimiento', 'email'];
    protected $table = 'students';
    public $incrementing = false;
    protected $primaryKey = 'dni';
    protected $dates = [
        'f_nacimiento'
    ];

    public function grades()
    {
        return $this->hasMany(Nota::class);
    }
}
