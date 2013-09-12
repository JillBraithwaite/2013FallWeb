<?
	$locations = 'home';
	$name = $pages[$location];
	$msg = "Hello $name[title]";
	$pages = array(
			'home'=>array(
				'url'=>'index.php', 
				'section'=> 'home',
				'title'=>'Home'), 
			'links'=>'links.php','contact'=>'contact.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
  	<div class="container">
  	<pre><?print_r($pages);?></pre>
  	</div>
  	<? include 'navbar.php'; ?>
		
    <h1>Hello world!</h1>
    <h3>Welcome class of 2013 to Web Server Programming</h3>
    
    
	<div class="container">
	    <div class="row">
		  <div class="col-xs-4 col-md-8"><h2>Heading</h2>
		  <p>that isn't english</p></div>
		
			<div class="col-xs-4 col-md-8"><h2>Important Points</h2>
		  <ul><li>bullet</li></ul></div>
		</div>
		
		
		<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
		<div class="row">
		  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
		  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
		  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
		</div>
	</div>
	<div class="container">
		
	</div>
	<!-- Columns are always 50% wide, on mobile and desktop -->
	<div class="row">
	  <div class="col-xs-6">.col-xs-6</div>
	  <div class="col-xs-6">.col-xs-6</div>
	</div>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
