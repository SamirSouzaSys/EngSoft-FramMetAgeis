@extends('templates.template')

@section('tituloHtml')
    Small Site - Municípios
@endsection

@section('tituloPaginaInterno')
    Municípios
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
        <th scope="col">

            {{-- onclick="location.href='{{ url("municipios/create") }}'" --}}
            <button
                type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddMun">
                <i class="fas fa-plus-circle"></i>
            </button>
        </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($municipios as $municipio)
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

                {{-- <td><button onclick="location.href='{{ url('completed') }}'">
                    Check Stock</button></td> --}}

                <td class="coluna-buttons">
                    <button onclick="location.href='{{ url("municipios/$municipio->COD_MUNICIPIO") }}'" type="button" class="btn btn-primary text-nowrap" data-bs-toggle="modal" data-bs-target="">
                        <i class="fas fa-book "></i>
                    </button>
                    <button type="button" class="btn btn-primary text-nowrap" data-bs-toggle="modal" data-bs-target="#modalEditMun">
                        <i class="fas fa-pen-square "></i>
                    </button>
                    <button type="button" class="btn btn-primary text-nowrap" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
                        <i class="fas fa-times-circle"></i>
                    </button>  
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    </div>
@endsection
    

@section('modals')
  <!-- Modal Add Form-->
  <div class="modal fade" id="modalAddMun" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAddLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Adicionar Municípios</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="modalAddMunForm" name="modalAddMunForm" method="post"
            action="{{ url('municipios') }}">
            @csrf
          <div class="modal-body">
            {{-- <div class="mb-3">
              <label for="codigoMun" class="form-label">Código</label>
              <label class="d-none validation"> </label>
              <input type="number" class="form-control" id="codigoMunAdd" name="codigoMunAdd" requiredData="requiredData">
            </div> --}}

            <div class="mb-3">
              <label for="nomeMunAdd" class="form-label">Nome</label>
              <label class="d-none validation"> </label>
              <input type="text" class="form-control" id="nomeMunAdd" name="nomeMunAdd" requiredData="requiredData">
            </div>
            <div class="mb-3">
              <label for="numeroPopMunAdd" class="form-label">Número da população</label>
              <label class="d-none validation"> </label>
              <input type="number" class="form-control" id="numeroPopMunAdd" name="numeroPopMunAdd">
            </div>
            <div class="mb-3">
              <label for="nomePrefeitoMunAdd" class="form-label">Nome do Prefeito</label>
              <label class="d-none validation"> </label>
              <input type="text" class="form-control" id="nomePrefeitoMunAdd" name="nomePrefeitoMunAdd">
            </div>
            <div class="mb-3">
              <label for="siglaUfMunAdd" class="form-label">Sigla da Unidade Federativa</label>
              <label class="d-none validation"> </label>

              <select class="form-select" aria-label="Default select example"
              id="siglaUfMunAdd" name="siglaUfMunAdd">
                @foreach ($unidadesFederativas as $unidadeFederativa)
                    <option value="{{ $unidadeFederativa->SGL_UNIDADE_FEDERATIVA}}">
                        {{ $unidadeFederativa->NOM_UNIDADE_FEDERATIVA }} -
                        {{ $unidadeFederativa->SGL_UNIDADE_FEDERATIVA }}</option>
                @endforeach
              </select>


              {{-- <input type="text" maxlength="2" class="form-control" id="siglaUfMunAdd" name="siglaUfMunAdd" requiredData="requiredData"> --}}
            </div>
          </div>
          <div class="modal-footer">
            <!-- data-bs-dismiss="modal" -->
            <input type="submit" class="btn btn-primary" form="modalAddMunForm" value="Confirmar Adição">
            <!-- <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Adicionar Button</button> -->
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <!-- Modal Edit Form-->
  <div class="modal fade" id="modalEditMun" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Alterar/Modificar os dados do Município</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="modalEditMunForm">
          <div class="modal-body">
            <div class="mb-3">
              <label for="codigoMunEdit" class="form-label">Alterar/Modificar o Código</label>
              <label class="d-none validation"> </label>
              <input type="number" class="form-control" id="codigoMunEdit" requiredData="requiredData">
            </div>
            <div class="mb-3">
              <label for="nomeMunEdit" class="form-label">Alterar/Modificar o Nome</label>
              <label class="d-none validation"> </label>
              <input type="text" class="form-control" id="nomeMunEdit" requiredData="requiredData">
            </div>
            <div class="mb-3">
              <label for="numeroPopMunEdit" class="form-label">Alterar/Modificar o Número da população</label>
              <label class="d-none validation"> </label>
              <input type="number" class="form-control" id="numeroPopMunEdit">
            </div>
            <div class="mb-3">
              <label for="nomePrefeitoMunEdit" class="form-label">Alterar/Modificar o Nome do Prefeito</label>
              <label class="d-none validation"> </label>
              <input type="text" class="form-control" id="nomePrefeitoMunEdit">
            </div>
            <div class="mb-3">
              <label for="siglaUfMunEdit" class="form-label">Alterar/Modificar a Sigla da Unidade Federativa</label>
              <label class="d-none validation"> </label>
              <input type="text" maxlength="2" class="form-control" id="siglaUfMunEdit" requiredData="requiredData">
            </div>
            <div class="modal-footer">
              <!-- data-bs-dismiss="modal" -->
              <input type="submit" class="btn btn-primary" form="modalEditMunForm" value="Confirmar Edição">
              <!-- <button type="submit" class="btn btn-primary" >Alterar/Modificar</button> -->
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Delete Form-->
  <div class="modal fade" id="modalDeleteMun" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Excluir os dados do Município</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="modalDeleteForm" action="#">
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Você tem certeza que deseja excluir os dados do Município?</label>
            </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-danger" form="modalEditMunForm" value="Excluir">
            <input type="submit" class="btn btn-primary" form="modalEditMunForm" data-bs-dismiss="modal" value="Cancelar">
            <!-- <button type="submit" class="btn btn-danger">Excluir</button>
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button> -->
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
