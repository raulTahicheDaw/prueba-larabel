<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Estudiante;

class Nota extends Model
{
    protected $table = 'grades';
    protected $guarded = ['id'];

    public function student()
    {
        return $this->belongsTo(Estudiante::class, 'dni');
    }
}
