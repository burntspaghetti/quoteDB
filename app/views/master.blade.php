<html lang="en"><head>
	<meta charset="utf-8">
	<title>Bootswatch: Cyborg</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="cyborg/bootstrap.css" media="screen">
	<link rel="stylesheet" href="cyborg/bootswatch.min.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
	<script src="../bower_components/respond/dest/respond.min.js"></script>
	<![endif]-->
	<script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script><script>

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-23019901-1']);
		_gaq.push(['_setDomainName', "bootswatch.com"]);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script><style type="text/css"></style>
	<style>@-webkit-keyframes popdxstckdeugtjivcsrcuczmoyldiozakxsurzerk {50% {-webkit-transform:scale(1.2);}100% {-webkit-transform:scale(1);}}@keyframes popdxstckdeugtjivcsrcuczmoyldiozakxsurzerk {50% {-webkit-transform:scale(1.2);transform:scale(1.2);}100% {-webkit-transform:scale(1);transform:scale(1);}}#dxstckdeugtjivcsrcuczmoyldiozakxsurzerk{padding:0;margin:0;font:13px Arial,Helvetica;text-transform:none;font-size: 100%;vertical-align:baseline;line-height:normal;color:#fff;position:static;border:solid 2px #fff !important;box-sizing:content-box !important;color:#fff !important;display:block !important;height:auto !important;margin:0 !important;opacity:0.9 !important;padding:7px 10px !important;position:fixed !important;visibility:visible !important;width:auto !important;z-index:2147483647 !important;-webkit-border-radius:5px !important;-webkit-box-shadow:0px 0px 20px #000 !important;-webkit-box-sizing:content-box !important;}.dxstckdeugtjivcsrcuczmoyldiozakxsurzerk-blocked{padding:0;margin:0;font:13px Arial,Helvetica;text-transform:none;font-size: 100%;vertical-align:baseline;line-height:normal;color:#fff;position:static;color:#AAA !important;display:inline !important;text-decoration:line-through !important;}#dxstckdeugtjivcsrcuczmoyldiozakxsurzerk br{display:block !important;padding:0;margin:0;font:13px Arial,Helvetica;text-transform:none;font-size: 100%;vertical-align:baseline;line-height:normal;color:#fff;position:static;}#dxstckdeugtjivcsrcuczmoyldiozakxsurzerk span{background:transparent !important;padding:0;margin:0;font:13px Arial,Helvetica;text-transform:none;font-size: 100%;vertical-align:baseline;line-height:normal;color:#fff;position:static;}#dxstckdeugtjivcsrcuczmoyldiozakxsurzerk div{padding:0;margin:0;font:13px Arial,Helvetica;text-transform:none;font-size: 100%;vertical-align:baseline;line-height:normal;color:#fff;position:static;border:0 !important;margin:0 !important;padding:0 !important;width:auto !important;letter-spacing:normal !important;font:13px Arial,Helvetica !important;text-align:left !important;text-shadow:none !important;text-transform:none !important;word-spacing:normal !important;}#dxstckdeugtjivcsrcuczmoyldiozakxsurzerk a{padding:0;margin:0;font:13px Arial,Helvetica;text-transform:none;font-size: 100%;vertical-align:baseline;line-height:normal;color:#fff;position:static;font-weight:normal !important;background:none !important;text-decoration:underline !important;color:#fff !important;}a#dxstckdeugtjivcsrcuczmoyldiozakxsurzerk-gear{padding:0;margin:0;font:13px Arial,Helvetica;text-transform:none;font-size: 100%;vertical-align:baseline;line-height:normal;color:#fff;position:static;text-decoration:none !important;position:absolute !important;display:none !important;font-size:20px !important;width:20px !important;height:20px !important;line-height:20px !important;text-align:center !important;background-color:rgba(255,255,255,.8) !important;background-image:url(chrome-extension://mlomiejdfkolichcflejclcbmpeaniij/data/images/gear.svg) !important;background-size:16px 16px !important;background-position:center center !important;background-repeat:no-repeat !important;text-decoration:none !important;}a#dxstckdeugtjivcsrcuczmoyldiozakxsurzerk-gear:hover{-webkit-animation-name:popdxstckdeugtjivcsrcuczmoyldiozakxsurzerk !important;animation-name:popdxstckdeugtjivcsrcuczmoyldiozakxsurzerk !important;-webkit-animation-duration:0.3s !important;animation-duration:0.3s !important;}#dxstckdeugtjivcsrcuczmoyldiozakxsurzerk:hover #dxstckdeugtjivcsrcuczmoyldiozakxsurzerk-gear{text-decoration:none !important;display:inline-block !important;}@media print{#dxstckdeugtjivcsrcuczmoyldiozakxsurzerk{display:none !important;}}</style></head>
