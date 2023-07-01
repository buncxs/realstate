<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
  public function edit(Request $request)
  {
    $user = $request->user();
    return view('profile.edit', compact('user'));
  }

  public function update(Request $request, User $user)
  {
    $rules = $request->validate([
      'name' => ['required', 'string', 'max:255'],
      'username' => ['required', 'string', 'min:5', 'max:255'],
      'email' => ['required', 'email', 'unique:users,id,' . $user->id],
      'phone' =>  ['numeric', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10'],
      'address' => ['required'],
    ]);

    if ($request->file('photo')) {
      $rules['photo'] = 'mimes:png,jpg,jpeg|max:2048';
      $file = $request->file('photo');
      $filename = date('Ymdh') . $file->getClientOriginalName();
    }
  }
}
