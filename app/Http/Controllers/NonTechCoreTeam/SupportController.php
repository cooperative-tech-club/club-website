<?php

namespace App\Http\Controllers\Lead;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupportController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function support()
  {
    return view('backend.nontechcore.support');
  }
}
