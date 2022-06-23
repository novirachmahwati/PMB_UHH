<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class AuthController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function proses_login(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'passw' => 'required',
            ]);
        $client = new Client([
            'base_uri' => config('app.api_url')
        ]);
        $res = $client->request('POST', 'login', [
            'json'  => [
                'username' => $request->username,
                'passw' => $request->passw,
            ]
        ]);
        $res = json_decode($res->getBody()->getContents(), true);
        $status = $res['status_code'];
        if ($status == 200) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')
            ->with('message', 'Incorrect username or password!');
        }
        
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('login');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
 