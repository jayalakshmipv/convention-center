@extends('back-end.layouts.layout')

@section('title', 'Giveaways')

@section('body')

@include('flash')

<div class="col-md-6 col-md-offset-2">
    <div class="box box-primary">
        <div class="box-body">
            <div class="box-header">
                <h2 class="box-title"><strong>Giveaways</strong></h2>
            </div>

                        <table id="example2" class="table table-bordered table-hover">
                <tbody>                   
                    <tr><th>Name</th><td>{{ $giveways->name }}</td></tr>
                    <tr><th>Place</th><td>{{ $giveways->place }}</td></tr>
                    <tr><th>Phone Number</th><td>{{ $giveways->phone_no }}</td></tr>
                    <tr><th>Food type</th><td>{{ $giveways->type }}</td></tr>
                    <tr><th>Price</th><td>{{ $giveways->rate}}</td></tr>
                    <tr><th colspan="2">
                        Photo
                       <div id="photo" class="col-md-12" style="height: 200px;"><img src="{{ asset('images/'. $giveways->featured_image) }}" alt="photo" style="width: 300px;"/></div>
                    </th></tr>                   
                    <tr>                      
                        <td><a href="{{route('giveaways.edit',$giveways->id) }}"class='btn btn-primary btn-block'>Edit Giveway</a>
                        </td>  
                        {!! Form::open(['method' => 'Delete','route'=>['giveaways.destroy',$giveways->id]]) !!}
                        {!! csrf_field() !!}
                <input type="hidden" name="_method" value="delete">
                <input type="hidden" name="id" value="{{$giveways->id}}">
                <td><button type="submit" class="btn btn-danger btn-block">Delete Giveway</button>
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
