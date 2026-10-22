<?php

namespace App\Http\Controllers;

use App\Models\Past_event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Past_eventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Past_event::orderBy('id', 'desc')->paginate(2);
        return view('admin.past_events.past_events', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.past_events.past_events_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'event_name' => 'required',
            'description' => 'required',
            'event_date' => 'required|date',
            'event_image' => 'required|image',
            'gallery_images' => 'nullable|array',
            'gallery_images.*' => 'image',
            'question1' => 'nullable',
            'question2' => 'nullable',
            'question3' => 'nullable',
            'question4' => 'nullable',
            'question5' => 'nullable',

        ]);

        $images = null;
        if ($request->hasFile('event_image')) {
            $images = $request->file('event_image')->store('past_image', 'public');
        }
        $gallery = [];
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $image) {
                $gallery[] = $image->store('past_gallery', 'public');
            }
        }
        $event = new Past_event();
        $event->event_name = $request->event_name;
        $event->description = $request->description;
        $event->event_date = $request->event_date;
        $event->event_image = $images;
        $event->gallery_images = json_encode($gallery);
        $event->question1 = $request->question1;
        $event->question2 = $request->question2;
        $event->question3 = $request->question3;
        $event->question4 = $request->question4;
        $event->question5 = $request->question5;
        $event->question6 = $request->input('question6');
        $event->question7 = $request->input('question7');
        $event->question8 = $request->input('question8');
        $event->question9 = $request->input('question9');
        $event->question10 = $request->input('question10');
        $event->feedback_enabled = $request->has('feedback_enabled');
        $event->feedback_close_date = $request->input('feedback_close_date');
        $event->save();
        return redirect()->route('past_event')->with('success', 'Past Event created successfully');
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
    public function edit($id)
{
    $record = Past_event::findOrFail($id);
    return view('admin.past_events.past_events_edit', compact('record'));
}


    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, $id)
{
    $event = Past_event::findOrFail($id);

    $request->validate([
        'event_name' => 'required',
        'description' => 'required',
        'event_date' => 'required|date',
        'event_image' => 'nullable|image',
        'gallery_images' => 'nullable|array',
        'gallery_images.*' => 'image',
    ]);

    // Update event image if new one is uploaded
    if ($request->hasFile('event_image')) {
        if ($event->event_image && Storage::disk('public')->exists($event->event_image)) {
            Storage::disk('public')->delete($event->event_image);
        }
        $event->event_image = $request->file('event_image')->store('past_image', 'public');
    }

    // Update gallery images if new ones are uploaded
    if ($request->hasFile('gallery_images')) {
        // Optional: Delete existing gallery images
        if ($event->gallery_images) {
            $existingImages = json_decode($event->gallery_images);
            foreach ($existingImages as $img) {
                if (Storage::disk('public')->exists($img)) {
                    Storage::disk('public')->delete($img);
                }
            }
        }

        $newGallery = [];
        foreach ($request->file('gallery_images') as $image) {
            $newGallery[] = $image->store('past_gallery', 'public');
        }
        $event->gallery_images = json_encode($newGallery);
    }

    // Update other fields
    $event->event_name = $request->input('event_name');
    $event->description = $request->input('description');
    $event->event_date = $request->input('event_date');
    $event->feedback_enabled = $request->has('feedback_enabled');
    $event->feedback_close_date = $request->input('feedback_close_date');

    for ($i = 1; $i <= 10; $i++) {
        $event->{'question' . $i} = $request->input('question' . $i);
    }

    $event->save();

    return redirect()->route('past_event')->with('success', 'Past Event updated successfully');
}




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $record = Past_event::find($id);

        function delete_img($image)
        {
            if ($image && Storage::disk('public')->exists($image)) {
                Storage::disk('public')->delete($image);
            }
        }
        if (empty($record->event_image)) {
            delete_img($record->event_image);
        }
        if (empty($record->gallery_images)) {
            foreach (json_decode($record->gallery_images) as $image) {
                delete_img($image);
            }
        }

        $record->delete();


        return redirect()->route('past_event')->with('success', 'Past Event deleted successfully');
    }
}
