<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/css/material.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.6/dist/css/bootstrap-select.min.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>	

<!-- X-editable -->
<link rel="stylesheet" href="/css/bootstrap-editable.css">
<!--FileInput css-->
<link rel="stylesheet" href="/css/fileinput.min.css">
<!-- own style-->
<link href="/css/styles.css" rel="stylesheet"> 
<script src="/js/material.min.js"></script>
</head>
<body>
<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header bk-clr">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title"><a href="/" style="color:#FFF">WAIVERLESS</a></span>
	  <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="btn btn_menu btn--overlap" href="/Target/target">@lang('messages.jeune_fille') </a>
		<a class="btn btn_menu btn--overlap" href="/Volunteer/volunteer">@lang('messages.volunteer') </a>
		<a class="btn btn_menu btn--overlap" href="/Localisation/localisation">@lang('messages.cartographie') </a>
		<a class="btn btn_menu btn--overlap" href="/Documentation/formation">@lang('messages.documentation') </a>
		<a class="btn btn_menu btn--overlap" href="/ModeleReussite/modele_reussite">@lang('messages.success_stories') </a>
		<a class="btn btn_menu btn--overlap" href="#">@lang('messages.suggestion') </a>
		
		<div class="dropdown">
		  <a class="btn btn_menu dropdown-toggle" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		  
		  </a>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="#">@lang('messages.parameter')</a>
			<a class="dropdown-item" href="/Authentification/logout">@lang('messages.logout')</a>
		  </div>
		</div>
		
		
      </nav>
    </div>
  </header>
  <main class="mdl-layout__content">
    <div class="page-content2">
		<div class="col-md-12">
		<!-- Your content goes here -->
			@yield('content')
		</div>
		
	</div>
  </main>
 <div id="div_info" class="md-12"> </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>	
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>	
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>	
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.6/dist/js/bootstrap-select.min.js"></script>
<script src="/js/script.js"></script>	
</body>
</html>