@extends('back-end.layouts.layout')

@section('title', 'Add Events')

@section('content')<!--

@if (session()->has('flash_message'))
<p>{{ session()->get('flash_message') }}</p>
@endif-->

@section('body')
{!! Form::open(['route' => 'events.store','method'=>'post','enctype' => 'multipart/form-data']) !!}
<div class="box box-primary">
    <div class="box-body">

        <!-- first_name Field -->
        <div class="form-group">
            {!! Form::label('Event', 'Event Name') !!}
            {!! Form::text('Event', null, ['class' => 'form-control', 'placeholder'=>'Enter Event Name']) !!}

        </div>
         <div class="form-group">
            {!! Form::label('year', 'Year') !!}
            {!!Form::selectYear('year', 2010, 2020,null,['class' => 'form-control', 'placeholder'=>'Enter  year'])!!}

        </div>
        <div class="form-group">
            {!! Form::label('year', 'Year') !!}
            {!!Form::selectYear('year', 2010, 2020,null,['class' => 'form-control', 'placeholder'=>'Enter  year'])!!}

        </div>
         <div class="form-group">
            {!! Form::label('event-hoster', 'Event-hoster') !!}
            {!! Form::text('event-hoster', null, ['class' => 'form-control', 'placeholder'=>'Enter event hoster']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('phone number', 'phone-number') !!}
            {!! Form::text('phone number', null, ['class' => 'form-control', 'placeholder'=>'Enter event']) !!}
        </div>
        
       

       
        <br>
        <div class="form-group">
            {!! Form::submit( 'Submit', ['class'=>'btn btn-primary']) !!} 
        </div>

        {!! Form::close() !!}
       
    </div>

</div>
@stop

@endsection