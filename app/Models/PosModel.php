<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosModel extends Model
{
    use HasFactory;
    static public function getSingle($id){
        return self::find($id);
        }
}
