<div class="col-md-12" id="message">
	@if (session('alert'))
	<div class="alert @if(session('alert')['category']==1) alert-success @elseif (session('alert')['category']==2) alert-danger @endif alert-dismissible" role="alert">
		<div class="alert-icon">
			<span class="fa @if(session('alert')['category']==1) fa-check @elseif (session('alert')['category']==2) fa-warning @endif"></span> <strong>@if (session('alert')['category']==1) @lang('messages.success') @elseif (session('alert')['category']==2) @lang('messages.error') @endif</strong>
		</div>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
		<p>@if(session('alert')['category']==1) @lang('messages.success_operation') @elseif (session('alert')['category']==2) @lang('messages.unsuccess_operation') @endif </p>
	</div>
	@endif
	{!! Session::forget('alert') !!}
</div>