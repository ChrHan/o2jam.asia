@extends ('layouts.master')

@section('title')
@parent
:: FAQ
@stop

@section('content')
<h1>FAQ - Frequently Asked Question</h1>

<p>
		This section will show you listed questions and answers, all supposed to be commonly asked in O2Jam Live.<br/>
		If problem still presist, please try to ask the community (or at our facebook group and facebook fanpage)<br/>
</p>

Q: <b>Where to download the game client and register the new account?</b><br/>
A: You can download game client at <a href="http://live.o2jam.asia/downloads/" target="_blank">here</a> and register at <a href="http://live.o2jam.asia/agreement?r=1" target="_blank">here</a><br/><br/>

Q: <b>?Why I didn't receive a Confirmation Email after registration?</b><br>
A: Confirmation Email is no longer required. You can play the game without any Confirmation.<br/><br/>

Q: <b>How to install the songpack and song update? / The downloaded songpack or update isn't appear in music selection, how to fix this?</b><br/>
A: Check whether the installed songpack and / or update installed in correct directory, Make sure all songs located in <O2Jam_Live_Installation>\Music\ e.g:<br/><br/>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>C:\Program Files\O2Jam Live\Music\</i><br/><br/>
	Make sure your songpack and / or update isn't installed in <O2Jam_Live_Installation>\Music\Music\ e.g:<br/><br/>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>C:\Program Files\O2Jam Live\Music\Music\</i><br/><br/>
	If you having that problem, Just copy all content from <O2Jam_Live_Installation>\Music\Music\ to <O2Jam_Live_Installation>\Music\<br/>
	after copy process is finished, you can safetly to delete <O2Jam_Live_Installation>\Music\Music\ folder.<br/><br/>

Q: <b>My game is crashing everytime enter the room / creating the room, how can I fix this?</b><br/>
A: Please downgrade your Internet Explorer to version 8, you can check the guide at <a href="http://windows.microsoft.com/en-US/windows7/how-do-i-install-or-uninstall-internet-explorer-9" target="_blank">here</a>><br/><br/>
@stop