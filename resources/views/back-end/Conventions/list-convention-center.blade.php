@extends('back-end.layouts.layout')

@section('title', 'List Convention Center')

@section('content')


<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="bg-info">
<th>Id</th>
<th>Name</th>
<th>Address</th>
<th>Location</th>
<th>Owner</th>
<th>Phone Number</th>
<th colspan="2">Action</th>
</tr>
</thead>
<tbody>
@foreach ($centers as $center)
<tr>
<td>{{ $center->id }}</td>
<td>{{ $center->name }}</td>
<td>{{ $center->address }}</td>
<td>{{ $center->location }}</td>
<td>{{ $center->name_owner }}</td>
<td>{{ $center->phone_no }}</td>
<td><a href="{{route('',$center->id)}}" class="btn btn-warning">Update</a></td>
<td>
   {!! Form::open(['method' => 'Delete','route'=>['']]) !!}
   {!! Form::submit( 'Delete', ['class'=>'btn btn-primary']) !!} 
   {!! Form::close() !!}
  </td>
	</tr>
	@endforeach
	</tbody>
	</table>
@endsection