@extends('back-end.layouts.layout')

@section('title', 'Update Convention Center')

@section('body')

@include('flash')

 <div class="box box-primary">
    <div class="box-body"> 
    {!! Form::model($convention,['method' => 'PATCH','route'=>['conventions.update',$convention->id]]) !!}

         <div class="form-group">
            {!! Form::label('name', 'Convention Center Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Enter Convention Center Name']) !!}

        </div>
         <div class="form-group">
            {!! Form::label('address', 'Address') !!}
            {!!Form::text('address', null,['class' => 'form-control', 'placeholder'=>'Enter Address'])!!}

        </div>
        <div class="form-group">
            {!! Form::label('location', 'Location') !!}
            {!!Form::text('location', null,['class' => 'form-control', 'placeholder'=>'Enter Location'])!!}

        </div>
         <div class="form-group">
            {!! Form::label('name_owner', 'Owner Name') !!}
            {!! Form::text('name_owner', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('phone_no', 'Phone number') !!}
            {!! Form::text('phone_no', null, ['class' => 'form-control']) !!}
        </div>
		<div class="form-group">
            {!! Form::label('mobile_no', 'Mobile number') !!}
            {!! Form::text('mobile_no', null, ['class' => 'form-control']) !!}
        </div>
		<div class="form-group">
            {!! Form::label('mail_id', 'Email id') !!}
            {!! Form::text('mail_id', null, ['class' => 'form-control']) !!}
        </div>
		<div class="form-group">
            {!! Form::label(' website_address', 'Website Address') !!}
            {!! Form::text('website_address', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            <div id="map_canvas" class="col-md-12" style="height: 300px;"></div>
            <div id="latlong" style="display: none;">
                <p class="col-md-6">Latitude: <input size="20" type="text" id="latbox" name="latitude" class="form-control" readonly></p>
                <p class="col-md-6">Longitude: <input size="20" type="text" id="lngbox" name="longitude" class="form-control" readonly></p>
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('featured_image', 'Featured image') !!}
            {!! Form::file('featured_image', null, ['class' => 'form-control']) !!}
        </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
    </div>
    </div>
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
  draggable: true,
  position: myLatlng, 
  map: map,
  title: "Your location"
  });

  google.maps.event.addListener(marker, 'dragend', function (event) {
    document.getElementById("latbox").value = this.getPosition().lat();
    document.getElementById("lngbox").value = this.getPosition().lng();
});

}
</script> 
@endsection
