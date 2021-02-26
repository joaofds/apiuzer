<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class AppClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uri = '/clients';
        $response = self::initRequest($uri);
        $collection = collect(json_decode($response, true));
        return view('clients.index')->with('data', $collection);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uri = '/clients';
        $method = "POST";

        $data               = [];
        $data['nome']       = $request->nome;
        $data['email']      = $request->email;
        $data['telefone']   = $request->telefone;
        $data = json_encode($data);

        $response = self::initRequest($uri, $method, $data);
        if ($response) {
            return redirect()->route('clientes.index');
        }
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $uri = "/clients/$id";
        $response = self::initRequest($uri);
        $collection = collect(json_decode($response, true));
        return view('clients.create')->with('data', $collection);
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
        $uri = "/clients/$id";
        $method = "PUT";

        $data               = [];
        $data['nome']       = $request->nome;
        $data['email']      = $request->email;
        $data['telefone']   = $request->telefone;
        $data = json_encode($data);

        $response = self::initRequest($uri, $method, $data);
        if ($response) {
            return redirect()->route('clientes.index');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $uri = "/clients/$id";
        $method = "DELETE";

        $response = self::initRequest($uri, $method);
        $collection = collect(json_decode($response, true));
        return redirect()->back()->with('data', $collection);
    }

    /**
     * Init CURL request to API
     *
     * @param $uri
     * @param null $method
     * @param null $data
     * @return bool|string
     */
    public function initRequest($uri, $method = null, $data = null)
    {
        $url = env('API_URL');
        $ch = curl_init();
        switch ($method) {
            case 'POST':
                curl_setopt($ch, CURLOPT_POST, 1);
                if ($data)
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                break;
            case 'PUT':
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
                if ($data)
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                break;
            case 'DELETE':
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
                break;
        }

        curl_setopt($ch, CURLOPT_URL, $url.$uri);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec ($ch);
        curl_close ($ch);
        return $response;
    }
}
