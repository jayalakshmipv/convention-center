@extends('back-end.layouts.layout')

@section('title', 'Update Convention Center')

@section('content')
    
    {!! Form::model($,['method' => 'PATCH','route'=>['books.update',$book->id]]) !!}
   <div class="form-group">
            {!! Form::label('conventioncenter', 'Convention Center Name') !!}
            {!! Form::text('conventioncenter', null, ['class' => 'form-control', 'placeholder'=>'Enter Convention Center Name']) !!}

        </div>
         <div class="form-group">
            {!! Form::label('address', 'Address') !!}
            {!!Form::text('Address', null,['class' => 'form-control', 'placeholder'=>'Enter Address'])!!}

        </div>
        <div class="form-group">
            {!! Form::label('location', 'Location') !!}
            {!!Form::text('Location', null,['class' => 'form-control', 'placeholder'=>'Enter Location'])!!}

        </div>
         <div class="form-group">
            {!! Form::label('name-owner', 'Owner Name') !!}
            {!! Form::text('name-owner', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('phone number', 'Phone number') !!}
            {!! Form::text('phone number', null, ['class' => 'form-control']) !!}
        </div>
		<div class="form-group">
            {!! Form::label('mobile number', 'Mobile number') !!}
            {!! Form::text('mobile number', null, ['class' => 'form-control']) !!}
        </div>
		<div class="form-group">
            {!! Form::label('Email id', 'Email id') !!}
            {!! Form::text('Email id', null, ['class' => 'form-control']) !!}
        </div>
		<div class="form-group">
            {!! Form::label(' website address', 'Website Address') !!}
            {!! Form::text('Website Address', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('maplocation', 'Map Location') !!}
            {!! Form::text('maplocation', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('featured image', 'Featured image') !!}
            {!! Form::file('featured image', null, ['class' => 'form-control']) !!}
        </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop