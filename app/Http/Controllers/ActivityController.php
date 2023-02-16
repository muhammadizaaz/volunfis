<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::latest()->paginate(5);
        return view('activities.index', compact('activities'));
    }

    public function create()
    {
        return view('activities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'veneu' => 'required',
            'company' => 'required',
            'photo' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
        ]);

        Activity::create($request->all());

        return redirect()->route('lecturer.my-activity')
            ->with('success', 'Activity created successfully.');
    }

    public function update(Request $request, Activity $activity)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'veneu' => 'required',
            'company' => 'required',
            'photo' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
        ]);

        $activity->update($request->all());

        return redirect()->route('lecturer.my-activity')
            ->with('success', 'Activity updated successfully');
    }

    public function destroy(Activity $activity)
    {
        $activity->delete();

        return redirect()->route('lecturer.my-activity')
            ->with('success', 'Activity deleted successfully');
    }

}
