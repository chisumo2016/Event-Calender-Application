<?php

namespace App\Http\Controllers;

use App\Event;
use Calendar;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class EventController extends Controller
{

    public function __construct() 
    {
        $this->middleware(['auth', 'clearance'])->except('index', 'show');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event_data = Event::all();

        if ($event_data ->count())
        {
            foreach ($event_data  as $key => $event)
            {
                $events[] = Calendar::event(
                    $event->title,
                    true,
                    new \DateTime($event->start_date),
                    new \DateTime($event->finish_date.' +1 day')
                );
            }
        }

        $calendar_events = Calendar::addEvents($events);

        return view('admin.event.index', compact('calendar_events','event_data'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event_data = Event::all();

        if ($event_data ->count())
        {
            foreach ($event_data  as $key => $event)
            {
                $events[] = Calendar::event(
                    $event->title,
                    true,
                    new \DateTime($event->start_date),
                    new \DateTime($event->finish_date.' +1 day')
                );
            }
        }

        $calendar_events = Calendar::addEvents($events);

        return view('admin.event.create', compact('calendar_events'));
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
        // $validatedData = $request->validate([
        //     'title' => 'required|max:255',
        //     'start_date' => 'required',
        //     'finish_date' => 'required',
        // ]);

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
    public function edit($id)
    {
        $event = Event::find($id);

        return view('admin.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();

        $event = Event::find($id);
        $event->update($requestData);

        return redirect()->route('events.index')->with('success','Event updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //

        $deleteEvent = Event::find($id);

        return redirect()->route('events.index')->with('success','Event deleted Successfully');

    }
}
