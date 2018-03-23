@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <form>
                                    <fieldset>
                                        <legend>Legend</legend>
                                        <div class="form-group">
                                            <label for="title" class="col-sm-2 col-form-label">Title:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="title" value="email@example.com" name="title">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="start_date" class="col-sm-2 col-form-label">Start Date:</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="start_date" value="" name="start_date">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="finish_date" class="col-sm-2 col-form-label">Finish Date:</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="finish_date" value="" name="finish_date">
                                            </div>
                                        </div>

                                        </fieldset>
                                        <button type="submit" class="btn btn-primary">Add Event</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
