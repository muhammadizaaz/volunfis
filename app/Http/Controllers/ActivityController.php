<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    public function index()
    {   

        $activities = Activity::latest()->paginate(5);
        if (Auth::user()->hasRole('lecturer')) {
            return view('lecturer.activities.index', compact('activities'));
        } elseif (Auth::user()->hasRole('student')) {
            return view('student.activities.index', compact('activities'));
        }
    }

    public function create()
    {
        return view('lecturer.activities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'veneu' => 'required',
            'company' => 'required',
            'photo' => 'nullable',
            'category_id' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
        ]);

        Activity::create($request->all());

        return back()->with('success', 'Activity created successfully.');
    }

    public function edit()
    {
        return view('lecturer.activities.edit');
    }

    public function update(Request $request, Activity $activity)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'veneu' => 'required',
            'company' => 'required',
            'photo' => 'required',
            'category_id' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
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
