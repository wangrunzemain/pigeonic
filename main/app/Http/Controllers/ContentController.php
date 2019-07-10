<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Content;
use Auth;

class ContentController extends Controller
{
  function release_create()
  {
    $username = Auth::user()->name;
    return view('create',['username' => "$username"]);
  }
}
