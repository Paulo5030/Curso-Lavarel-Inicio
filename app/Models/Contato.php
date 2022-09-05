<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function lista() {
        return (object) [
            'nome'=>'Phzinho',
            'telefone'=>'56748328'
        ];
    }
}
