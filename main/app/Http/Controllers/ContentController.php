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
      case 0:return view('fenbu');break;
      case 1:return view('youxi');break;
      case 2:return view('donghua');break;
      case 3:return view('xiaoshuo');break;
      case 4:return view('yinyue');break;
      case 5:return view('zhoubian');break;
      case 6:return view('tongren');break;
      case 7:return view('zatan');break;
    }
  }
  
  
}
