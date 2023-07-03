<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    /* Validate if a picture is Set */
    if ($request->file('photo')) {
      $rules['photo'] = 'mimes:png,jpg,jpeg|max:2048';
      $path = $request->file('photo')->store('users');
    }

    // Assign values to User model and save
    $user->name = $request->name;
    $user->username = $request->username;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->address = $request->address;

    //$image = new Image(['url' => $path]);

    DB::transaction(function () use ($user, $path) {
      $user->save();
      $user->image()->updateOrCreate([
        'imageable_id'  =>  $user->id
      ], [
        'url' =>  $path
      ]);
    });





    

    

    
  }
}
