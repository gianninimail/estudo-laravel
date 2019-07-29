@extends('site.templates.template1')

@section('conteudo')

<h1>Teste de páginas View utilizando Laravel e o Blade</h1>
{{$teste}} - {{$teste2}} - {{$teste3}}

@if($var1 == '123')

    <p>É igual</p>

@endif

@forelse($arrayData as $iten)

    <p>Array item: {{$iten}}</p>

@empty

    <p>Não existem itens para exibir</p>

@endforelse

@endsection