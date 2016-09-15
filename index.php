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
        <style>
			.section {
				padding-top:25px;
				padding-bottom:25px;
				margin-top:25px;
			}

			.bloom-two-wheels {
				position:relative;
			}
			.bloom-two-wheels > * {
				background-color:blue;
				border:1px solid #FFF;
				border-radius:5px;
			}
			.bloom-two-wheels .frame {
				position:absolute;
				top:0;
				left:10px;
				width:40px;
				height:40px;
			}
			.bloom-two-wheels .wheel-one {
				position:absolute;
				top:30px;
				left:0;
				width:20px;
				height:20px;
				animation:spin 4s linear infinite;
			}
			.bloom-two-wheels .wheel-two {
				position:absolute;
				top:30px;
				left:40px;
				width:20px;
				height:20px;
				animation:spin 4s linear infinite;
			}
			@keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); } }

			.bloom-cloud {
				position:relative;
				overflow: hidden;
				min-height:50px;
			}
			.bloom-cloud > * {
				background-color:green;
				border:1px solid #FFF;
				border-radius:5px;
			}
			.bloom-cloud .cloud-one {
				position: absolute;
				width:20%;
				height:20px;
				animation:cloud 4s linear infinite;
			}
			.bloom-cloud .cloud-two {
				position: absolute;
				width:20%;
				height:20px;
				top:20px;
				animation:cloud 10s linear infinite;
			}
			@keyframes cloud { 0% { left: -20%; } 100% { left: 120%; } }

        </style>

		<script>
		  $(document).ready(function(){

		  });
		</script>

        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
		  <div class="row section">
        	<h1>Bloom </h1>
        	<p><span>v0.1</span> Simple js/css for bringing pages to life.</p>
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
    </body>
</html>
