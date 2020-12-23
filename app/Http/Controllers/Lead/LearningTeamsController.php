<?php

namespace App\Http\Controllers\Lead;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LearningTeamsController extends Controller
{
      /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function learningteams()
  {
    return view('backend.lead.learningteams');
  }

}


