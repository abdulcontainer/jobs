<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $job = Job::all();
        return view('job/index',compact('job'));
    }

    public function create()
    {
        return view('job/add');
    }

    public function store(Request $request)
    {
        $job = new Job();
        $job->title = $request->title;
        $job->dis = $request->dis;
        $job->location = $request->location;
        $job->salary = $request->salary;
        $job->contact = $request->contact;
        $job->save();
        return redirect()->route('job.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Job::find($id);
        return view('job.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $job = Job::find($id);
        $job->title = $request->title;
        $job->dis = $request->dis;
        $job->location = $request->location;
        $job->salary = $request->salary;
        $job->contact = $request->contact;
        $job->save();
        return redirect()->route('job.index');
    }

    public function destroy($id)
    {
        $data= Job::find($id);
        $data->delete();
        return redirect('job');
    }
}
