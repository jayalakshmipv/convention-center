@extends('back-end.layouts.layout')

@section('title', 'Update Car Rentals')

@section('body')

@include('flash')

 <div class="box box-primary">
    <div class="box-body"> 
    {!! Form::model($carrental,['method' => 'PATCH','route'=>['carrentals.update',$carrental->id]]) !!}

        <!-- first_name Field -->
        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Enter Name']) !!}

        </div>
          <div class="form-group">
            {!! Form::label('place', 'Place') !!}
            {!! Form::text('place', null, ['class' => 'form-control', 'placeholder'=>'Enter Place']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('phone_no', 'Phone Number') !!}
            {!! Form::text('phone_no', null, ['class' => 'form-control', 'placeholder'=>'Enter Phone Number']) !!}

        </div>
         <div class="form-group">
            {!! Form::label('vehicle', 'Vehicle') !!}
            {!! Form::text('vehicle', null, ['class' => 'form-control', 'placeholder'=>'Enter Vehicle Details']) !!}
        </div>
        
         <div class="form-group">
            {!! Form::label('rate', 'Rate/Kms') !!}
            {!! Form::text('rate', null, ['class' => 'form-control', 'placeholder'=>'Enter Rate/Kms']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('featured_image', 'Featured image') !!}
            {!! Form::file('featured_image', null, ['class' => 'form-control', 'placeholder'=>'Put Image']) !!}
        </div>
        <br>
        <div class="form-group">
            {!! Form::submit( 'Submit', ['class'=>'btn btn-primary']) !!} 
        </div>

        {!! Form::close() !!}
       
    </div>

</div>
@endsection