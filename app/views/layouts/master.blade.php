<!DOCTYPE html>
<html>
	<head>
		<title>
			@section('title')
			O2Jam Live - Free Online Rhytm Action
			@show
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- CSS are placed here -->
		{{ HTML::style('css/bootstrap.css') }}
		{{ HTML::style('css/bootstrap-theme.css') }}

		<style>
		@section('styles')
			body {
				padding-top: 60px;
			}
		</style>
	</head>

	<body>
		<!-- Navbar -->
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
						<!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">-->
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				</button>

				<a class="navbar-brand" href="#">O2Jam Live</a>
				</div>
				<!-- Everything you want hidden at 940px or less, place within here -->
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="{{{ URL::to('') }}}">Home</a></li>
						<li><a href="{{{ URL::to('downloads') }}}">Downloads</a></li>
						<li><a href="{{{ URL::to('community') }}}">Community</a></li>
						<li><a href="{{{ URL::to('gamecp') }}}">Game CP</a></li>
						<li><a href="{{{ URL::to('faq') }}}">FAQ</a></li>
						<li><a href="{{{ URL::to('wiki') }}}">Wiki</a></li>
<!--					</ul>
					<ul class="nav navbar-right">-->
						@if ( Auth::guest() )
						<li>{{ HTML::link('login', 'Login') }}</li>
						@else
						<li>{{ HTML::link('secret', 'Secret') }}</li>
						<li>{{ HTML::link('logout', 'Logout') }}</li>
						@endif
					</ul>
				</div>
			</div>
		</div>

		<!-- Container -->
		<div class="container">

			<!-- Success-Messages -->
			@if ($message = Session::get('success'))
				<div class="alert alert-success alert-dismissible">
			        <!--<span class="close" data-dismiss="alert">&times;</span>-->
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
					<h4>Success</h4>
					{{{ $message }}}
				</div>
			@endif

			<!-- Content -->
			@yield('content')
		
		</div>

		<footer class="footer">
      		<div class="container-fluid">
<!--        	<p class="text-muted">Place sticky footer content here.</p>-->
				<div class="navbar navbar-inverse" role="navigation">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="http://o2jam.asia" title="O2Jam Live">Copyright &copy; 2007 - 2011 O2Jam Live</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right container-fluid">
						<li><a href="{{{ URL::to('') }}}">Home</a></li>
						<li><a href="{{{ URL::to('faq') }}}">FAQ</a></li>
						<li><a href="{{{ URL::to('agreement') }}}">User Agreement</a></li>
						<li><a href="{{{ URL::to('contact') }}}">Contact</a></li>
					</ul>
				</div>
      		</div>
    	</footer>

		<!-- Scripts are placed here -->
		{{ HTML::script('js/jsquery-1.11.1.min.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
	</body>
</html>