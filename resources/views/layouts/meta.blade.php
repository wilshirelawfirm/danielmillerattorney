<!doctype html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="@yield('description')">
        <title>Attorney - @yield('title')</title>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <meta name="robots" content="@yield('follow', 'index, follow')">

	    <link rel="stylesheet" href="{{ asset('assets/css/ui.css') }}">
	    <!--[if lte IE 8]>
	        <link rel="stylesheet" href="assets/css/ui-ie.css">
	    <![endif]-->
    </head>
    <body>
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', '{{ config('attorney.analytics_id') }}', 'auto');
	  ga('send', 'pageview');

	</script>
        @yield('page')
        <script src="assets/js/ui.js"></script>
    </body>
</html>