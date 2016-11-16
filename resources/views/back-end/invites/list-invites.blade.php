@extends('back-end.layouts.layout')

@section('title', 'List Invites')

@section('body')

@include('flash')

<div class="box box-primary">
<div class="box-body">

<table id="example2" class="table table-striped table-bordered table-hover">
<thead>
<tr>
<th>Sl.No</th>
<th>Name</th>
<th>Place</th>
<th>Phone Number</th>
<th>Invite Type</th>
<th>Rate</th>
<th>More</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php $i=1 ?>
@foreach ($invites as $invites)
<tr>
<td>{{ $i }}</td>
<td>{{ $invites->name }}</td>
<td>{{ $invites->place }}</td>
<td>{{ $invites->phone_no }}</td>
<td>{{ $invites->type }}</td>
<td>{{ $invites->rate }}</td>

<td class=center>
	<a href="{{route('invites.show',$invites->id)}}" class="btn btn-primary">More</a>
</td>
<td class=center>
<a href="{{route('invites.edit',$invites->id)}}" class="btn btn-primary">Edit</a>
</td>
 <td class=center>
   {!! Form::open(['method' => 'Delete','route'=>['invites.destroy',$invites->id]]) !!}
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
	@section('confirmDelete')
    <script>
    $(".delete").on("submit", function(){
        return confirm("Do you want to delete this item?");
    });
    </script>
@endsection
	@section('dateTable')
	<script type="text/javascript">
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
