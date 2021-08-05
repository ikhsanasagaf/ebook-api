<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return ([
            '3103119121',
            'Muhammad Ikhsan Asagaf',
            'Laki-laki',
            '+62 822-5615-8707',
            'XII RPL 4'
        ]);
    }
}
