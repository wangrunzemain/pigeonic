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
}
