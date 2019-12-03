<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UsuariaModel;

class UsuariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $usuaria;

    public function __construct(UsuariaModel $usuaria)
    {
        $this->usuaria = $usuaria;
        
    }

    public function formulario()
    {    
        
    }

    public function adm_home()
    {
        return view('home_adm');
    }

    public function index()
    {
        return view('cadastro_inic');
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
    public function store(Request $request , UsuariaModel $usuaria)
    {   
        $dataform = $request->all();
        $dataform['tipo_user'] = 1;
        $insert = $usuaria->create($dataform);
        /*$dados = array(
            'name' => $dataform['nome'],
            'id' => $usuaria->id,
            'email' => $dataform['email']
        );
        */
        $request->session()->get('id', $insert->id);
        $request->session()->get('email', $insert->email);
        //return session()->all();
        //$dataform2['idUsuaria'] = $usuaria->id;
        //$user->create($dataform);

        return redirect()->route('contato.create');
        //return view('auth\register', compact('dados'));
        //return UsuariaModel::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Teste";
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

    public function prox_form(Request $request)
    {
        $email = $request->only(['email']);

        return $email;
    }
}
