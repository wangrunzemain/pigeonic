<?php

namespace App\Http\Controllers;

use App\Http\Conttollers\Controller;
use Redis;

class TestController extends Controller
{
  public function redisTest ()
  {
    Redis::set('redisTest',1);
    $result = Redis::get('redisTest');
    if ($result == 1)
    {
      Redis::set('redisTest',0);
      return 'Read : succeed <br />Write : succeed';
    }
    else
    {
      return 'Read : failed <br />Write : failed';
    }
  }
}