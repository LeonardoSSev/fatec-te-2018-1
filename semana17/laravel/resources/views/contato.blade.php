@extends('template')

@section('title', 'Dados para contato')

@section('body')
    <h1>Dados para contato</h1>

    <p>Entre em contato conosco através dos seguintes e-mails:</p>
    <ul>
        @foreach($emails as $email)
            <li>{{ $email }}</li>
        @endforeach
    </ul>
    <ul>
        <?php foreach($emails as $email): ?>
            <li><?= $email ?></li>
        <?php endforeach; ?>
    </ul>


@endsection('body')