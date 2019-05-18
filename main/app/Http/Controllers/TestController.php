<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Redis;
use DB;

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
    $before = DB::select('select * from TestForm where target = ?',[0]);
    var_dump($before);
  }
}