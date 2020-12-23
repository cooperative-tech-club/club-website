<?php

namespace App\Http\Controllers\Lead;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoreTeamController extends Controller
{
     /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function coreteam()
  {
    return view('backend.member.coreteam');
  }

}
