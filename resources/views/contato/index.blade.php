@extends('layout.site') {{--acessando a pasta layout--}}
@section('titulo', 'contatos') {{--alterando o titulo--}}

@section('conteudo') {{--colocando as informaçoes da view dentro do body--}}
    <h3>Essa é a view Index</h3>
    @foreach($contatos as $contato)
        <p>{{$contato->nome}}</p>
        <p>{{$contato->telefone}}</p>
    @endforeach

@endsection

