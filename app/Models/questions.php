<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
    use HasFactory;
    protected $table = "evaluaciones_preguntas";
    protected $guarded = [] ;
    public $timestamps = false; 
}
