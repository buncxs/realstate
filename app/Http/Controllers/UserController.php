<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{

  public function editProfile(Request $request)
  {
    $user = $request->user();
    return view('edit-profile', compact('user'));
  }

  public function updateProfile(Request $request, User $user)
  {

    $rules = [
      'name' => ['required', 'string', 'max:255'],
      'username' => ['required', 'string', 'min:5', 'max:255'],
      'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
      'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
      'phone' =>  ['regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10'],
      'address' => ['required'],
    ];

    $request->validate($rules);

    // Assign values to User model and save
    $user->name = $request->name;
    $user->username = $request->username;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->address = $request->address;

    // Check if picture is given and update
    if ($request->file('photo')) {
      $user->updateProfilePhoto($request['photo'], 'users');
    }

    $user->save();

    $notification = array(
      'message' =>  'Profile updated succesfully',
      'alert-type'  =>  'success'
    );

    return redirect()->back()->with($notification);
  }

  public function editPassword(Request $request)
  {
    $user = $request->user();
    return view('edit-password', compact('user'));
  }

  public function updatePassword(Request $request, User $user)
  {
    Validator::make($request, [
      'current_password' => ['required', 'string', 'current_password:web'],
      'password' => ['required', 'string', Password::defaults()],
    ], [
      'current_password.current_password' => __('The provided password does not match your current password.'),
    ])->validateWithBag('updatePassword');

    $user->forceFill([
      'password' => Hash::make($request['password']),
    ])->save();
  }
}
