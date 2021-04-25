<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Small Site - Unidades Federativas </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/pricing/">   

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/fonts/css/all.css" rel="stylesheet">

    <!-- Favicons -->
    <!-- <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico"> -->
<!--    <meta name="theme-color" content="#7952b3"> -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      body {
        background-image: linear-gradient(180deg, #eee, #fff 100px, #fff);
      }

      .container {
        max-width: 960px;
      }

      .pricing-header {
        max-width: 700px;
      }

    </style>

    <!-- Custom styles for this template -->
  </head>
  <body>
    
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check" viewBox="0 0 16 16">
      <title>Check</title>
      <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
    </symbol>
  </svg>

  <div class="container py-3">
    <header class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
        <span class="fs-4">Small Site</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="municipios.php">Municípios</strong></a>
        <a class="py-2 text-dark text-decoration-none" href="unidadesFederativas.php"><strong>Unidades Federativas</strong></a>
      </nav>
    </header>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Small Site</h1>
      <p class="fs-5 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget sollicitudin erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies libero ut placerat blandit. Praesent tincidunt massa dolor.</p>
      <br/>
      <h3><strong>Unidades Federativas</strong></h3>
    </div>

    <main>
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <table class="table caption-top">
        <thead>
          <tr>
            <th scope="col">Sigla</th>
            <th scope="col">Nome</th>
            <th scope="col">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddForm">
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
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">AL</th>
            <td>Alagoas</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">AP</th>
            <td>Amapá</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">AM</th>
            <td>Amazonas</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">BA</th>
            <td>Bahia</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">CE</th>
            <td>Ceará</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">DF</th>
            <td>Distrito Federal</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">ES</th>
            <td>Espírito Santo</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">GO</th>
            <td>Goiás</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">MA</th>
            <td>Maranhão</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">MT</th>
            <td>Mato Grosso</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">MS</th>
            <td>Mato Grosso do Sul</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">MG</th>
            <td>Minas Gerais</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">PA</th>
            <td>Pará</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">PB</th>
            <td>Paraíba</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">PR</th>
            <td>Paraná</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">PE</th>
            <td>Pernambuco</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">PI</th>
            <td>Piauí</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">RJ</th>
            <td>Rio de Janeiro</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">RN</th>
            <td>Rio Grande do Norte</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">RS</th>
            <td>Rio Grande do Sul</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">RO</th>
            <td>Rondônia</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">RR</th>
            <td>Roraima</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">SC</th>
            <td>Santa Catarina</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">SP</th>
            <td>São Paulo</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">SE</th>
            <td>Sergipe</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
          <tr>
            <th scope="row">TO</th>
            <td>Tocantins</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditForm">
                <i class="fas fa-pen-square me-1"></i>
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">
                <i class="fas fa-times-circle"></i>
              </button>  
            </td>
          </tr>
        </tbody>
      </table>
      </div>
    </main>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md">
          <img class="mb-2" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="24" height="19">
          <small class="d-block mb-3 text-muted">&copy; 2021</small>
        </div>
        <div class="col-6 col-md">
          <h5>Small Site Recursos</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Recurso 1</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Recurso 1</a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>

  <!-- Modal Add Form-->
  <div class="modal fade" id="modalAddForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAddFormLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Adicionar Unidades Federativas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form>
        <div class="modal-body">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Sigla da Unidade Federativa</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nome da Unidade Federativa</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Adicionar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <!-- Modal Edit Form-->
  <div class="modal fade" id="modalEditForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditFormLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Alterar/Modificar os dados da Unidade Federativa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form>
        <div class="modal-body">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Alterar/Modificar a Sigla da Unidade Federativa</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Alterar/Modificar o Nome da Unidade Federativa</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Alterar/Modificar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Delete Form-->
  <div class="modal fade" id="modalDeleteForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalDeleteFormLabel" aria-hidden="true">
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
            <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Excluir</button>
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="assets/js/bootstrap.bundle.js"></script>
  <script src="assets/js/jquery-3.6.0.js"></script>
  
  </body>
</html>
