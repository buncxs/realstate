<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
  /**
   * Display the login view.
   */
  public function create(): View
  {
    return view('auth.login');
  }

  /**
   * Display the Signin view.
   */
  public function signin(): View
  {
    return view('frontend.signin');
  }

  /**
   * Handle an incoming authentication request.
   */
  public function store(LoginRequest $request): RedirectResponse
  {
    $request->authenticate();

    $request->session()->regenerate();

    $username = $request->user()->username;

    $notification = array(
      'message' =>  'User ' . $username . ' Login succesfully',
      'alert-type'  =>  'info'
    );

    return redirect()->intended($this->role($request))->with($notification);
  }

  /**
   * Destroy an authenticated session.
   */
  public function destroy(Request $request): RedirectResponse
  {
    Auth::guard('web')->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    $notification = array(
      'message' =>  'User Logout succesfully',
      'alert-type'  =>  'info'
    );

    return redirect('/')->with($notification);
  }

  protected function role(LoginRequest $request): string
  {
    if ($request->user()->role === 'admin') {
      return '/admin';
    } elseif ($request->user()->role === 'agent') {
      return '/agent';
    } else {
      return '/user/dashboard';
    }
  }
}
