<?php

namespace App\Custom;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class BaseUrl 
{
  public static function get(string $path): Response
  {
    return Http::get(config('app.api_url') . $path);
  }
}