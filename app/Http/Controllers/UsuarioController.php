<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function listarUsuarios()
    {
        $usuarios = [
            [
                'Nome' => 'João',
                'idade' => 20,
                'Profissao' => 'Programador'
            ],
            [
                'Nome' => 'Maria',
                'idade' => 19,
                'Profissao' => 'Digital Influencer'
            ],
            [
                'Nome' => 'Ana',
                'idade' => 29,
                'Profissao' => 'Professor'
            ],
        ];

        return view('dashboard', ['usuarios' => $usuarios]);

        // return view('dashborad', [
        //     'usuarios' => $usuarios,
        //     'perfils'  => $perfils
        // ]);
    }
}
