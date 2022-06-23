<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client([
            'base_uri' => config('app.api_url')
        ]);
        $res = $client->request('GET', 'info');
        $info = json_decode($res->getBody()->getContents(), true);
        return view('info.index', compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('info.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client([
            'base_uri' => config('app.api_url')
        ]);
        $res = $client->request('POST', 'info', [
            'json'  => [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ]
        ]);
        return redirect()->route('info.index')
        ->with('message', 'Informasi baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = new Client([
            'base_uri' => config('app.api_url')
        ]);
        $res = $client->request('GET', 'info');
        $info = json_decode($res->getBody()->getContents(), true);
        return view('info.show', compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = new Client([
            'base_uri' => config('app.api_url')
        ]);
        $res = $client->request('GET', 'info', [
            'query' => ['id_info' => $id]
        ]);
        $info = json_decode($res->getBody()->getContents(), true);
        return view('info.edit', compact('info'));
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
        $client = new Client([
            'base_uri' => config('app.api_url')
        ]);
        $res = $client->request('PUT', 'info', [
            'query' => ['id_info' => $id],
            'json'  => [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ]
        ]);
        return redirect()->route('info.index')
        ->with('message', 'Informasi berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = new Client([
            'base_uri' => config('app.api_url')
        ]);
        $res = $client->request('delete', 'info', [
            'query' => ['id_info' => $id]
        ]);
        return redirect()->route('info.index')
        ->with('message', 'Informasi berhasil dihapus!');
    }
}
