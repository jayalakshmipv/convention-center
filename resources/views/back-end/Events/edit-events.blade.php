@extends('back-end.layouts.layout')

@section('title', 'Update Events')

@section('body')

@include('flash')

 <div class="box box-primary">
    <div class="box-body"> 
    {!! Form::model($event,['method' => 'PATCH','route'=>['events.update',$event->id]]) !!}

 <!-- first_name Field -->
        <div class="form-group">
            {!! Form::label('event_name', 'Event Name') !!}
            {!! Form::text('event_name', null, ['class' => 'form-control', 'placeholder'=>'Enter Event Name']) !!}

        </div>
          <div class="form-group">
            {!! Form::label('event_date_from', 'Event Date From') !!}
            {!! Form::text('event_date_from', null, ['class' => 'form-control', 'placeholder'=>'Enter Event Date From']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('event_date_to', 'Event Date To') !!}
            {!! Form::text('event_date_to', null, ['class' => 'form-control', 'placeholder'=>'Enter Event Date To']) !!}

        </div>
         <div class="form-group">
            {!! Form::label('event_hoster', 'Event Hoster') !!}
            {!! Form::text('event_hoster', null, ['class' => 'form-control', 'placeholder'=>'Enter Event Hoster']) !!}
        </div>
         <div class="form-group">
            {!! Form::label('hoster_phno', 'Hoster Phone Number') !!}
            {!! Form::text('hoster_phno', null, ['class' => 'form-control', 'placeholder'=>'Enter Hoster Phone Number']) !!}
        </div>
         <div class="form-group">
            {!! Form::label('hoster_emailid', 'Hoster Email id') !!}
            {!! Form::text('hoster_emailid', null, ['class' => 'form-control', 'placeholder'=>'Enter Hoster Email id']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('event_details', 'Event Details') !!}
            {!! Form::text('event_details', null, ['class' => 'form-control', 'placeholder'=>'Enter Event Details']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('featured_image', 'Featured image') !!}
            {!! Form::file('featured_image', null, ['class' => 'form-control', 'placeholder'=>'Put Image']) !!}
        </div>
        <br>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
    </div>
    </div>
@endsection