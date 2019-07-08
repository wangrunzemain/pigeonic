<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
  function release_create()
  {
    return view('create');
  }
}
