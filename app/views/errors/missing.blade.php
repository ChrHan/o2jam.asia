@extends('layouts.master')

@section('title')
@parent
::404 Not Found
@stop

{{-- Content --}}
@section('content')
<table border="0">
	<tr>
		<td style="width: 25%">
			<img src="http://live.o2jam.asia/images/o2mo-front.png" alt="" />
		</td>
		<td>
			<h1>~Sorry!</h1>
			<p>
				The page you requested is currently unavailable or no longer exist.
			</p>
		</td>
	</tr>
</table>
@stop