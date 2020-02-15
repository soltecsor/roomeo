<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class TesteController extends Controller
{

    public function testejson(){
        $teste = [
            'Testando'
        ];

        return response()->json(["teste" => $teste]);
    }
    
}