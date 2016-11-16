@extends('back-end.layouts.layout')

@section('title', 'Add Category')

@section('body')

@include('flash')


{!! Form::open(['route' => 'category.store','method'=>'post','enctype' => 'multipart/form-data']) !!}
<div class="box box-primary">
    <div class="box-body">

        <!-- first_name Field -->
        <div class="form-group">
            {!! Form::label('category', 'category Name') !!}
            {!! Form::text('category', null, ['class' => 'form-control', 'placeholder'=>'Enter Category Name']) !!}
            <br>
        <div class="form-group">
            {!! Form::submit( 'Submit', ['class'=>'btn btn-primary']) !!} 
        </div>

        {!! Form::close() !!}
       
    </div>
    </div>

</div>

@endsection