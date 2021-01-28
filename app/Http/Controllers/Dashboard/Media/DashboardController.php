<?php

namespace App\Http\Controllers\Dashboard\Media;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
  /**
   * Show the media application dashboard.
   *
   * @return \Illuminate\View\View
   */
  public function dashboard()
  {
    return view('dashboard.media.dashboard');
  }
}
