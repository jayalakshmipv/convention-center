@extends('back-end.layouts.layout')

@section('title', 'Add Convention Center')

@section('content')



@section('body')
{!! Form::open(['route' => 'events.store','method'=>'post','enctype' => 'multipart/form-data']) !!}
<div class="box box-primary">
    <div class="box-body">

        <!-- first_name Field -->
        <div class="form-group">
            {!! Form::label('Conventioncenter', 'Convention Center Name') !!}
            {!! Form::text('Conventioncenter', null, ['class' => 'form-control', 'placeholder'=>'Enter Convention Center Name']) !!}

        </div>
         <div class="form-group">
            {!! Form::label('Address', 'Address') !!}
            {!!Form::text('Address',null,['class' => 'form-control', 'placeholder'=>'Enter Address'])!!}

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