<body>
<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a href="../" class="navbar-brand">quoteDB</a>
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="navbar-collapse collapse" id="navbar-main">
			<ul class="nav navbar-nav">

				{{ Form::open([ 'action' => 'HomeController@search', 'class' => 'navbar-form navbar-left']) }}


				<!--search Form Input-->
				<div class="form-group">
					{{ Form::input('text', 'search', null, array('class' => 'form-control')) }}
				</div>

				{{ Form::close() }}


				<li>
					<a href="">Personas</a>
				</li>
			</ul>
		</div>
	</div>
</div>


<div class="container">

	<div class="page-header" id="banner">
		<div class="row">

			{{ Form::open([ 'action' => 'HomeController@search', 'class' => 'clearfix', 'style' => 'padding:1em 3em;']) }}

			<!--search Form Input-->
			<div class="form-group">
				{{ Form::label('search', 'Search Quotes: ') }}
				{{ Form::input('text', 'search', null, array('class' => 'form-control input-lg')) }}
			</div>

			<button class="btn btn-default btn-lg btn-block" type="submit">Search</button>

			{{ Form::close() }}

		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		@yield('content')
	</div>

</div>




<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="cyborg/bootstrap.min.js"></script>
<script src="cyborg/bootswatch.js"></script>
<script type="text/javascript">
	/* <![CDATA[ */
	(function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&a.indexOf("/cdn-cgi/l/email-protection") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf("/cdn-cgi/l/email-protection");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
	/* ]]> */
</script>


<div id="dxstckdeugtjivcsrcuczmoyldiozakxsurzerk" title="Click to dismiss alert bubble" style="right: 20px !important; bottom: 15px !important; cursor: pointer; background: rgb(51, 0, 51) !important;"><div style="background: rgb(51, 0, 51) !important;"><a href="#" id="dxstckdeugtjivcsrcuczmoyldiozakxsurzerk-gear" title="Click to configure alert bubble" style="right: 0px !important; bottom: 0px !important; border-top-left-radius: 3px !important; border-bottom-right-radius: 3px !important;">&nbsp;</a><span>Google Analytics</span><br></div></div><script id="hiddenlpsubmitdiv" style="display: none;"></script><script>try{for(var lastpass_iter=0; lastpass_iter < document.forms.length; lastpass_iter++){ var lastpass_f = document.forms[lastpass_iter]; if(typeof(lastpass_f.lpsubmitorig2)=="undefined"){ lastpass_f.lpsubmitorig2 = lastpass_f.submit; if (typeof(lastpass_f.lpsubmitorig2)=='object'){ console.error('LastPass: Skipping form because submit is not a function!');continue;}lastpass_f.submit = function(){ var form=this; var customEvent = document.createEvent("Event"); customEvent.initEvent("lpCustomEvent", true, true); var d = document.getElementById("hiddenlpsubmitdiv"); if (d) {for(var i = 0; i < document.forms.length; i++){ if(document.forms[i]==form){ if (typeof(d.innerText) != 'undefined') { d.innerText=i; } else { d.textContent=i; } } } d.dispatchEvent(customEvent); }form.lpsubmitorig2(); } } }}catch(e){}</script></body></html>

{{--@yield('content')--}}




