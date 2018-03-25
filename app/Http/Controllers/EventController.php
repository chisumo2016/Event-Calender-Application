<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Calender;
use Session;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.event.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
//        dd($request->all());
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'start_date' => 'required',
            'finish_date' => 'required',
        ]);

//        if ($validatedData->fails()){
//
//            Session::flash('warning', 'Please Enter the valid details');
//            return Redirect::to('admin.event.create')->withInput()->withErrors($validatedData);
//        }

        $event = new Event;
        $event->title = $request->title;
        $event->start_date = $request->start_date;
        $event->finish_date = $request->finish_date;

        $event->save();

        Session::flash('success', 'Event added successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
