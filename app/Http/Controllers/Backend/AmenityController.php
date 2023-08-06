<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Amenity;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AmenityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $amenities = Amenity::latest()->get();
        return view('backend.amenities.index', compact('amenities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.amenities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:amenities|min:5|max:200',
        ]);

        Amenity::insert([
            'name' => $request->name,
        ]);

        $notification = array(
            'message' =>  'Amenity created succesfully',
            'alert-type'  =>  'success'
        );

        return redirect()->route('amenities.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Amenity $amenity)
    {
        return view('backend.amenities.edit', compact('amenity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Amenity $amenity)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:5', 'max:200', Rule::unique('amenities')->ignore($amenity->id)],
        ]);

        $amenity->update([
            'name' => $request->name,
        ]);

        $notification = array(
            'message' =>  'Amenity updated succesfully',
            'alert-type'  =>  'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Amenity $amenity)
    {
        $amenity->delete();

        $notification = array(
            'message' =>  'Amenity deleted succesfully',
            'alert-type'  =>  'success'
        );

        return redirect()->back()->with($notification);
    }
}
