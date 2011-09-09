<?php
	if (isset($_GET['get']) && $_GET['get'] == 'time') {
		echo 'Current time on server is: ' . date("H:i:s") . ' (updated every 5 seconds)';
		die();
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>jQuery Timer Plugin</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="jquery timer plugin" />
	<meta name="keywords" content="javascript, jquery, plugin, timer, setTimeout" />
	<style type="text/css">
	</style>
</head>

<body>
<div id="content">
	<div class="centered" id="content-holder">
		
		<div id="main-content">
		<h2 class="title demo">Timer Demo</h2>

			<div id="test1">Timer attached to this element is paused. Use the buttons below to start/stop the timer.</div>
			<div style="margin:10px">
				<button onclick="$('#test1').timer('start');">Start Timer</button>
				<button onclick="$('#test1').timer('stop');">Stop Timer</button>
			</div>
		
<pre class="code">
	&lt;div id="test1"&gt;Timer attached to this element is paused. Use the buttons below to start/stop the timer.&lt;/div&gt;
	&lt;button onclick="$('#test1').timer('start');"&gt;Start Timer&lt;/button&gt;
	&lt;button onclick="$('#test1').timer('stop');"&gt;Stop Timer&lt;/button&gt;
	$('#test1').timer({
		delay: 1000,
		repeat: 15,
		autostart: false,
		callback: function( index ) {
			html = "My timer has fired " + index + " times&lt;br /&gt;";
			html += "Current client date time is: " + new Date();
			$(this).html(html);
		}
	});
</pre>
		<div id="test2">You can see the current server time here after every 5 seconds</div>
<pre class="code">
	&lt;div id="test2"&gt;You can see the current server time here after every 5 seconds&lt;/div&gt;
	$('#test2').timer({
		delay: 5000,
		repeat: true,
		url: "demo?get=time"
	});
</pre>
		</div>

	</div>
</div>
<script language="javascript" type="text/javascript" src="jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="jquery.plugin.js"></script>
<script language="javascript" type="text/javascript" src="jquery.timer.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	
	// invoke a function on an element every second for 15 times
	$('#test1').timer({
		delay: 1000,
		repeat: 15,
		autostart: false,
		callback: function( index ) {
			html = "My timer has fired " + index + " times<br />";
			html += "Current client date time is: " + new Date();
			$(this).html(html);
		}
	});
	
	// load contents of a div from a url, after every 5 seconds
	$('#test2').timer({
		delay: 5000,
		repeat: true,
		url: "demo.php?get=time"
	});

});
</script>
</body>

</html>

