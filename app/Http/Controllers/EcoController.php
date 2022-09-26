<?php

namespace App\Http\Controllers;

use App\Models\Eco;
use Illuminate\Http\Request;

class EcoController extends Controller
{
    public function show(){
        return view ('welcome');
    }

    public function dados(){
        $dados = Eco::all();
            return response()->json([
                "dados" => $dados[0] ["economizado"],
                "tudo" => $dados
            ], 200);
    }
}
