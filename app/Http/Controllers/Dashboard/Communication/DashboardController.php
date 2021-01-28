<?php

namespace App\Http\Controllers\Dashboard\Communication;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
  /**
   * Show the communication application dashboard.
   *
   * @return \Illuminate\View\View
   */
  public function dashboard()
  {
    return view('dashboard.communication.dashboard');
  }
}
