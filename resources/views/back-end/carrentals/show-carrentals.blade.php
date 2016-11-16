@extends('back-end.layouts.layout')

@section('title', 'Car Rentals')

@section('body')

@include('flash')

<div class="col-md-6 col-md-offset-2">
    <div class="box box-primary">
        <div class="box-body">
            <div class="box-header">
                <h2 class="box-title"><strong>Car Rentals</strong></h2>
            </div>

                        <table id="example2" class="table table-bordered table-hover">
                <tbody>                   
                    <tr><th>Name</th><td>{{ $carrental->name }}</td></tr>
                    <tr><th>Place</th><td>{{ $carrental->place }}</td></tr>
                    <tr><th>Phone Number</th><td>{{ $carrental->phone_no }}</td></tr>
                    <tr><th>Vehicle</th><td>{{ $carrental->vehicle }}</td></tr>
                    <tr><th>Rate/Kms</th><td>{{ $carrental->rate}}</td></tr>
                    <tr><th colspan="2">
                        Photo
                       <div id="photo" class="col-md-12" style="height: 200px;"><img src="{{ asset('images/'. $carrental->featured_image) }}" alt="photo" style="width: 300px;"/></div>
                    </th></tr>                   
                    <tr>                      
                        <td><a href="{{route('carrentals.edit',$carrental->id) }}"class='btn btn-primary btn-block'>Edit Car Rentals</a>
                        </td>  
                        {!! Form::open(['method' => 'Delete','route'=>['carrentals.destroy',$carrental->id]]) !!}
                        {!! csrf_field() !!}
                <input type="hidden" name="_method" value="delete">
                <input type="hidden" name="id" value="{{$carrental->id}}">
                <td><button type="submit" class="btn btn-danger btn-block">Delete Car Rental</button>
                    {!! Form::close() !!}
                </td>
                </tr>
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
@section('confirmDelete')
<script>
    $(".delete").on("submit", function(){
        return confirm("Do you want to delete this item?");
    });
</script>
@endsection
