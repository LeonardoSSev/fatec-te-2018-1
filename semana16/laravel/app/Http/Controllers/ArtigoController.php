<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artigo;
use App\Categoria;

class ArtigoController extends Controller
{
    public function list()
    {
        $artigos = Artigo::all();
        $artigo = Artigo::find(1);

        return view('artigos.home', compact('artigos'));
    }

    public function create()
    {
        $categorias = Categoria::all();

        return view('artigos.create')->with(['categorias' => $categorias]);
    }

    public function store(Request $request)
    {
        $categoria_id = $request->categoria;
        $user_id = Auth()->user()->id;
        $conteudo = $request->conteudo;


        $created = Artigo::create(compact(['user_id', 'categoria_id', 'conteudo']));

        if (!$created) {
            return redirect()->route('artigo_create')->with(['error' => 'Houve um erro ao tentar criar,']);
        }

        return redirect()->route('artigo_list')->with(['status' => 'Artigo criado.']);
    }

    public function edit($id)
    {
        $artigo = Artigo::find($id);
        $categorias = Categoria::all();

        return view('artigos.edit', compact('artigo', 'categorias'));
    }

    public function update(Request $request, $id)
    {
        $artigo = Artigo::find($id);

        $artigo->categoria_id = $request->categoria;
        $artigo->conteudo = $request->conteudo;

        $updated = $artigo->update();

        if (!$updated) {
            return redirect()->route('artigo_edit')->with(['error' => 'Houve um erro ao tentar editar,']);
        }

        return redirect()->route('artigo_list')->with(['status' => 'Artigo editado.']);
    }

    public function delete($id)
    {
        $deleted = Artigo::destroy($id);

        if (!$deleted) {
            return redirect()->route('artigo_list')->with(['error' => 'Houve um erro ao tentar excluir,']);
        }

        return redirect()->route('artigo_list')->with(['status' => 'Artigo excluído.']);
    }
}
