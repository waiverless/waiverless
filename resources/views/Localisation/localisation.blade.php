@extends('Layout.MapLayout') 
@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div id="mapid" style="width: 100%; height: 600px;"></div>
		@include('Localisation.g_map')
			
	</div>
	
</div>

@endsection
