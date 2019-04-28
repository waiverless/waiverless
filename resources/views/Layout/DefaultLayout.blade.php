<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="/css/material.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.6/dist/css/bootstrap-select.min.css">
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
      <span class="mdl-layout-title"><a href="#" style="color:#FFF">@lang('messages.appli')</a></span>
    </div>
  </header>
  <main class="mdl-layout__content">
    <div class="page-content">
		<div class="col-md-10 offset-md-1">
		<!-- Your content goes here -->
			@yield('content')
		</div>
		
	</div>
  </main>
 <div id="div_info" class="md-12"> </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.6/dist/js/bootstrap-select.min.js"></script>
<script src="/js/script.js"></script>	
</body>
</html>