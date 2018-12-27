@extends('layouts.admin')


@section('styles')
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection

@section('header')
    <h1>
        Up coming Expirations
        <small>Licences,Fittness and Servies expirations</small>
    </h1>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-info">
                    <div class="box-body">
                        <br>
                        {!! $calendar->calendar() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box box-info">
                    <div class="box-body">
                        <a href="/events" class="btn btn-block btn-default btn-sm"> All Events</a>
                        <a href="/fitnessevents" class="btn btn-block btn-primary btn-sm"> Fitness Expiration</a>
                        <a href="/insuranceevents" class="btn btn-block btn-danger btn-sm"> Insurance Expiration</a>
                        <a href="/licensevents" class="btn btn-block btn-warning btn-sm"> Licence Expiration</a>
                        <a href="/serviceevents" class="btn btn-block bg-navy btn-sm"> Service Expiration</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_JavaScrips')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    {!! $calendar->script() !!}
@endsection