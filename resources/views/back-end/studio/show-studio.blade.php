@extends('back-end.layouts.layout')

@section('title', 'Studio')

@section('body')

@include('flash')

<div class="col-md-6 col-md-offset-2">
    <div class="box box-primary">
        <div class="box-body">
            <div class="box-header">
                <h2 class="box-title"><strong>Studio</strong></h2>
            </div>

                        <table id="example2" class="table table-bordered table-hover">
                <tbody>                   
                    <tr><th>Name</th><td>{{ $studio->name }}</td></tr>
                    <tr><th>Place</th><td>{{ $studio->place }}</td></tr>
                    <tr><th>Phone Number</th><td>{{ $studio->phone_no }}</td></tr>
                    <tr><th>type</th><td>{{ $studio->type }}</td></tr>
                    <tr><th>Price</th><td>{{ $studio->rate}}</td></tr>
                    <tr><th colspan="2">
                        Photo
                       <div id="photo" class="col-md-12" style="height: 200px;"><img src="{{ asset('images/'. $studio->featured_image) }}" alt="photo" style="width: 300px;"/></div>
                    </th></tr>                   
                    <tr>                      
                        <td><a href="{{route('studio.edit',$studio->id) }}"class='btn btn-primary btn-block'>Edit Studio</a>
                        </td>  
                        {!! Form::open(['method' => 'Delete','route'=>['studio.destroy',$studio->id]]) !!}
                        {!! csrf_field() !!}
                <input type="hidden" name="_method" value="delete">
                <input type="hidden" name="id" value="{{$studio->id}}">
                <td><button type="submit" class="btn btn-danger btn-block">Delete Studio</button>
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
