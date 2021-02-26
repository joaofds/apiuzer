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
                    'message' => 'Não existem clients cadastrados'
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
                    'message' => 'Registro cadastrado com sucesso!'
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
                    'message' => 'Registro não encontrado.'
                ], 404
            );
        } else {
            return response()->json($client, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $client = Client::find($id);
            if (!$client) {
                return response()->json(
                    [
                        'message' => 'Registro não encontrado.'
                    ], 404
                );
            }
            $client->update($request->all());
            return response()->json($client, 200);
    }

    /**

     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response

     * Destroy thhe specified resource in storage
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse

     */
    public function destroy($id)
    {
        $client = Client::find($id);
        if(!$client) {
            return response()->json(
                [
                    'message'   => 'Registro não encontrado.'
                ], 404
            );
        }
        $client->delete();
        return response()->json(['message' => 'Registro deletado com sucesso.'], 200);
    }
}
