@extends ('layouts.master')

@section('title')
@parent
:: Home
@stop

@section('content')
<div class="col-sm-3 col-md-3 sidebar">
  <ul class="nav nav-sidebar">
    <li>
    	<button type="button" class="btn btn-default navbar-btn" onclick="location.href='{{{ URL::to('downloads') }}}'">Download Now!</btn>
    	<button type="button" class="btn btn-default navbar-btn" onclick="location.href='{{{ URL::to('agreement?r=1') }}}'">Register</btn>
    </li>
    <li>
		<div class="panel panel-primary">
      		<div class="panel-heading">
        		<h3 class="panel-title">NEW ENTRIES</h3>
      		</div>
	      	<div class="panel-body">
	        	Panel content
	      	</div>
    	</div>    
    </li>
    <li>
		<div class="panel panel-primary">
      		<div class="panel-heading">
        		<h3 class="panel-title">TOP PLAYERS</h3>
      		</div>
	      	<div class="panel-body">
	        	<ol>
	        		<li><a href="#">Coming Soon!</a></li>
	        		<li><a href="#">Coming Soon!</a></li>
	        		<li><a href="#">Coming Soon!</a></li>
	        		<li><a href="#">Coming Soon!</a></li>
	        		<li><a href="#">Coming Soon!</a></li>
	        		<li><a href="#">Coming Soon!</a></li>
	        		<li><a href="#">Coming Soon!</a></li>
	        		<li><a href="#">Coming Soon!</a></li>
	        		<li><a href="#">Coming Soon!</a></li>
	        		<li><a href="#">Coming Soon!</a></li>
	        	</ol>
	      	</div>
    	</div>    
	</li>
  </ul>
</div>
<h1>O2Jam Live</h1>
<p>This website is still under construction, some features will be unavailable until launch.</p>


@stop