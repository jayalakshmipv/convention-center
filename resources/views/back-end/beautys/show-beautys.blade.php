@extends('back-end.layouts.layout')

@section('title', 'Beauty And Grooming')

@section('body')

@include('flash')

<div class="col-md-6 col-md-offset-2">
    <div class="box box-primary">
        <div class="box-body">
            <div class="box-header">
                <h2 class="box-title"><strong>Beauty And Grooming</strong></h2>
            </div>

                        <table id="example2" class="table table-bordered table-hover">
                <tbody>                   
                    <tr><th>Name</th><td>{{ $beautys->name }}</td></tr>
                    <tr><th>Place</th><td>{{ $beautys->place }}</td></tr>
                    <tr><th>Phone Number</th><td>{{ $beautys->phone_no }}</td></tr>
                    <tr><th>Type</th><td>{{ $beautys->type }}</td></tr>
                    <tr><th>Price</th><td>{{ $beautys->rate}}</td></tr>
                    <tr><th colspan="2">
                        Photo
                       <div id="photo" class="col-md-12" style="height: 200px;"><img src="{{ asset('images/'. $beautys->featured_image) }}" alt="photo" style="width: 300px;" /></div>
                    </th></tr>                   
                    <tr>                      
                        <td><a href="{{route('beauty.edit',$beautys->id) }}"class='btn btn-primary btn-block'>Edit</a>
                        </td>  
                        {!! Form::open(['method' => 'Delete','route'=>['beauty.destroy',$beautys->id]]) !!}
                        {!! csrf_field() !!}
                <input type="hidden" name="_method" value="delete">
                <input type="hidden" name="id" value="{{$beautys->id}}">
                <td><button type="submit" class="btn btn-danger btn-block">Delete</button>
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
