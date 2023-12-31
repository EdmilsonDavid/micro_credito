<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DataTables;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.clientes.index');
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
        //
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


    

    public function allClientes()
    {
//         $users = User::all();

        $users = DB::table('clientes')
            ->select('clientes.*', 'nome_completo', 'nuit', 'localizacao')
            ->get();

        return DataTables::of($users)
            ->addColumn('action', function($user){
                return '<a name="edit" id=" '.$user->user_id.' " class="edit btn btn-icon btn-sm">
                    <i class="fa fa-edit"></i>
                </a>'.' '.

                    '<input type="text" value=" '.$user->user_id.' " class="pegar hidden" />'.' '.

                    '<a name="delete" id="'.$user->user_id.'" class="delete btn btn-icon btn-sm js-sweetalert">
                    <i class="fa fa-trash-o text-danger"></i>
                </a>';

            })->make(true);
    }




}
