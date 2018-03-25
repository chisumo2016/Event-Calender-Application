@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header bg-primary">Display All Events</div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-sm-10 col-offset-2">
                                <table class="table table-hover">



                                    {{--<thead>--}}
                                    {{--<tr>--}}
                                        {{--<th scope="col">Title</th>--}}
                                        {{--<th scope="col">Start Date</th>--}}
                                        {{--<th scope="col">Finish Date</th>--}}
                                        {{--<th scope="col">Edit</th>--}}
                                        {{--<th scope="col">Delete</th>--}}
                                    {{--</tr>--}}
                                    {{--</thead>--}}
                                    {{--<tbody>--}}
                                    {{--<tr class="table-active">--}}
                                        {{--<td>Column content</td>--}}
                                        {{--<td>Column content</td>--}}
                                        {{--<td>Column content</td>--}}
                                        {{--<td><a href="#" class="btn btn-primary">Edit</a></td>--}}
                                        {{--<td><a href="#" class="btn btn-danger">Delete</a></td>--}}
                                    {{--</tr>--}}

                                    {{--</tbody>--}}
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
