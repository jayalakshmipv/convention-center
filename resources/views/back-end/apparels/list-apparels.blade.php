@extends('back-end.layouts.layout')

@section('title', 'List Apparels')

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
<th>Type</th>
<th>Rate</th>
<th>More</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php $i=1 ?>
@foreach ($apparels as $apparels)
<tr>
<td>{{ $i }}</td>
<td>{{ $apparels->name }}</td>
<td>{{ $apparels->place }}</td>
<td>{{ $apparels->phone_no }}</td>
<td>{{ $apparels->type }}</td>
<td>{{ $apparels->rate }}</td>

<td class=center>
	<a href="{{route('apparels.show',$apparels->id)}}" class="btn btn-primary">More</a>
</td>
<td class=center>
<a href="{{route('apparels.edit',$apparels->id)}}" class="btn btn-primary">Edit</a>
</td>
 <td class=center>
   {!! Form::open(['method' => 'Delete','route'=>['apparels.destroy',$apparels->id]]) !!}
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
