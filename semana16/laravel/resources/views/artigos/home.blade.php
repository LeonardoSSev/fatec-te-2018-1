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
            <a href="{{route('artigo_create')}}"><button class="btn btn-info">Cadastrar Artigo</button></a>
        </div>
    @endauth
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Artigo</th>
                    <th>Categoria</th>
                    @auth
                        <th>Ação</th>
                    @endauth
                </tr>
            </thead>
            <tbody>
                @foreach($artigos as $artigo)
                    <tr>
                        <td>{{$artigo->id}}</td>
                        <td>{{substr($artigo->conteudo, 0, 15)}}</td>
                        <td>{{$artigo->categoria->nome}}</td>
                        @auth
                            <td>
                                <a href="{{route('artigo_edit', $artigo->id)}}"><button class="btn btn-warning">Editar</button></a>
                                <a href="{{route('artigo_delete', $artigo->id)}}"><button class="btn btn-danger">Excluir</button></a>
                            </td>
                        @endauth
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection