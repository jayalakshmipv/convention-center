@extends('back-end.layouts.layout')

@section('title', 'Events')

@section('body')

@include('flash')

<div class="col-md-6 col-md-offset-2">
    <div class="box box-primary">
        <div class="box-body">
            <div class="box-header">
                <h2 class="box-title"><strong> Events</strong></h2>
            </div>

                        <table id="example2" class="table table-bordered table-hover">
                <tbody>                   
                    <tr><th>Event Name</th><td>{{ $event->event_name }}</td></tr>
                    <tr><th>Address</th><td>{{ $event->event_date_from }}</td></tr>
                    <tr><th>Location</th><td>{{ $event->event_date_to }}</td></tr>
                    <tr><th>Owner</th><td>{{ $event-> event_hoster }}</td></tr>
                    <tr><th>Phone Number</th><td>{{ $event->hoster_phno }}</td></tr>
                    <tr><th>Mobile Number</th><td>{{ $event->hoster_emailid }}</td></tr>
                    <tr><th colspan="2">
                        Photo
                       <div id="photo" class="col-md-12" style="height: 200px;"><img src="{{ asset('images/'. $event->featured_image) }}" alt="photo" style="width: 300px;"/></div>
                    </th></tr>                   
                    <tr>                      
                        <td><a href="{{route('events.edit',$event->id) }}"class='btn btn-primary btn-block'>Edit Event</a>
                        </td>  
                        {!! Form::open(['method' => 'Delete','route'=>['events.destroy',$event->id]]) !!}
                        {!! csrf_field() !!}
                <input type="hidden" name="_method" value="delete">
                <input type="hidden" name="id" value="{{$event->id}}">
                <td><button type="submit" class="btn btn-danger btn-block">Delete Event</button>
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
