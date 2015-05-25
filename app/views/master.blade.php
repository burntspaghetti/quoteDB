<html lang="en"><head>
	<meta charset="utf-8">
	<title>quoteDB</title>
	<link rel="shortcut icon" href="https://cdn2.iconfinder.com/data/icons/windows-8-metro-style/128/database.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link href='//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css' rel='stylesheet' type='text/css'>


	<!-- jQuery -->
	<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>

	<!-- DataTables -->
	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>


	<?php //echo HTML::style('cyborg/bootstrap.css') ?>
	<?php //echo HTML::style('cyborg/bootswatch.min.css') ?>

	<?php
		date_default_timezone_set("America/Chicago");
		$time = date("h:i");
		$ampm = date("a");
		dd($time . " " .$ampm);
	?>
	@if($time > '08:00' && $ampm = 'pm' || $time < '07:00' && $ampm = 'am')
		{{HTML::style('darkly/bootstrap.css') }}
		{{HTML::style('darkly/bootswatch.min.css')}}
	@else
		{{HTML::style('readable/bootstrap.css') }}
		{{HTML::style('readable/bootswatch.min.css')}}
	@endif



	{{--<link rel="stylesheet" href="cyborg/bootstrap.css" media="screen">--}}
	{{--<link rel="stylesheet" href="cyborg/bootswatch.min.css">--}}
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
	<script src="../bower_components/respond/dest/respond.min.js"></script>

	<![endif]-->
	<style type="text/css"></style>
<body>
<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a href="{{ action('HomeController@home') }}" class="navbar-brand">quoteDB</a>

			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="navbar-collapse collapse" id="navbar-main">
			<ul class="nav navbar-nav">
				@if(Auth::user())
				{{ Form::open([ 'action' => 'HomeController@search', 'class' => 'navbar-form navbar-left']) }}


				<!--search Form Input-->
				<div class="form-group">
					{{ Form::input('text', 'search', null, array('class' => 'form-control')) }}
				</div>

				{{ Form::close() }}
				@endif


				<li>
					<a href="{{ action('PersonaController@personas') }}">Personas</a>
				</li>
			</ul>

			</ul>
			<ul class="nav navbar-nav" style="float: right">
				{{--if(Auth::user()->username) show this...--}}
				@if(Auth::user())
					<li><a href="{{ action('LoginController@logout') }}" class="navbar-nav pull-right">Logout</a></li>
				@endif

			</ul>
		</div>
	</div>
</div>

<br>
<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		@if(Session::has('flash_message'))
			<div align="center" class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				{{ Session::get('flash_message') }}
			</div>
		@endif
	</div>
</div>

<br>

<div class="container">
	<div class="row">
		@yield('content')
		@yield('test')
	</div>

</div>

{{--<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>--}}

<?php echo HTML::script('cyborg/bootstrap.min.js') ?>
<?php echo HTML::script('cyborg/bootswatch.js') ?>
{{--<script src="cyborg/bootstrap.min.js"></script>--}}
{{--<script src="cyborg/bootswatch.js"></script>--}}