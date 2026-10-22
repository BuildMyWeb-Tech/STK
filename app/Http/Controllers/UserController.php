<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Contact;
use App\Models\Feedback;
use App\Models\Past_event;
use App\Models\Registration;
use App\Models\Testmonial;
use App\Models\Upcoming_event;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $records = Upcoming_event::all();
        $past_event  = Past_event::all();
        $banners = Banner::with('pastEvents')->get();
        $testmonials = Testmonial::all();
        $feedback = Feedback::all();
        return view('user.index', compact('records', 'past_event', 'banners', 'testmonials'));
    }

    public function upcoming_events()
    {
        $records = Upcoming_event::all();
        return view('user.upcoming_event', compact('records'));
    }

    public function past_events()
    {
        $past_event = Past_event::all();
        return view('user.past_event', compact('past_event'));
    }

    public function about()
    {
        $testmonials = Testmonial::all();
        return view('user.about', compact('testmonials'));
    }

    public function commitee()
    {
        return view('user.commitee');
    }
    public function memberships()
    {
        return view('user.memberships');
    }

    public function gallery(Past_event $records)
    {
        return view('user.gallery', compact('records'));
    }

    public function sponsorships()
    {
        return view('user.sponsorships');
    }

    public function contacts()
    {
        return view('user.contacts');
    }

    public function registration(String $id)
    {
        $record = Upcoming_event::find($id);
        return view('user.event_register', compact('record'));
    }

    public function addRegistration(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'payment' => 'nullable|numeric',
            'adults' => 'nullable|integer',
            'full_time_students' => 'nullable|integer',
            'young_adults' => 'nullable|integer',
            'kids' => 'nullable|integer',
            'young_kids' => 'nullable|integer',
            'food_choice' => 'required',
            'volunteers' => 'required|boolean',
            'photo_video_stk' => 'nullable|boolean',
            'photo_video_private' => 'nullable|boolean',
            'social_media_sharing' => 'required|boolean',
            'description' => 'required',
            'total' => 'required',
            'upcoming_events_id' => 'required|exists:upcoming_events,id', // Foreign Key Reference
        ]);

        // Create a new event participant
        $participant = Registration::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'phone' => $validatedData['phone'],
            'payment' => $validatedData['payment'] ?? 0,
            'adults' => $validatedData['adults'] ?? 0,
            'full_time_students' => $validatedData['full_time_students'] ?? 0,
            'young_adults' => $validatedData['young_adults'] ?? 0,
            'kids' => $validatedData['kids'] ?? 0,
            'young_kids' => $validatedData['young_kids'] ?? 0,
            'food_choice' => $validatedData['food_choice'],
            'volunteers' => $validatedData['volunteers'] ?? false,
            'photo_video_stk' => $validatedData['photo_video_stk'] ?? false,
            'photo_video_private' => $validatedData['photo_video_private'] ?? false,
            'social_media_sharing' => $validatedData['social_media_sharing'] ?? false,
            'description' => $validatedData['description'],
            'total' => $validatedData['total'] ?? 0.00,
            'upcoming_events_id' => $validatedData['upcoming_events_id'], // The foreign key
        ]);
        return redirect()->route('registration_success');
    }

  public function feedback($id)
{
    $records = Past_event::findOrFail($id);
    

    return view('user.feedback', compact('records'));
}


   public function addFeedback(Request $request)
{
    $request->validate([
        'past_event_id' => 'required|exists:past_events,id',
        'question1' => 'required|string',
        'question2' => 'required|string',
        'question3' => 'required|string',
        'question4' => 'required|string',
        'question5' => 'required|string',
        'question6' => 'nullable|string',
        'question7' => 'nullable|string',
        'question8' => 'nullable|string',
        'question9' => 'nullable|string',
        'question10' => 'nullable|string',
        'question11' => 'required|string',
        'question12' => 'required|string',
    ]);

    Feedback::create([
        'past_event_id' => $request->past_event_id,
        'question1' => $request->question1,
        'question2' => $request->question2,
        'question3' => $request->question3,
        'question4' => $request->question4,
        'question5' => $request->question5,
        'question6' => $request->question6,
        'question7' => $request->question7,
        'question8' => $request->question8,
        'question9' => $request->question9,
        'question10' => $request->question10,
        'question11' => $request->question11,
        'question12' => $request->question12,
    ]);

    return redirect()->route('feedback_success')->with('success', 'Thank you for your feedback!');
}

    public function feedback_success()
    {
        return view('user.feedback_success');
    }

    public function addContact(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'type' => 'required',
            'message' => 'required'
        ]);

        $record = Contact::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'type' => $request->type,
            'message' => $request->message
        ]);

        return redirect()->back()->with('success', 'Successfully Created Contact us');
    }

    public function registration_success()
    {
        return view('user.registration_success');
    }

    public function testmonials()
    {
        return view('user.testmonials');
    }

    public function addTestmonial(Request $request)
    {
        $request->validate([
            'feed_back' => 'required',
        ]);

        $data = Testmonial::create([
            'feed_back' => $request->feed_back,
        ]);
        return redirect()->back()->with('success', 'Testmonial Added Successfully');
    }
}
