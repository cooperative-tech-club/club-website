<?php

namespace App\Http\Controllers\Dashboard\Member;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
  /**
   * Show the member application dashboard.
   *
   * @return \Illuminate\View\View
   */
  public function dashboard()
  {
    return view('dashboard.member.dashboard');
  }
}
