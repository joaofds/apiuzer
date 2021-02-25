<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        if (count($clients) == 0) {
            return response()->json(
                [
                    'message' => 'não existem clientes cadastrados'
                ],200
            );
        } else {
            return response()->json($clients, 200);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client              = new Client();
        $client->nome        = $request->nome;
        $client->email       = $request->email;
        $client->telefone    = $request->telefone;
        $client->save();
        if ($client) {
            return response()->json(
                [
                    'message' => 'Cliente cadastrado com sucesso!'
                ], 201
            );
        } else {
            return response()->json(
                [
                    'message' => 'Serviço indisponível, tente novamente!'
                ], 500
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        if (!$client) {
            return response()->json(
                [
                    'message' => 'Cliente não encontrado.'
                ], 404
            );
        } else {
            return response()->json($client);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
