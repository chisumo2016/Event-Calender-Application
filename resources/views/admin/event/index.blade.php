@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header bg-primary">Display All Events</div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-offset-2">
                                <table class="table table-hover">

                                    {{--{!! $calendar_events->calendar() !!}--}}
                                    {{--{!! $calendar_events->script() !!}--}}

                                    <thead>
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Start Date</th>
                                        <th scope="col">Finish Date</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                   @foreach($event_data as $calendar_event)
                                       <tr class="table-active">
                                           <td>{{ $calendar_event->title }}</td>
                                           <td>{{ $calendar_event->start_date }}</td>
                                           <td>{{ $calendar_event->finish_date }}</td>
                                           <td><a href="{{ route('events.edit', $calendar_event->id) }}" class="btn btn-primary">Edit</a></td>

                                           <td>
                                               <a href="{{route('events.destroy', $calendar_event->id)}}" onclick="
                                               var result = confirm('Are you sure you wish to delete this Event?');
                                                     if(result){
                                                         event.preventDefault();
                                                         document.getElementById('delete-form').submit();
                                                     }" class="btn btn-danger"> Delete
                                               </a>

                                               <form id="delete-form"  action="{{route('events.destroy', [$calendar_event->id])}}" method="POST"
                                                     style="display: none;">

                                                   <input type="hidden" name="_method" value="delete">
                                                   {{ csrf_field() }}
                                                   {{ method_field('DELETE') }}
                                               </form>
                                           </td>
                                       </tr>

                                   @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
