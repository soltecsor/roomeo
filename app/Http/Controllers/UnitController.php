<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UnitController extends Controller
{
    public function getId($idUnit){
        $id_unit = $idUnit;

        return view('portal.room-details', compact('id_unit'));
    }
}