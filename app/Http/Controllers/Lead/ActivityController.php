<?php

namespace App\Http\Controllers\Lead;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{
      /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function activity()
  {
    return view('backend.lead.activity');
  }

}


