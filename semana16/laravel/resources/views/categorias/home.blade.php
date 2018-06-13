@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('erro'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
    @elseif (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    @auth
        <div class="row">
            <a href="{{route('categoria_create')}}"><button class="btn btn-info">Cadastrar categoria</button></a>
        </div>
    @endauth
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Categoria</th>
                    @auth
                        <th>Ação</th>
                    @endauth
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                    <tr>
                        <td>{{$categoria->id}}</td>
                        <td>{{$categoria->nome}}</td>
                        @auth
                            <td>
                                <a href="{{route('categoria_edit', $categoria->id)}}"><button class="btn btn-warning">Editar</button></a>
                                <a href="{{route('categoria_delete', $categoria->id)}}"><button class="btn btn-danger">Excluir</button></a>
                            </td>
                        @endauth
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection