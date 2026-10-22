<?php

namespace App\Http\Controllers;

use App\Models\Upcoming_event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminUpcomingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Upcoming_event::orderBy('id', 'desc')->paginate(5);
        return view('admin.upcoming_events.upcoming_events', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
        return view('admin.upcoming_events.upcoming_events_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'event_name' => 'required|string|max:255',
            'venue' => 'required|string|max:255',
            'event_date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'adults_price' => 'required|numeric',
            'students_price' => 'required|numeric',
            'young_adults_price' => 'required|numeric',
            'kids_price' => 'required|numeric',
            'food_choice' => 'required|array',
            'food_choice.*' => 'in:Veg,Non-Veg', // Validate the food choice
            'event_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'event_description' => 'required|string|max:1000'
        ]);



        // Handle the image upload
        $imagePath = $request->file('event_image')->store('event_images', 'public');

        // Store the event data
        Upcoming_event::create([
            'event_name' => $request->event_name,
            'venue' => $request->venue,
            'event_date' => $request->event_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'adults_price' => $request->adults_price,
            'students_price' => $request->students_price,
            'young_adults_price' => $request->young_adults_price,
            'kids_price' => $request->kids_price,
            'food_choice' => $request->food_choice,
            'event_image' => $imagePath,
            'event_description' => $request->event_description
        ]);

        // Redirect with success message
        return redirect()->route('upcoming-home')->with('success', 'Upcoming Event created successfully!');
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
    public function edit(string $id)
    {
        $records = Upcoming_event::find($id);
        return view('admin.upcoming_events.upcoming_events_edit', compact('records'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $records = Upcoming_event::find($id);

        $imagePath = $records->event_image;
        if ($request->hasFile('event_image')) {
            // Delete the old image

            if ($imagePath && Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath);
            }
            // Store the new image
            $imagePath = $request->file('event_image')->store('event_images', 'public');
        }

        $records->update([
            'event_name' => $request->event_name,
            'venue' => $request->venue,
            'event_date' => $request->event_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'adults_price' => $request->adults_price,
            'students_price' => $request->students_price,
            'young_adults_price' => $request->young_adults_price,
            'kids_price' => $request->kids_price,
            'food_choice' => $request->food_choice,
            'event_image' => $imagePath,
            'event_description' => $request->event_description
        ]);
        return redirect()->route('upcoming-home')->with('success', 'Upcoming Event updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $records = Upcoming_event::find($id);
        $imagePath = $records->event_image;
        if ($imagePath && Storage::disk('public')->exists($imagePath)) {
            Storage::disk('public')->delete($imagePath);
        }
        $records->delete();
        return redirect()->route('upcoming-home')->with('success', 'Upcoming Event deleted');
    }
}
