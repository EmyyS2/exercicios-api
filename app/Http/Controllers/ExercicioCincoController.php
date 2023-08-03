<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioCincoController extends Controller
{
    public function divisivel(Request $request)
    {
        if ($request->numero % 4 == 0) {
            return json_encode([
                'menssage' => 'Divisivel por 4'
            ]);
        } else {
            return json_encode([
                'menssage' => 'não é divisivel por 4'
            ]);
        }
    }
}
