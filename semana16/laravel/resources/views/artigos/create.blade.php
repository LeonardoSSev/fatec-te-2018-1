@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('erro'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
        @endif
        <div class="col-md-12">
            <form action="{{route('artigo_store')}}" method="POST">
                @csrf
                <div class="form-group col-md-4">
                    <label for="categoria">Categoria:</label>
                    <select name="categoria" id="categoria" class="form-control" required>
                        @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="conteudo">Conteúdo:</label>
                    <textarea name="conteudo" id="conteudo" cols="50" rows="5" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Cadastrar Artigo</button>
                </div>
            </form>
        </div>
    </div>
@endsection