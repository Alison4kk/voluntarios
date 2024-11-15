<?php

namespace App\Http\Controllers;

use App\Models\Voluntario;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        if ($request->has('search')) {
            $voluntarios = Voluntario::where('nome', 'LIKE', "%{$request->search}%")
                ->orWhere('descricao', 'LIKE', "%{$request->search}%")
                ->orWhere('cidade', 'LIKE', "%{$request->search}%")
                ->get();
            return view('home', compact('voluntarios'));
        } else {
            return view('home', [
                'voluntarios' => Voluntario::all(),
            ]);
        }
    }
}
