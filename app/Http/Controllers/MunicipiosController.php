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
        $municipios = $this->objMunicipio->all()->take(30);
        return view('municipios', compact('municipios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
