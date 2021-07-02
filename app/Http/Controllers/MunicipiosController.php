<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ModelMunicipio;
use App\Models\ModelUnidadeFederativa;

class MunicipiosController extends Controller
{

    private $objUnidadeFederativa;
    private $objMunicipio;

    public function __construct(){
        $this->objUnidadeFederativa = new ModelUnidadeFederativa();
        $this->objMunicipio = new ModelMunicipio();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd($this->objUnidadeFederativa->all());
        // dd($this->objUnidadeFederativa->find('MA')->relMunicipios);

        // dd($this->objMunicipio->all());
        // dd($this->objMunicipio->find(1)->relUnidadeFederativa);
        
        // $municipios = $this->objMunicipio->all()->sortBy('NUM_POPULACAO');
        // $municipios = $this->objMunicipio->all()->sortByDesc('NUM_POPULACAO');

        $unidadesFederativas = $this->objUnidadeFederativa->all();

        $municipios = $this->objMunicipio->all()->take(30);
        return view('municipios', compact('municipios','unidadesFederativas'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mun = $this->objMunicipio->create([
            // 'COD_MUNICIPIO'          => $request->codigoMunAdd,
            'NOM_MUNICIPIO'          => $request->nomeMunAdd,
            'NUM_POPULACAO'          => $request->numeroPopMunAdd,
            'NOM_PREFEITO'           => $request->nomePrefeitoMunAdd,
            'SGL_UNIDADE_FEDERATIVA' => $request->siglaUfMunAdd
        ]);

        if($mun) {
            return redirect('municipios');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // echo $id;
        $municipio = $this->objMunicipio->find($id);
        return view('municipio', compact('municipio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $municipioEdit = $this->objMunicipio->find($id);
        $unidadeFederativaEdit = $this->objUnidadeFederativa->find($municipioEdit->SGL_UNIDADE_FEDERATIVA);
        $showEditModal = true;

        $municipios = $this->objMunicipio->all()->take(30);
        $unidadesFederativas = $this->objUnidadeFederativa->all();

        return view('municipios',
            compact('municipios','unidadesFederativas',
            'municipioEdit','unidadeFederativaEdit','showEditModal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    public function update(Request $request, $id)
    {
        $this->objMunicipio->where(['COD_MUNICIPIO'=>$id])->update([
            // 'COD_MUNICIPIO'          => $request->codigoMunAdd,
            'NOM_MUNICIPIO'          => $request->nomeMunEdit,
            'NUM_POPULACAO'          => $request->numeroPopMunEdit,
            'NOM_PREFEITO'           => $request->nomePrefeitoMunEdit,
            'SGL_UNIDADE_FEDERATIVA' => $request->siglaUfMunEdit
        ]);
        return redirect('municipios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
