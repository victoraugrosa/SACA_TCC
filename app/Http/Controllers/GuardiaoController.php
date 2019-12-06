<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Guardiao;
use App\User;

//use Illuminate\Support\Arr;

class GuardiaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $guardiao;

    public function __construct(Guardiao $guardiao)
    {
        $this->guardiao = $guardiao;
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $botao = 0;
        return view('cadastrar_guardiao',compact('botao', $botao));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Guardiao $guardiao)
    {
        if(Guardiao::all()->where('idUsuaria', session('id'))->count()<3){
            $dataform4 = $request->all();
            $insert4 = $guardiao->create($dataform4);
            $insert4->save();
            return view ('cadastrar_guardiao', compact('botao', $botao = 0) );
        }
        else{
            
            $botao = 1;
            return view ('cadastrar_guardiao', compact('botao', $botao));
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
        //$guardiao[3] = array(Guardiao::all()->where('idUsuaria',$id));
        //return $guardiao->key();
        //$guardiao = Guardiao::all();
        //foreach ( $guardiao as $gua ) {
        //    echo " Nome: {$gua->nome} <br>";
        //}
        //return()

        $guardiao = Guardiao::all()->where('idUsuaria',$id);
        //return Guardiao::all()->where('idUsuaria',$id);
        return view('editar_guardiao', compact('guardiao', $guardiao));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$guardiao = Guardiao::all()->where('idUsuaria',$id);

        //return view('editar_guardiao', compact('guardiao', $guardiao));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id, $guardiao)
    {
        $update = Guardiao::where('id', $id)->update($guard);

        if ($guardiao){
            return redirect()->route('guardiao.show', Auth::user()->idUsuaria );
        }else{
            return redirect()->echo ("Falha");

        }
        /*$request->validate([
            'nome'=>'required',
            'ddd'=>'required',
            'celular'=>'required'
        ]);

        $guardiao = Guardiao::find($id);

        $guardiao->nome =  $request->get('nome');
        $guardiao->ddd = $request->get('ddd');
        $guardiao->celular = $request->get('celular');
        $guardiao->save();
            
        redirect()->route('guardiao.show', Auth::user()->idUsuaria );
        */

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
