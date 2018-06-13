@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('erro'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
        @endif
        <div class="col-md-12">
            <form action="{{route('categoria_store')}}" method="POST">
                @csrf
                <div class="form-group col-md-4">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" required name="nome" id="nome">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Cadastrar categoria</button>
                </div>
            </form>
        </div>
    </div>
@endsection