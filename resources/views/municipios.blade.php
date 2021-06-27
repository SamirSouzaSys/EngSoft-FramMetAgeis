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
        <th scope="col">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddMun">
            <i class="fas fa-plus-circle"></i>
            </button>
        </th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td scope="row">1</td><td> São Luís</td><td>1 108 975</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square m1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">2</td><td> Imperatriz</td><td>259 337</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square m1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">3</td><td> São José de Ribamar</td><td>179 028</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square m1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">4</td><td> Timon</td><td>170 222</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square m1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">5</td><td>Caxias</td><td>165 525</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square m1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">6</td><td>Paço do Lumiar</td><td>123 747</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square m1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">7</td><td>Codó</td><td>123 116</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square m1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">8</td><td>Açailândia</td><td>113 121</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square m1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">9</td><td>Bacabal</td><td>104 709</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square m1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">10</td><td>Balsas</td><td>95 929</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">11</td><td>Santa Inês</td><td>89 489</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">12</td><td>Barra do Corda</td><td>88 492</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">13</td><td>Pinheiro</td><td>83 777</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">14</td><td>Chapadinha</td><td>80 195</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">15</td><td>Santa Luzia</td><td>72 887</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">16</td><td>Buriticupu</td><td>72 983</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">17</td><td>Grajaú</td><td>70 065</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">18</td><td>Itapecuru-Mirim</td><td>68 723</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">19</td><td>Coroatá</td><td>65 544</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">20</td><td>Barreirinhas</td><td>63 217</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">21</td><td>Tutoia</td><td>58 860</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">22</td><td>Vargem Grande</td><td>56 510</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">23</td><td>Viana</td><td>52 441</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">24</td><td>Zé Doca</td><td>51 714</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">25</td><td>Lago da Pedra</td><td>50 266</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">26</td><td>Coelho Neto</td><td>49 435</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">27</td><td>Presidente Dutra</td><td>47 804</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">28</td><td>Araioses</td><td>46 440</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">29</td><td>São Bento</td><td>45 211</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">30</td><td>Rosário</td><td>42 740</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">31</td><td>Santa Helena</td><td>42 130</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">32</td><td>Estreito</td><td>41 946</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">33</td><td>Tuntum</td><td>41 832</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">34</td><td>Bom Jardim</td><td>41 630</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">35</td><td>São Mateus do Maranhão</td><td>41 529</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">36</td><td>Amarante do Maranhão</td><td>41 435</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">37</td><td>Colinas</td><td>41 178</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">38</td><td>Pedreiras</td><td>39 229</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">39</td><td>Penalva</td><td>38 470</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">40</td><td>Santa Rita</td><td>37 855</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">41</td><td>Brejo</td><td>36 397</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">42</td><td>Turiaçu</td><td>35 604</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">43</td><td>Parnarama</td><td>34 907</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">44</td><td>São Domingos do Maranhão</td><td>34 376</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">45</td><td>Bom Jesus das Selvas</td><td>34 028</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">46</td><td>Matões</td><td>33 782</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">47</td><td>Monção</td><td>33 434</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">48</td><td>Urbano Santos</td><td>33 122</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">49</td><td>Pindaré-Mirim</td><td>32 941</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">50</td><td>Vitória do Mearim</td><td>32 764</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">51</td><td>Cururupu</td><td>32 695</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">52</td><td>Arame</td><td>32 701</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">53</td><td>Alto Alegre do Pindaré</td><td>31 919</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">54</td><td>Vitorino Freire</td><td>31 523</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">55</td><td>Raposa</td><td>30 761</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">56</td><td>Arari</td><td>29 848</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">57</td><td>Buriti</td><td>28 678</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">58</td><td>Timbiras</td><td>29 124</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">59</td><td>Humberto de Campos</td><td>28 717</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">60</td><td>São Bernardo</td><td>28 507</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">61</td><td>Miranda do Norte</td><td>28 381</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">62</td><td>Icatu</td><td>27 113</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">63</td><td>Alto Alegre do Maranhão</td><td>27 053</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">64</td><td>Anajatuba</td><td>26 803</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">65</td><td>Aldeias Altas</td><td>26 532</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">66</td><td>Itinga do Maranhão</td><td>26 000</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">67</td><td>São João dos Patos</td><td>25 929</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">68</td><td>Santa Quitéria do Maranhão</td><td>25 642</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">69</td><td>Turilândia</td><td>25 619</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">70</td><td>Governador Nunes Freire</td><td>25 577</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">71</td><td>Santa Luzia do Paruá</td><td>25 254</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">72</td><td>Pedro do Rosário</td><td>25 144</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">73</td><td>Carolina</td><td>24 322</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">74</td><td>Porto Franco</td><td>23 885</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">75</td><td>Buriti Bravo</td><td>23 884</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">76</td><td>João Lisboa</td><td>23 632</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">77</td><td>Carutapera</td><td>23 807</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">78</td><td>Matinha</td><td>23 370</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">79</td><td>Dom Pedro</td><td>23 350</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">80</td><td>Peritoró</td><td>23 196</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">81</td><td>São Vicente Ferrer</td><td>22 247</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">82</td><td>Alcântara</td><td>22 097</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">83</td><td>Trizidela do Vale</td><td>21 998</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">84</td><td>Cantanhede</td><td>21 995</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">85</td><td>Centro Novo do Maranhão</td><td>21 622</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">86</td><td>Pio XII</td><td>21 485</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">87</td><td>Maracaçumé</td><td>21 395</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">88</td><td>Paraibano</td><td>21 386</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">89</td><td>Bequimão</td><td>21 280</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">90</td><td>Paulo Ramos</td><td>21 040</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">91</td><td>Mirador</td><td>21 015</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">92</td><td>Nova Olinda do Maranhão</td><td>20 928</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">93</td><td>São João Batista</td><td>20 665</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">94</td><td>Riachão</td><td>20 195</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">95</td><td>Cândido Mendes</td><td>20 178</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">96</td><td>Magalhães de Almeida</td><td>19 826</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">97</td><td>Palmeirândia</td><td>19 722</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">98</td><td>Olho d'Água das Cunhãs</td><td>19 505</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">99</td><td>Pastos Bons</td><td>19 472</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">100</td><td>Morros</td><td>19 433</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">101</td><td>Cajari</td><td>19 379</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">102</td><td>Formosa da Serra Negra</td><td>19 089</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">103</td><td>Passagem Franca</td><td>19 019</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">104</td><td>Presidente Sarney</td><td>18 918</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">105</td><td>São Raimundo das Mangabeiras</td><td>18 868</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">106</td><td>São Luís Gonzaga do Maranhão</td><td>18 856</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">107</td><td>Barão de Grajaú</td><td>18 820</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">108</td><td>São Benedito do Rio Preto</td><td>18 663</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">109</td><td>Pirapemas</td><td>18 625</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">110</td><td>Bacuri</td><td>18 582</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">111</td><td>São João do Soter</td><td>18 543</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">112</td><td>Governador Edison Lobão</td><td>18 296</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">113</td><td>Sítio Novo</td><td>18 081</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">114</td><td>Gonçalves Dias</td><td>17 934</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">115</td><td>Poção de Pedras</td><td>17 873</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">116</td><td>Esperantinópolis</td><td>17 241</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">117</td><td>Apicum-Açu</td><td>17 239</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">118</td><td>Bacabeira</td><td>17 055</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">119</td><td>Mata Roma</td><td>16 829</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">120</td><td>Governador Eugênio Barros</td><td>16 828</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">121</td><td>Matões do Norte</td><td>16 745</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">122</td><td>Jenipapo dos Vieiras</td><td>16 515</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">123</td><td>Bom Lugar</td><td>16 294</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">124</td><td>Lago Verde</td><td>16 257</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">125</td><td>Maranhãozinho</td><td>16 265</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">126</td><td>Conceição do Lago-Açu</td><td>16 237</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">127</td><td>Joselândia</td><td>16 168</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">128</td><td>Itaipava do Grajaú</td><td>16 057</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">129</td><td>Paulino Neves</td><td>16 035</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">130</td><td>Santo Amaro do Maranhão</td><td>15 846</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">131</td><td>São João do Caru</td><td>15 808</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">132</td><td>Anapurus</td><td>15 732</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">133</td><td>Fortuna</td><td>15 552</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">134</td><td>Buritirana</td><td>15 430</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">135</td><td>Araguanã</td><td>15 426</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">136</td><td>Primeira Cruz</td><td>15 315</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">137</td><td>Mirinzal</td><td>14 962</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">138</td><td>Olinda Nova do Maranhão</td><td>14 701</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">139</td><td>Cidelândia</td><td>14 697</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">140</td><td>Santo Antônio dos Lopes</td><td>14 528</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">141</td><td>Nina Rodrigues</td><td>14 454</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">142</td><td>Campestre do Maranhão</td><td>14 374</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">143</td><td>Peri Mirim</td><td>14 318</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">144</td><td>Senador La Rocque</td><td>14 293</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">145</td><td>Igarapé do Meio</td><td>14 177</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">146</td><td>Satubinha</td><td>13 914</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">147</td><td>Centro do Guilherme</td><td>13 458</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">148</td><td>Vila Nova dos Martírios</td><td>13 392</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">149</td><td>Santana do Maranhão</td><td>13 386</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">150</td><td>Davinópolis</td><td>12 908</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">151</td><td>Presidente Juscelino</td><td>12 734</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">152</td><td>São Pedro da Água Branca</td><td>12 690</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">153</td><td>Fortaleza dos Nogueiras</td><td>12 631</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">154</td><td>Água Doce do Maranhão</td><td>12 571</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">155</td><td>São Francisco do Maranhão</td><td>12 210</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">156</td><td>Loreto</td><td>12 157</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">157</td><td>Axixá</td><td>12 130</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">158</td><td>Guimarães</td><td>12 030</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">159</td><td>Lima Campos</td><td>11 893</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">160</td><td>Godofredo Viana</td><td>11 819</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">161</td><td>São Francisco do Brejão</td><td>11 798</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">162</td><td>Lagoa Grande do Maranhão</td><td>11 394</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">163</td><td>Duque Bacelar</td><td>11 349</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">164</td><td>Igarapé Grande</td><td>11 320</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">165</td><td>Lagoa do Mato</td><td>11 250</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">166</td><td>Bela Vista do Maranhão</td><td>11 209</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">167</td><td>Presidente Vargas</td><td>11 193</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">168</td><td>Alto Parnaíba</td><td>11 190</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">169</td><td>São João do Paraíso</td><td>11 177</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">170</td><td>Cajapió</td><td>11 177</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">171</td><td>Senador Alexandre Costa</td><td>11 141</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">172</td><td>Capinzal do Norte</td><td>10 934</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">173</td><td>Lago do Junco</td><td>10 840</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">174</td><td>Governador Archer</td><td>10 840</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">175</td><td>Cedral</td><td>10 675</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">176</td><td>Sucupira do Norte</td><td>10 636</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">177</td><td>Fernando Falcão</td><td>10 360</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">178</td><td>Serrano do Maranhão</td><td>10 253</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">179</td><td>Governador Newton Bello</td><td>10 180</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">180</td><td>Jatobá</td><td>10 153</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">181</td><td>Cachoeira Grande</td><td>9 431</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">182</td><td>Boa Vista do Gurupi</td><td>9 287</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">183</td><td>Brejo de Areia</td><td>9 188</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">184</td><td>Montes Altos</td><td>9 160</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">185</td><td>Lago dos Rodrigues</td><td>8 873</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">186</td><td>Central do Maranhão</td><td>8 673</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">187</td><td>Tasso Fragoso</td><td>8 521</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">188</td><td>Feira Nova do Maranhão</td><td>8 504</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">189</td><td>Milagres do Maranhão</td><td>8 464</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">190</td><td>Altamira do Maranhão</td><td>8 128</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">191</td><td>Governador Luiz Rocha</td><td>7 807</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">192</td><td>Marajá do Sena</td><td>7 792</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">193</td><td>Ribamar Fiquene</td><td>7 791</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">194</td><td>Santa Filomena do Maranhão</td><td>7 773</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">195</td><td>São José dos Basílios</td><td>7 641</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">196</td><td>Lajeado Novo</td><td>7 550</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">197</td><td>Belágua</td><td>7 469</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">198</td><td>São Domingos do Azeitão</td><td>7 392</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">199</td><td>Presidente Médici</td><td>7 015</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">200</td><td>Amapá do Maranhão</td><td>6 962</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">201</td><td>Luís Domingues</td><td>6 951</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">202</td><td>São Roberto</td><td>6 719</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">203</td><td>Afonso Cunha</td><td>6 524</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">204</td><td>Graça Aranha</td><td>6 262</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">205</td><td>Junco do Maranhão</td><td>6 043</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">206</td><td>Porto Rico do Maranhão</td><td>5 975</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">207</td><td>Tufilândia</td><td>5 840</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">208</td><td>Sambaíba</td><td>5 671</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">209</td><td>Sucupira do Riachão</td><td>5 660</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">210</td><td>Bacurituba</td><td>5 644</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">211</td><td>Benedito Leite</td><td>5 632</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">212</td><td>Nova Colinas</td><td>5 384</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">213</td><td>São Raimundo do Doca Bezerra</td><td>5 237</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">214</td><td>Nova Iorque</td><td>4 683</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">215</td><td>São Pedro dos Crentes</td><td>4 668</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">216</td><td>São Félix de Balsas</td><td>4 585</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
            <i class="fas fa-times-circle"></i>
            </button>  
        </td>
        </tr>
        <tr>
        <td scope="row">217</td><td>Bernardo do Mearim</td><td>3 432</td><td>Nome do Prefeito Exemplo</td><td>MA</td>
        <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditMun">
            <i class="fas fa-pen-square me-1"></i>
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteMun">
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
  <div class="modal fade" id="modalAddMun" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAddLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Adicionar Municípios</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="modalAddMunForm" >
          <div class="modal-body">
            <div class="mb-3">
              <label for="codigoMun" class="form-label">Código</label>
              <label class="d-none validation"> </label>
              <input type="number" class="form-control" id="codigoMunAdd" requiredData="requiredData">
              
            </div>
            <div class="mb-3">
              <label for="nomeMunAdd" class="form-label">Nome</label>
              <label class="d-none validation"> </label>
              <input type="text" class="form-control" id="nomeMunAdd" requiredData="requiredData">
            </div>
            <div class="mb-3">
              <label for="numeroPopMunAdd" class="form-label">Número da população</label>
              <label class="d-none validation"> </label>
              <input type="number" class="form-control" id="numeroPopMunAdd">
            </div>
            <div class="mb-3">
              <label for="nomePrefeitoMunAdd" class="form-label">Nome do Prefeito</label>
              <label class="d-none validation"> </label>
              <input type="text" class="form-control" id="nomePrefeitoMunAdd">
            </div>
            <div class="mb-3">
              <label for="siglaUfMunAdd" class="form-label">Sigla da Unidade Federativa</label>
              <label class="d-none validation"> </label>
              <input type="text" maxlength="2" class="form-control" id="siglaUfMunAdd" requiredData="requiredData">
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
