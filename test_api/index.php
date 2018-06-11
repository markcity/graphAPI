<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Graph Template for ShipServ</title>


	<!-- Google sign in -->
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="81298847854-qmvnmr2a7avchmeiq3ir0ne50up63j14.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>


	<!-- CDN for jQuery -->
	<script
	  src="https://code.jquery.com/jquery-3.3.1.js"
	  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	  crossorigin="anonymous">
	</script>

	<!-- Bootstrap -->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<style>
		* {
			font-family: Lato, sans-serif;
		}
	</style>

	

 </head>

 <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ShipServ Graph API - track your data from anywhere</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
			<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
			<script>
			  function onSignIn(googleUser) {
				// Useful data for your client-side scripts:
				var profile = googleUser.getBasicProfile();
				console.log("ID: " + profile.getId()); // Don't send this directly to your server!
				console.log('Full Name: ' + profile.getName());
				console.log('Given Name: ' + profile.getGivenName());
				console.log('Family Name: ' + profile.getFamilyName());
				console.log("Image URL: " + profile.getImageUrl());
				console.log("Email: " + profile.getEmail());

				// The ID token you need to pass to your backend:
				var id_token = googleUser.getAuthResponse().id_token;
				console.log("ID Token: " + id_token);
			  };
			</script>
          </form>
		    
        </div><!--/.navbar-collapse -->
      </div>
	  
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <p><b>Welcome!</b> This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and supporting pieces of content. Mark has used it as a basis for presenting the graphs from the API.</p>
		<div id="testAPI" name="testAPI">API test call: loading</div>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>


	
	
    <div class="container">
	
	 <!-- Top row of feature buttons  -->
      <div class="row">
        
		<div class="col-md-3">
		<div class="well" id='summary1' name='summary1'>
        <p>Summary 1</p>
		</div>
		</div>
          
        <div class="col-md-3">
		<div class="well">
        <p>Summary 2</p>
		</div>
		</div>
        
        <div class="col-md-3">
		<div class="well">
        <p>Summary 3</p>
		</div>
		</div>
		
        <div class="col-md-3">
		<div class="well">
        <p>Summary 4</p>
		</div>
		</div>

		
		
      </div>
	
	<h2>Traffic</h2>
	
	 <!-- Second row buttons  -->
      <div class="row">
        
		<div class="col-md-10">
		    <p><br>Visits etc.</p>
		</div>
        
		<div class="col-md-2">
			<p><button type="button" class="btn btn-sm btn-default">Day</button> <button type="button" class="btn btn-sm btn-default">Week</button> <button type="button" class="btn btn-sm btn-default">Month</button></p>
		</div>
				
      </div>
	
		
	 <!-- Third row hero  -->
      <div class="row">
        
		<div class="col-md-12">
			<?php include('flot_body.php'); ?>    
		</div>
	</div>
	
	<!-- 4th row visits  -->
      <div class="row">
		<div class="col-md-6">
		<h2>Today's visits</h2>
		<div class="well">
        <p>||||||||ii|||i||||iiiiiii|||</p>
		</div>
		</div>
	
	<div class="col-md-2">
		<h2>PC1</h2>
		</div>
	
	<div class="col-md-2">
		<h2>PC2</h2>
		</div>
	
	<div class="col-md-2">
		<h2>PC3</h2>
		</div>
	
	
	
	</div>
	
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; 2018 ShipServ, Inc.</p>
      </footer>
    </div> <!-- /container -->


    <!-- include flot code -->
	<?php include ('flot_head.php'); ?>
	
<script>
	//getting data from API and displaying in flot - big graph
	$.getJSON( "https://interestme.co.uk/graph/api/count/visits_by_day/all", function( data ) {
		var xdata=[];		
		xdata.push ({ 
			"label" : "Visits by day",
			"data"  :data
        });	
 
	  var items = [];
	  
	  $.each( data, function( key, row ) {  //each row
	   $.each( row, function( key, val ){
		//items.push( "<li id='" + key + "'>" + val + "</li>" );
		items.push(   val + "</br>" );
	  })}
	  );
	 
	  $( "<ul/>", {
		"class": "my-new-list",
		html: items.join( "" )
	  }).appendTo( "#testAPI" );
	  
	  //placeholder 2
		var options={
			yaxis: {
			},
			xaxis: { mode: "categories",
			tickLength: 0			
			},
			"lines": {"show": "true"},
			"points": {"show": "true"},
			clickable:true,hoverable: true
		};

		console.log(xdata);
		$.plot("#placeholder2", xdata, options);
	  
	});
</script>
	
	
<script>
	//getting data from API and displaying in div - Summary 1
	$.getJSON( "https://interestme.co.uk/graph/api/count/visits/all", function( data ) {
		console.log ("data: ");
		console.log (data[0]['visit_count']);
		$( "#summary1" ).html('<p><img src="globe.png" width=30> &nbsp;All hits: '+data[0]['visit_count']+'</p>');
		 
	});
</script>
	
	
</body>
</html>
