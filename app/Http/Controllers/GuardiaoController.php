<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Guardiao;

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
        if(Guardiao::all()->where('idUsuaria', session('id'))->count()!=3){
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
        $guardiao [] = array(Guardiao::where('idUsuaria',$id)->get());
        return $guardiao['id'];
       //return Guardiao::where('idUsuaria',$id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('editar_guardiao');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
       /* $dataform = $request->all();
        
        $guardiao = $this->guardiao->find($id);

        $update = $guardiao->update($dataform);

        if ($update){
            return redirect()->route('guardiao.edit');
        }else{
            return redirect()->echo ("Falha");

        }

        */
        $guardiao = $this->guardiao->all()->where('idUsuaria',$id)->get();
        return Guardiao::where('idUsuaria',$id)->get();

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
