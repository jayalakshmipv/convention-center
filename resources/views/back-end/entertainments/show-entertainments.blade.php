@extends('back-end.layouts.layout')

@section('title', 'Entertainments')

@section('body')

@include('flash')

<div class="col-md-6 col-md-offset-2">
    <div class="box box-primary">
        <div class="box-body">
            <div class="box-header">
                <h2 class="box-title"><strong>Entertainments</strong></h2>
            </div>

                        <table id="example2" class="table table-bordered table-hover">
                <tbody>                   
                    <tr><th>Name</th><td>{{ $entertainments->name }}</td></tr>
                    <tr><th>Place</th><td>{{ $entertainments->place }}</td></tr>
                    <tr><th>Phone Number</th><td>{{ $entertainments->phone_no }}</td></tr>
                    <tr><th>Entertainment Type</th><td>{{ $entertainments->type }}</td></tr>
                    <tr><th>Price</th><td>{{ $entertainments->rate}}</td></tr>
                    <tr><th colspan="2">
                        Photo
                       <div id="photo" class="col-md-12" style="height: 200px;"><img src="{{ asset('images/'. $entertainments->featured_image) }}" alt="photo" /></div>
                    </th></tr>                   
                    <tr>                      
                        <td><a href="{{route('entertainments.edit',$entertainments->id) }}"class='btn btn-primary btn-block'>Edit Caterers</a>
                        </td>  
                        {!! Form::open(['method' => 'Delete','route'=>['entertainments.destroy',$entertainments->id]]) !!}
                        {!! csrf_field() !!}
                <input type="hidden" name="_method" value="delete">
                <input type="hidden" name="id" value="{{$entertainments->id}}">
                <td><button type="submit" class="btn btn-danger btn-block">Delete Entertainment</button>
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
