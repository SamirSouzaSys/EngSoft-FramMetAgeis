<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ModelUnidadeFederativa;


class UnidadesFederativasController extends Controller
{

    private $objUnidadeFederativa;

    public function __construct(){
        $this->objUnidadeFederativa = new ModelUnidadeFederativa();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // dd($this->objUnidadeFederativa->find()->all());
        // dd($this->objUnidadeFederativa->all());
        $unidadesFederativas = $this->objUnidadeFederativa->all();
        
        return view('unidadesFederativas',compact('unidadesFederativas'));
        
        // return view('unidadesFederativas');
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
        $unidadeFederativa = $this->objUnidadeFederativa->create([
            'SGL_UNIDADE_FEDERATIVA' => $request->siglaUFAdd,
            'NOM_UNIDADE_FEDERATIVA' => $request->nomeUFAdd
        ]);

        if($unidadeFederativa) {
            return redirect('unidadesFederativas');
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
        // dd($this->objUnidadeFederativa->find()->all());
        // dd($this->objUnidadeFederativa->all());
        $unidadeFederativa = $this->objUnidadeFederativa->find($id);
        
        return view('unidadeFederativa',compact('unidadeFederativa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unidadesFederativas = $this->objUnidadeFederativa->all();

        $unidadeFederativaEdit = $this->objUnidadeFederativa->find($id);
        $showEditModal = true;

        return view('unidadesFederativas',compact('unidadesFederativas','unidadeFederativaEdit','showEditModal'));
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
        $this->objUnidadeFederativa->where(['SGL_UNIDADE_FEDERATIVA'=>$id])->update([
            'SGL_UNIDADE_FEDERATIVA' => $request->siglaUFEdit,
            'NOM_UNIDADE_FEDERATIVA' => $request->nomeUFEdit
        ]);
        return redirect('unidadesFederativas');
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
