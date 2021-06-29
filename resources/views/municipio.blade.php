@extends('templates.template')

@section('tituloHtml')
    Small Site - Município
@endsection

@section('tituloPaginaInterno')
    Município
@endsection

@section('content')
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <table class="table caption-top">
    <thead>
        <tr>
          <th scope="col">Código</th>
          <th scope="col">Nome</th>
          <th scope="col">Número da População</th>
          <th scope="col">Nome do Prefeito</th>
          <th scope="col">Sigla da unidade Federativa</th>
          <th scope="col">Nome da unidade Federativa</th>
        </tr>
    </thead>
    <tbody>
        @php
            $unidadeFederativa = $municipio->find($municipio->COD_MUNICIPIO)->relUnidadeFederativa;
        @endphp

            <tr>
                {{-- scope="row" --}}
                <td>{{ $municipio->COD_MUNICIPIO }}</td>
                <td>{{ $municipio->NOM_MUNICIPIO }}</td>
                <td>{{ $municipio->NUM_POPULACAO }}</td>
                <td>{{ $municipio->NOM_PREFEITO }}</td>
                <td>{{ $municipio->SGL_UNIDADE_FEDERATIVA }}</td>
                <td>{{ $unidadeFederativa->NOM_UNIDADE_FEDERATIVA }}</td>
            </tr>
    </tbody>
    </table>
    </div>
@endsection