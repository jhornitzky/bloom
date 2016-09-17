<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Bloom - bring your web pages to life</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bloom.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body class="bloom-play">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="jumbotron">
      <div class="container">
		  <div class="row section">
        	<h1>Bloom</h1>
        	<p><span style="text-decoration:underline">v0.1</span> <br>
				Simple css for bringing pages to life.</p>
			<a href="#" class="" onclick="togglePlay()">Toggle .play animations</a>
			<br><br><br>
		</div>
		  <div class="row section">
			  <div class="col-md-6">
			  	<h3>.bloom-two-wheels</h3>
        		<div class="bloom-two-wheels">
					<div class="frame"></div>
					<div class="wheel-one"></div>
					<div class="wheel-two"></div>
				</div>
			  </div>
			  <div class="col-md-6">
			  	<h3>.bloom-cloud</h3>
        		<div class="bloom-cloud">
					<div class="cloud-one"></div>
					<div class="cloud-two"></div>
				</div>
			  </div>
		  </div>
		  <div class="row section">
			  <div class="col-md-6">
			  	<h3>.bloom-orbit</h3>
        		<div class="bloom-orbit">
					<div class="orbiter"></div>
				</div>
			  </div>
			  <div class="col-md-6">
			  	<h3>.bloom-bg</h3>
        		<div class="bloom-bg">
					<div class="screen"></div>
				</div>
			  </div>
		  </div>
		  <div class="row section">
			  <div class="col-md-6">
			  	<h3>.bloom-float</h3>
        		<div class="bloom-float">
					<div class="floater"></div>
				</div>
			  </div>
			  <div class="col-md-6">
			  	<h3>.bloom-stack</h3>
        		<div class="bloom-stack">
					<div class="stack-one"></div>
					<div class="stack-two"></div>
					<div class="stack-three"></div>
					<div class="stack-four"></div>
				</div>
			  </div>
		  </div>
		  <div class="row section">
			  <div class="col-md-6">
			  	<h3>.bloom-flytrap</h3>
        		<div class="bloom-flytrap">
					<div class="fly"></div>
					<div class="trap-top"></div>
					<div class="trap-bottom"></div>
				</div>
			  </div>
			  <div class="col-md-6">
			  	<h3>.bloom-wind</h3>
        		<div class="bloom-wind">
					<div class="blowing"></div>
				</div>
			  </div>
		  </div>
      </div>
    </div>

    <div class="container">
      <footer>
        <p>&copy; James Hornitzky 2016</p>
      </footer>
    </div>
		<!-- /container -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/jquery.transit.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
		<script>
		  function togglePlay() {
			  $('body').toggleClass('bloom-play');
		  }
		</script>
    </body>
</html>
