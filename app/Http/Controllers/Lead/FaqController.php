<?php

namespace App\Http\Controllers\Lead;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
      /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function faq()
  {
    return view('backend.lead.faq');
  }

}


