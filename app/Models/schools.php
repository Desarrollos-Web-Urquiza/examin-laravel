<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schools extends Model
{
    use HasFactory;
    protected $table = "escuelas";
    protected $guarded = [] ;
    public $timestamps = false;
}
