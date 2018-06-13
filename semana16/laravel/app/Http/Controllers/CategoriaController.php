<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    public function list()
    {
        $categorias = Categoria::all();
        return view('categorias.home', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $nome = $request->nome;

        $created = Categoria::create(compact(['nome']));

        if (!$created) {
            return redirect()->route('categoria_create')->with(['error' => 'Houve um erro ao tentar criar,']);
        }

        return redirect()->route('categoria_list')->with(['status' => 'Categoria criada.']);
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);

        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);

        $categoria->nome = $request->nome;

        $updated = $categoria->update();

        if (!$updated) {
            return redirect()->route('categoria_edit')->with(['error' => 'Houve um erro ao tentar editar,']);
        }

        return redirect()->route('categoria_list')->with(['status' => 'Categoria editada.']);
    }

    public function delete($id)
    {
        $deleted = Categoria::destroy($id);

        if (!$deleted) {
            return redirect()->route('categoria_list')->with(['error' => 'Houve um erro ao tentar excluir,']);
        }

        return redirect()->route('categoria_list')->with(['status' => 'Categoria excluída.']);
    }
}
