<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use Auth;

class ContentController extends Controller
{
  function release_create()
  {
    $username = Auth::user()->name;
    return view('create',['username' => "$username"]);
  }
  function release_store(Request $request)
  {
    $content = new Content;
    $content->author = $request->author;
    $content->title = $request->title;
    $content->weights = $request->weights;
    $content->label = $request->label;
    $content->content = $request->content;
    $content->timestamp = time();
    $content->save();
  }

  function content($where)
  {
    switch($where)
    {
      case 0:return view('fenbu',['title' => '第五音分部']);break;
      case 1:return view('youxi',['title' => '游戏相关']);break;
      case 2:return view('donghua',['title' => '动画图']);break;
      case 3:return view('xiaoshuo',['title' => '小说&同人文']);break;
      case 4:return view('yinyue',['title' => '音乐']);break;
      case 5:return view('zhoubian',['title' => '周边']);break;
      case 6:return view('tongren',['title' => '同人图']);break;
      case 7:return view('zatan',['title' => '杂谈']);break;
    }
  }
  
  
}
