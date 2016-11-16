@extends('back-end.layouts.layout')

@section('title', 'Convention Center')

@section('body')

@include('flash')

<div class="col-md-6 col-md-offset-2">
    <div class="box box-primary">
	
        <div class="box-body">
            <div class="box-header">
                <h2 class="box-title"><strong> Convention Center</strong></h2>
            </div>

                        <table id="example2" class="table table-bordered table-hover">
                <tbody>                   
                    <tr><th>Name</th><td>{{ $convention->name }}</td></tr>
                    <tr><th>Address</th><td>{{ $convention->address }}</td></tr>
                    <tr><th>Location</th><td>{{$convention->location }}</td></tr>
                    <tr><th>Owner</th><td>{{ $convention->name_owner }}</td></tr>
                    <tr><th>Phone Number</th><td>{{ $convention->phone_no }}</td></tr>
                    <tr><th>Mobile Number</th><td>{{ $convention->mobile_no }}</td></tr>
                    <tr><th>Email id</th><td>{{ $convention->mail_id }}</td></tr>
                    <tr><th>Website Address</th><td>{{ $convention->website_address }}</td></tr>
					
					
                    <tr><th colspan="2">
                        Map Location
                        <div id="map_canvas" class="col-md-12" style="height: 300px;"></div>
                    </th></tr>
										

                    <tr><th colspan="2">
                        Photo
                       <div id="photo" class="col-md-12" style="height: 200px;"><img src="{{ asset('images/'. $convention->featured_image) }}" alt="photo" style="width: 300px;" /></div>
                    </th></tr>                   
                    <tr>                      
                        <td><a href="{{route('conventions.edit',$convention->id) }}"class='btn btn-primary btn-block'>Edit Center</a>
                        </td>
                        {!! Form::open(['method' => 'Delete','route'=>['conventions.destroy',$convention->id]]) !!}
                        {!! csrf_field() !!}
                <input type="hidden" name="_method" value="delete">
                <input type="hidden" name="id" value="{{$convention->id}}">
                <td><button type="submit" class="btn btn-danger btn-block">Delete Center</button>
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
@section('pagescript')

<script type="text/javascript">
  var map;
  function initialize() {
  var myLatlng = new google.maps.LatLng({{$convention->latitude}}, {{$convention->longitude}});

  var myOptions = {
     zoom: 13,
     center: myLatlng,
     mapTypeId: google.maps.MapTypeId.ROADMAP
     }
  map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); 

  var marker = new google.maps.Marker({
  draggable: false,
  position: myLatlng, 
  map: map,
  title: "Your location"
  });

}
</script> 
@endsection