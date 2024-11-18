<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voluntario;

class VoluntarioController extends Controller
{

    private Voluntario $Voluntario;

    public function __construct(Voluntario $voluntario) {
        $this->Voluntario = $voluntario;
    }

    public function index() {
        return $this->Voluntario->all()->toArray();
    }

    public function store(Request $request) {
        $data = [
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
            'whatsapp' => $request->input('whatsapp'),
            'telefone' => $request->input('telefone'),
            'email' => $request->input('email'),
            'bairro' => $request->input('bairro'),
            'cidade' => $request->input('cidade'),
            'estado' => $request->input('estado'),
            'logradouro' => $request->input('logradouro'),
            'numero' => $request->input('numero'),
            'complemento' => $request->input('complemento')
        ];

        $this->Voluntario->create($data)->id;

        return redirect()
        ->route('dashboard')
        ->with('success', 'Voluntário cadastrado com sucesso!');
    }

    public function show(int $id) {
        
        $user = $this->Voluntario->find($id)->toArray();

        if (!$user) {
            return 'Voluntario não encontrado';
        }

        return $user;
    }

    public function update(Request $request, int $id) {

        $update = $this->Voluntario->find($id)->update($request);

        if (!$update) {
            return 'Voluntario não encontrado ou não atualizado';
        }
       
        return  $update;
    }

    public function destroy(int $id) {
        $deleted = $this->Voluntario->find($id)->delete();

        if (!$deleted) {
            return 'Voluntario não encontrado ou não removido';
        }

        return $deleted;
    }
}