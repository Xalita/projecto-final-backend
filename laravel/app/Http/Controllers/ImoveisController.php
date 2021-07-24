<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Imovel;
use App\Models\User;

class ImoveisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view ('imoveis.index', ['batatas' => Imovel::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imoveis.create', );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $imovel = $this->fillImovel(new Imovel(), $input);
        $imovel->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Imovel
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $imovel = Imovel::find($id);
        // dd($imovel);
        return view('imoveis.show', ["cebolas" => $imovel]);
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

    public function fillImovel(Imovel $imovel, array $input)
    {
        $imovel->local = $input ['local'];
        $imovel->valor = $input ['valor'];
        $imovel->tipo_de_imovel = $input['tipo_de_imovel'];

        return $imovel;
    }


}
