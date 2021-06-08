<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tests extends Model
{
    use HasFactory;
    protected $table = "evaluaciones_titulos";
    protected $guarded = [] ;
    public $timestamps = false;
}
