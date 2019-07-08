<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Redis;
use DB;
use App\Target;

class TestController extends Controller
{
  public function redisTest ()
  {
    $before = Redis::get('redisTestTarget');
    Redis::set('redisTestTarget',1);
    $result = Redis::get('redisTestTarget');
    Redis::set('redisTestTarget',0);
    if ($before == 0)
    {
      echo 'Read : succeed <br />';
    }
    else
    {
      echo 'Read : failed <br />';
    }
    if ($result == 1)
   {
      return 'Write : succeed';
    }
    else
    {
      return 'Write : failed';
    }
  }

  public function mysqlTest ()
  {
    $Target = Target::find(0);
    $before = $Target->target;
    $Target->target = '1';
    $Target->save();
    $after = Target::find(0)->target;
    $Target->target = '0';
    $Target->save();
    if ($before == 0)
    {
      echo 'Read : succeed <br />';
    }
    else
    {
      echo 'Read : failed <br />';
     }
    if ($after == 1)
    {
      return 'Write : succeed';
    }
    else
    {
      return 'Write : failed';
    }
  }
}
