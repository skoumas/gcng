<? 
	 
	$mainTitle = "Greek Coffee Shop Name Generator";
	$name = isset($_GET['name']) ?  $_GET["name"] : null;
	$title = ($name==null) ?  $mainTitle :  "Your Cafeteria name is " . $name . " " . $mainTitle;

	$file = 'counter.txt';
	$counter = file_get_contents($file);
?>
<html>
<head>
	<title> <?= $mainTitle ?> </title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/cover.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<meta name="description" content="Create your Greek Cafeteria name">
	<meta name="keywords" content="Greece, Greek, Hellas, Coffee
	Frappe, Frape, Ice, Summer, Relax, Drink, Vacation, Vacations">

	<? if ($name == null): ?>
		<meta property="og:title" content="<?=$mainTitle?>" />
		<meta property="og:description" content="The Greek Cafeteria name generator will generate
		a Greek cafeteria name for you..." />
	<? else : ?>
		<meta property="og:title" content="Click here to see my Cafeteria name" />
		<meta property="og:description" content="I created my own Greek Cafeteria name using <?= $mainTitle ?>. Click this link to see it..." />
	<? endif;?>
	<meta property="og:image" content="images/logo.png" />
	<link rel="icon" type="image/png" href="images/favicon.png" />


</head>

<body>

	<div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">


         <!-- FIRST SCREEN -->
          <div id="first" class="inner cover" >
          	<a href="http://www.greek-cafeteria-name-generator.com"><img src="images/flag.png"  width="200"></a>
            <h1 class="cover-heading">Greek Cafeteria Name Generator</h1>
            <p class="lead">Want to open a new Greek Cafeteria shop and unsure about the name?<bR>Here is your tool...</p>
            
            <p class="lead">
              <a href="#" id="button_generate" class="btn btn-lg btn-danger">Generate a Greek Cafeteria Name</a>
            </p>
            <p> <?=  $counter ?> Greek Cafeteria names generated so far...</p>
          </div>

          <!-- LOADING SCREEN -->
          <div id="loading" class="inner cover" >
            <h1 class="cover-heading"><i class="fa fa-spin fa-spinner"></i> </h1>
            <p class="lead">Please wait while...</p>
            
            <div class="progress">	
					<div id="progress_bar" class="progress-bar progress-bar-lg" role="progressbar" aria-valuenow="70"
					aria-valuemin="0" aria-valuemax="100" style="width:0%">
					<span class="lead" id="loading_title"> </span>
				  </div>
			</div>
          </div>

          
          <!-- FINAL SCREEN -->
          <div id="final" class="inner cover" >
          	<a href="http://www.greek-cafeteria-name-generator.com"><img src="images/flag.png" width="200"></a>
			<p class="lead" id="loading_title">Your Greek Cafeteria name is....</p>
			<h1 class="cover-heading" id="final_name">"<?= $name ?>"</h1>
             <p clas="lead">
              <a href="#" id="button_share" class="btn btn-lg btn-info"><i class="fa fa-facebook"></i> Share</a>
              <a href="#" id="button_reset" class="btn btn-lg btn-danger"><i class="fa fa-refresh"></i> Retry</a>
            </p>
          </div>


          <!-- CAME FROM LINKS -->
          <div id="link" class="inner cover" >
          	<img src="images/falg.png" width="200">
			<p class="lead">My Greek Cafeteria Name is....</p>
			<h1 class="cover-heading" id="link_name">"<?= $name ?>"</h1>
			<br><br>
			<h4>  Would you like to generate your own Greek Cafeteria Name?? </h4>
			<p class="lead">
              <a href="#" onClick="generateName()" class="btn btn-lg btn-danger">Generate Yours</a>
            </p>
          </div>
           


	      <div class="mastfoot">
	        <div class="inner">
	          <p>Website made for fun. <br>Help Greek people overcome crisis by enjoying a nice coffe at the Greek islands!</p>
	        </div>
	      </div>

        </div>

      </div>

    </div>

	<!-- SCRIPTS -->
	
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/gcsng.js"></script>
	<script>
		$("#button_generate").click(function(){
			generateName();
		});
		$("#button_reset").click(function(){
			reset();
		});
		$("#button_share").click(function(){
			facebookShare("http://www.greek-cafeteria-name-generator.com/?name=" + name,
			 "Check my Greek Cafeteria Name and Generate Yours...",
			 "I created my own Greek Cafeteria name using Greek Cafeteria Name Generator.",
			 "http://www.greek-cafeteria-name-generator.com/images/facebook.jpg");	 
		});$("#first").css({"display":"block"});
/*
		<? if ($measure != null) : ?>
			$("#link").css({"display":"block"});
			$("#first").css({"display":"none"});
			$("#link_name").slideDown();
		<? else : ?>
			$("#first").css({"display":"block"});
		<? endif; ?>
*/
	</script>
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-65029286-1', 'auto');
	  ga('send', 'pageview');

	</script>
 
</body>
</html>