@extends('templates.template')

@section('tituloHtml')
    Small Site - Unidades Federativas
@endsection

@section('tituloPaginaInterno')
    Unidades Federativas
@endsection

@section('content')
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <table class="table caption-top">
        <thead>
            <tr>
            <th scope="col">Sigla</th>
            <th scope="col">Nome</th>
            <th scope="col">Qtd Municípios</th>
            <th scope="col">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddUF">
                <i class="fas fa-plus-circle"></i>
                </button>
            </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($unidadesFederativas as $unidadeFederativa)
                @php
                    $municipios = count($unidadeFederativa->find($unidadeFederativa->SGL_UNIDADE_FEDERATIVA)->relMunicipios);
                @endphp

                <tr>
                    <th scope="row">
                        {{ $unidadeFederativa->SGL_UNIDADE_FEDERATIVA }}
                    </th>
                    <td>
                        {{ $unidadeFederativa->NOM_UNIDADE_FEDERATIVA }}
                    </td>
                    </th>
                    <td>
                        {{ $municipios }}
                    </td>
                    <td class="coluna-buttons">
                        <button onclick="location.href='{{ url("unidadesFederativas/$unidadeFederativa->SGL_UNIDADE_FEDERATIVA") }}'" type="button" class="btn btn-primary text-nowrap" data-bs-toggle="modal" data-bs-target="">
                            <i class="fas fa-book "></i>
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                        <i class="fas fa-pen-square me-1"></i>
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
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
    <div class="modal fade" id="modalAddUF" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAddFormLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Adicionar Unidades Federativas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="modalAddUFForm" name="modalAddUFForm" method="post"
                action="{{ url('unidadesFederativas') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="siglaUFAdd" class="form-label">Sigla da Unidade Federativa</label>
                            <label class="d-none validation"> </label>
                            <input type="text" maxlength="2" class="form-control" id="siglaUFAdd" name="siglaUFAdd" requiredData="requiredData">
                        </div>
                        <div class="mb-3">
                            <label for="nomeUFAdd" class="form-label">Nome</label>
                            <label class="d-none validation"> </label>
                            <input type="text" class="form-control" id="nomeUFAdd" name="nomeUFAdd" requiredData="requiredData">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                        <!-- data-bs-dismiss="modal" -->
                    </div>
                </form>
            </div>
        </div>
    </div>
  
    <!-- Modal Edit Form-->
    <div class="modal fade" id="modalEditUF" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditUfLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Alterar/Modificar os dados da Unidade Federativa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="modalEditUFForm">
            <div class="modal-body">
                <div class="mb-3">
                <label for="siglaUFEdit" class="form-label">Alterar/Modificar a Sigla da Unidade Federativa</label>
                <label class="d-none validation"> </label>
                <input type="text" maxlength="2" class="form-control" id="siglaUFEdit" requiredData="requiredData">
                </div>
                <div class="mb-3">
                <label for="nomeUFEdit" class="form-label">Alterar/Modificar o Nome da Unidade Federativa</label>
                <label class="d-none validation"> </label>
                <input type="text" class="form-control" id="nomeUFEdit" requiredData="requiredData">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Alterar/Modificar</button>
                <!-- data-bs-dismiss="modal" -->
            </div>
            </form>
        </div>
        </div>
    </div>

    <!-- Modal Delete Form-->
    <div class="modal fade" id="modalDeleteUF" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalDeleteFormLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Excluir os dados da Unidade Federativa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form>
            <div class="modal-body">
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Você tem certeza que desja excluir os dados da Unidade Federativa?</label>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-danger" form="modalDeleteUFForm" value="Excluir">
                <input type="submit" class="btn btn-primary" form="modalDeleteUFForm" data-bs-dismiss="modal" value="Cancelar">
                <!-- <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Excluir</button> -->
                <!-- <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button> -->
            </div>
            </form>
        </div>
        </div>
    </div>
@endsection
