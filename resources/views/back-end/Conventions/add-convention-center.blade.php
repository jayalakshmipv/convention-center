@extends('back-end.layouts.layout')

@section('title', 'Add Convention Center')

@section('content')



@section('body')


{!! Form::open(['route' => 'conventions.store','method'=>'post','enctype' => 'multipart/form-data']) !!}
<div class="box box-primary">
    <div class="box-body">

        <!-- first_name Field -->
        <div class="form-group">
            {!! Form::label('name', 'Convention Center Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Enter Convention Center Name']) !!}

        </div>
         <div class="form-group">
            {!! Form::label('address', 'Address') !!}
            {!!Form::text('address', null,['class' => 'form-control', 'placeholder'=>'Enter Address'])!!}

        </div>
        <div class="form-group">
            {!! Form::label('location', 'Location') !!}
            {!!Form::text('location', null,['class' => 'form-control', 'placeholder'=>'Enter Location'])!!}

        </div>
         <div class="form-group">
            {!! Form::label('name_owner', 'Owner Name') !!}
            {!! Form::text('name_owner', null, ['class' => 'form-control', 'placeholder'=>'Enter Owner Name']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('phone_no', 'Phone number') !!}
            {!! Form::text('phone_no', null, ['class' => 'form-control', 'placeholder'=>'Enter Phone Number']) !!}
        </div>
		<div class="form-group">
            {!! Form::label('mobile_no', 'Mobile number') !!}
            {!! Form::text('mobile_no', null, ['class' => 'form-control', 'placeholder'=>'Enter Mobile Number']) !!}
        </div>
		<div class="form-group">
            {!! Form::label('mail_id', 'Email id') !!}
            {!! Form::text('mail_id', null, ['class' => 'form-control', 'placeholder'=>'Enter Email id']) !!}
        </div>
		<div class="form-group">
            {!! Form::label(' website_address', 'Website Address') !!}
            {!! Form::text('website_address', null, ['class' => 'form-control', 'placeholder'=>'Enter Website Address Here']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('maplocation', 'Map Location') !!}
            {!! Form::text('maplocation', null, ['class' => 'form-control', 'placeholder'=>'Enter Maplocation']) !!}
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





@stop

@endsection