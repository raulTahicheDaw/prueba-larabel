<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Nota;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estudiante extends Model
{
    protected $fillable = ['dni', 'nombre', 'apellido1', 'apellido2', 'f_nacimiento', 'email'];
    protected $table = 'students';
    public $incrementing = false;
    protected $primaryKey = 'dni';
    protected $dates = [
        'f_nacimiento',
        'deleted_at'
    ];

    use SoftDeletes;

    public function grades()
    {
        return $this->hasMany(Nota::class,'estudiante_id');
    }

    public function getEdadAttribute()
    {
        return Carbon::parse($this->f_nacimiento)->age;
    }

    public function getApellidosAttribute()
    {
        return $this->apellido1 . ' ' . $this->apellido2;
    }
    public function getNombreCompletoAttribute()
    {
        return $this->nombre . ' ' . $this->apellido1 . ' ' . $this->apellido2;
    }
}
