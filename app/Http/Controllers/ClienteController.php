<?php

namespace App\Http\Controllers;
use App\Models\cliente;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class ClienteController extends Controller
{
    public function get_cliente()
    {
        $cliente = cliente::all();
        return view('base.cliente', ['cliente' => $cliente]);

    }

    public function deletar_cliente($cd_cliente)
    {
        $cliente = cliente::find($cd_cliente);

        if ($cliente) {
            $cliente->delete();
            return view('base.cliente')->with('success', 'cliente excluído com sucesso!');
        } else {
            return view('base.cliente')->with('error', 'cliente não encontrado.');
        }
    }

    public function atualizar_cliente($cd_cliente, Request $request)
    {

        $cliente = new cliente;
        $cliente->updateUser($cd_cliente, $request->name);
        return redirect('/cliente');

    }

    // dia 23/05/2023
    public function criar_cliente(Request $request){
        $validar = $request->validate([
            'nm_cliente' => 'required',
        ]);

        cliente::create($validar);

        return redirect('/cliente');
    }
}
