<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    return view('frontend.index');
  }

  public function dashboard()
  {
    return view('frontend.dashboard', [
      'user' => auth()->user(),
    ]);
  }

  public function edit(Request $request)
  {

    return view('frontend.profile', [
      'user' => $request->user(),
    ]);

  }

  public function password(Request $request)
  {
    return view('frontend.password', [
      'user' => $request->user(),
    ]);
  }

}
