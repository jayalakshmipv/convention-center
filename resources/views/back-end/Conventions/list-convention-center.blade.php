@extends('back-end.layouts.layout')

@section('title', 'List Convention Center')

@section('body')

@include('flash')

<div class="box box-primary">
<div class="box-body">

<table id="example2" class="table table-striped table-bordered table-hover">
<thead>
<tr>
<th>Sl.No</th>
<th>Name</th>
<th>Address</th>
<th>Location</th>
<th>Owner</th>
<th>Phone Number</th>
<th>More</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php $i=1 ?>
@foreach ($conventions as $convention)
<tr>
<td>{{ $i }}</td>
<td>{{ $convention->name }}</td>
<td>{{ $convention->address }}</td>
<td>{{ $convention->location }}</td>
<td>{{ $convention->name_owner }}</td>
<td>{{ $convention->phone_no }}</td>
<td class=center>
	<a href="{{route('conventions.show',$convention->id)}}" class="btn btn-primary">More</a>
</td>
<td class=center>
<a href="{{route('conventions.edit',$convention->id)}}" class="btn btn-primary">Edit</a>
</td>
 <td class=center>
   {!! Form::open(['method' => 'Delete','route'=>['conventions.destroy',$convention->id]]) !!}
   {!! Form::submit( 'Delete', ['class'=>'btn btn-warning']) !!} 
   {!! Form::close() !!}
    </td>
	</tr>
   <?php $i++ ?>
	@endforeach
	</tbody>
	</table>
	</div>
	</div>
	@endsection
	@section('pagescript')
	<script>    
    $(".delete").on("submit", function(){
        return confirm("Do you want to delete this item?");
    });
    $(function () {
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });
    });
</script>
@endsection
