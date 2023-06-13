<?php

namespace App\Http\Controllers;

use App\Models\Colaboradores;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class ColaboradoresController extends Controller
{
    public function index()
    {
        // DESCRIÇÃO: Usado para listar todas as colunas da tabela users

        // $users = Colaboradores::all();
        // return view('base.colaboradores', ['users' => $users]);

        // DESCRIÇÃO: Usado para criar paginação na View Colaboradores.

        $itensPaginas = 8; // número de itens por página
        $users = Colaboradores::paginate($itensPaginas);

        return view('base.colaboradores', ['users' => $users]);
    }

    public function deletar_colaborador($id)
    {
        // DESCRIÇÃO: Busca o ID do usuário para realizar a exclusão do registro
        // Quando encontrado, exclui o registro no banco de dados.
        $user = Colaboradores::find($id);

        if ($user) {
            $user->delete();
            return view('base.colaboradores')->with('success', 'Usuário excluído com sucesso!');
        } else {
            return view('base.colaboradores')->with('error', 'Usuário não encontrado.');
        }
    }

    public function atualizar_colaborador($id, Request $request)
    {
        //A função updateUser é uma função que atualiza os dados do usuário no banco de dados. 
        //$user = new Colaboradores; cria um novo objeto da classe Colaboradores.
        //$user->updateUser($id, $request->name, $request->email); chama a função updateUser do objeto $user, 
        //passando os parâmetros $id, $request->name e $request->email. 
        //Essa função atualiza o nome e o email do usuário com o $id. 
        //return redirect('/colaboradores'); redireciona o usuário para a página /colaboradores.

        $user = new Colaboradores;
        $user->updateUser($id, $request->name, $request->email);
        return redirect('/colaboradores');
    }

    // dia 23/05/2023
    public function criar_colaborador(Request $request){
        $validar = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $validar['password'] = bcrypt($validar['password']);

        Colaboradores::create($validar);

        return redirect('/colaboradores');
    }
}
