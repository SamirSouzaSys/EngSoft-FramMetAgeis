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
            <th scope="col">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddUF">
                <i class="fas fa-plus-circle"></i>
                </button>
            </th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">AC</th>
            <td>Acre</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">AL</th>
            <td>Alagoas</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">AP</th>
            <td>Amapá</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">AM</th>
            <td>Amazonas</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">BA</th>
            <td>Bahia</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">CE</th>
            <td>Ceará</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">DF</th>
            <td>Distrito Federal</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">ES</th>
            <td>Espírito Santo</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">GO</th>
            <td>Goiás</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">MA</th>
            <td>Maranhão</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">MT</th>
            <td>Mato Grosso</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">MS</th>
            <td>Mato Grosso do Sul</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">MG</th>
            <td>Minas Gerais</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">PA</th>
            <td>Pará</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">PB</th>
            <td>Paraíba</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">PR</th>
            <td>Paraná</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">PE</th>
            <td>Pernambuco</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">PI</th>
            <td>Piauí</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">RJ</th>
            <td>Rio de Janeiro</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">RN</th>
            <td>Rio Grande do Norte</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">RS</th>
            <td>Rio Grande do Sul</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">RO</th>
            <td>Rondônia</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">RR</th>
            <td>Roraima</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">SC</th>
            <td>Santa Catarina</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">SP</th>
            <td>São Paulo</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">SE</th>
            <td>Sergipe</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
            <tr>
            <th scope="row">TO</th>
            <td>Tocantins</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditUF">
                <i class="fas fa-pen-square me-1"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteUF">
                <i class="fas fa-times-circle"></i>
                </button>  
            </td>
            </tr>
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
                <form id="modalAddUFForm">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="siglaUFAdd" class="form-label">Sigla da Unidade Federativa</label>
                            <label class="d-none validation"> </label>
                            <input type="text" maxlength="2" class="form-control" id="siglaUFAdd" requiredData="requiredData">
                        </div>
                        <div class="mb-3">
                            <label for="nomeUFAdd" class="form-label">Nome</label>
                            <label class="d-none validation"> </label>
                            <input type="text" class="form-control" id="nomeUFAdd" requiredData="requiredData">
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
