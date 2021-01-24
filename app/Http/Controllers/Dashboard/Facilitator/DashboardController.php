<?php

namespace App\Http\Controllers\Dashboard\Facilitator;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
  /**
   * Show the facilitator application dashboard.
   *
   * @return \Illuminate\View\View
   */
  public function dashboard()
  {
    return view('dashboard.facilitator.dashboard');
  }
}
