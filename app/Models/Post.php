<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //protected $fillable = ['title', 'body'];
    //Como sé lo que hago, dejo que todos los campos sean editables. No puedo usar ->all cuando grabo en create o update
    //protected $guarded = []; //No protejo ninguno, o sea, todos son editables. Pero a su vez con model::unguarded (ver Word) lo
    //hago en toda la aplicación
}
