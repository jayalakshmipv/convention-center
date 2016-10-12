@extends('back-end.layouts.layout')

@section('title', 'Add Events')

@section('content')<!--

@if (session()->has('flash_message'))
<p>{{ session()->get('flash_message') }}</p>
@endif-->

@section('body')
{!! Form::open(['method'=>'post','enctype' => 'multipart/form-data']) !!}
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
            {!! Form::label('syllabus', 'Syllabus') !!}
            {!! Form::text('syllabus', null, ['class' => 'form-control', 'placeholder'=>'Enter Syllabus']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('time_shift', 'Time_shift') !!}
            {!! Form::select('time_shift',array('Morning' => 'Morning', 'AfterNoon' => 'AfterNoon','Evening' =>'Evening'),null, ['class' => 'form-control', 'placeholder'=>'00.00-00.00','id' => 'calendar1'])!!}

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