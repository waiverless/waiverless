@extends('Layout.SimpleLayout') 
@section('content')
<div class="row">
	@include('Target.alert')
	<div class="col-md-12">
        <span class="page-head-line"><a href="#"> @lang('messages.target') </a> </span>
    </div>
</div>

<hr />
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="card" style="margin-bottom:5px">
			<div class="card-body collapse show" id="collapse_1">
				<form method="post" action="/Target/addTarget" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="first_name">@lang('messages.first_name')</label>
						<input type="text" class="form-control" id="first_name" name="first_name" required />
					</div>
					<div class="form-group">
						<label for="last_name">@lang('messages.last_name')</label>
						<input type="text" class="form-control" id="last_name" name="last_name" required />
					</div>
					<div class="form-group">
						<label for="birth_date">@lang('messages.birth_date')</label>
						<div class="input-group mb-3">
							<input type="date" class="form-control" id="birth_date" name="birth_date" required />
							<div class="input-group-append">
								<span class="input-group-text"><span class="input-group-addon"><span class="fa fa-calendar"></span></span></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="birth_town">@lang('messages.birth_town')</label>
						<input type="text" class="form-control" id="birth_town" name="birth_town" required />
					</div>
					<div class="form-group">
						<label for="living_town" > @lang('messages.living_town')</label>
						<select class="selectpicker form-control" data-live-search="true" name="living_town" id="living_town" >
								@foreach($Collectivites as $Collectivite)
									<option value="{{$Collectivite->id}}">{{$Collectivite->libelle}}</option>
								@endforeach
						 </select>
					</div>
					<div class="form-group">
						<label for="status" > @lang('messages.status')</label>
						<select class="selectpicker form-control" data-live-search="true" name="status" id="status" >
							<option value="1">Célibataire </option>
							<option value="2">Mariée </option>
							<option value="3">Divorcée </option>
							<option value="4">Veuve </option>
								
						 </select>
					</div>
					<div class="form-group">
						<label for="phone_number">@lang('messages.phone_number')</label>
						<input type="text" class="form-control" id="phone_number" name="phone_number" required />
					</div>
					<div class="form-group">
						<label for="study_level" > @lang('messages.study_level')</label>
						<select class="selectpicker form-control" data-live-search="true" name="study_level" id="study_level" >
								@foreach($NiveauEtudes as $NiveauEtude)
									<option value="{{$NiveauEtude->id}}">{{$NiveauEtude->libelle}}</option>
								@endforeach
						 </select>
					</div>
					<div class="form-group">
						<label for="class_level" > @lang('messages.class_level')</label>
						<select class="selectpicker form-control" data-live-search="true" name="class_level" id="class_level" >
								@foreach($Classes as $Classe)
									<option value="{{$Classe->id}}">{{$Classe->libelle}}</option>
								@endforeach
						 </select>
					</div>
					<div class="form-group">
						<label for="reason_of_waiver" > @lang('messages.reason_of_waiver')</label>
						<select class="selectpicker form-control" data-live-search="true" name="reason_of_waiver" id="reason_of_waiver" >
								@foreach($MotifAbandons as $MotifAbandon)
									<option value="{{$MotifAbandon->id}}">{{$MotifAbandon->libelle}}</option>
								@endforeach
						 </select>
					</div>
					
					<div class="form-group">
						<label for="comment">@lang('messages.comment')</label>
						<textarea type="text" class="form-control" id="comment" name="comment" rows="5" > </textarea>
					</div>
					
					<div class="pull-left">
						<button type="reset" class="btn btn-danger">@lang('messages.cancel')</button>
						<button type="submit" class="btn btn-success">@lang('messages.ok')</button>
					</div>
					<br/><br/>
				</form>
			</div>
		</div>
		
		<br />
		
			
	</div>
	
</div>

@endsection
