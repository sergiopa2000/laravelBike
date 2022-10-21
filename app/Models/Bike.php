<?php

namespace App\Models; // paquete de java

use Illuminate\Database\Eloquent\Factories\HasFactory; // Import de java
use Illuminate\Database\Eloquent\Model; // Import de java

class Bike extends Model
{
    use HasFactory; // trait
   //protected $table = 'bike'; // nombre de la table de bd
    public $timestamps = false; // para no usar los campos timestamps en la tabla
    protected $fillable = ['name'];
}
