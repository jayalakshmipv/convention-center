@extends('back-end.layouts.layout')

@section('title', 'List Events')

@section('body')

@include('flash')

<div class="box box-primary">
<div class="box-body">

<table id="example2" class="table table-striped table-bordered table-hover">
<thead>
<tr>
<th>Sl.No</th>
<th>Event Name</th>
<th>Event Date From</th>
<th>Event Date To</th>
<th>Event Hoster</th>
<th>Hoster Phone Number</th>
<th>Hoster Email id</th>
<th>More</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php $i=1 ?>
@foreach ($events as $event)
<tr>
<td>{{ $i }}</td>
<td>{{ $event->event_name }}</td>
<td>{{ $event->event_date_from }}</td>
<td>{{ $event->event_date_to }}</td>
<td>{{ $event-> event_hoster }}</td>
<td>{{ $event->hoster_phno }}</td>
<td>{{ $event->hoster_emailid }}</td>

<td class=center>
	<a href="{{route('events.show',$event->id)}}" class="btn btn-primary">More</a>
</td>
<td class=center>
<a href="{{route('events.edit',$event->id)}}" class="btn btn-primary">Edit</a>
</td>
 <td class=center>
   {!! Form::open(['method' => 'Delete','route'=>['events.destroy',$event->id]]) !!}
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
