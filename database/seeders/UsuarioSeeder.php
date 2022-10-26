<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name'=> 'Uninove10',
            'email'=> 'uninove@gmail.com',
            'password'=> bcrypt('uninove10'),
        ];

        if(User::where('email','=',$dados['email'])->count()) {
            $usuario = User::where('email','=',$dados['email'])->first();
            $usuario->update($dados);
            echo "Usuario Alterado!";
        }else {
            User::create($dados);
            echo "Usuario Criado!";
        }
    }
}
