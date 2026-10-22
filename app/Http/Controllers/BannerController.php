<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Past_event;
use App\Models\Upcoming_event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Banner::with('pastEvents')->orderBy('id', 'desc')->paginate(5);
        return view('admin.banner.banner', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $records = Past_event::all();
        $datas = Upcoming_event::all();
        return view('admin.banner.banner_create', compact('records', 'datas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'event_name' => 'required',
            'description' => 'required',
            'event_image' => 'required|image',
            'event_id' => 'required_without:upcoming_id',
            'upcoming_id' => 'required_without:event_id',
            'type' => 'required',
        ], [
            'event_id.required_without' => 'Past Event Name is required if Upcoming Event is not selected.',
            'upcoming_id.required_without' => 'Upcoming Event is required if Past Event is not selected.',
        ]);
        $images = null;
        if ($request->hasFile('event_image')) {
            $images = $request->file('event_image')->store('banner_image', 'public');
        }
        $banner = new Banner();
        $banner->event_name = $request->input('event_name');
        $banner->description = $request->input('description');
        $banner->event_image = $images;
        $banner->type = $request->type;
        if ($request->type == "past_event") {
            $banner->event_id = $request->input('event_id');
        } elseif ($request->type == "upcoming_event") {
            $banner->upcoming_id = $request->input('upcoming_id');
        }

        $banner->save();
        return redirect()->route('banner')->with('success', 'Banner created successfully');
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
        $banner = Banner::find($id);
        $records = Past_event::all();
        return view('admin.banner.banner_edit', compact('banner', 'records'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'event_name' => 'required',
            'description' => 'required',
            'event_image' => 'nullable|image',
            'event_id' => 'required'
        ], [
            'event_id.required' => 'Past Event Name is required',
        ]);

        $banner = Banner::find($id);
        $images = $banner->event_image;
        if ($request->hasFile('event_image')) {
            if ($images && Storage::disk('public')->exists($images)) {
                Storage::disk('public')->delete($images);
            }
            $images = $request->file('event_image')->store('banner_image', 'public');
        }
        $banner->event_name = $request->input('event_name');
        $banner->description = $request->input('description');
        $banner->event_image = $images;
        $banner->event_id = $request->input('event_id');
        $banner->save();
        return redirect()->route('banner')->with('success', 'Banner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $banner = Banner::find($id);
        if ($banner->event_image && Storage::disk('public')->exists($banner->event_image)) {
            Storage::disk('public')->delete($banner->event_image);
        }
        $banner->delete();
        return redirect()->route('banner')->with('success', 'Banner deleted successfully');
    }
}
