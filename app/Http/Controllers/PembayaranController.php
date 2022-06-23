<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PembayaranController extends Controller
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
        $res = $client->request('GET', 'registrasi');
        $pembayaran = json_decode($res->getBody()->getContents(), true);
        return view('pembayaran.index', compact('pembayaran'));
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
        $client = new Client([
            'base_uri' => config('app.api_url')
        ]);
        $res = $client->request('GET', 'registrasi', [
            'query' => ['id' => $id]
        ]);
        $pembayaran = json_decode($res->getBody()->getContents(), true);
        return view('pembayaran.show', compact('pembayaran'));
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
        $res = $client->request('GET', 'registrasi', [
            'query' => ['id' => $id]
        ]);
        $pembayaran = json_decode($res->getBody()->getContents(), true);
        return view('pembayaran.edit', compact('pembayaran'));
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
        $res = $client->request('PUT', 'administrasi/verify', [
            'query' => ['id_user' => $id],
            'json'  => ['status_bayar' => $request->status_bayar]
        ]);
        return redirect()->route('pembayaran.index')
        ->with('message', 'Status Pembayaran berhasil diubah!');
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
