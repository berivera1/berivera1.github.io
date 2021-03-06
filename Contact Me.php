<!doctype html>
<html>
<head>
<title>Beck Rivera - Contact Me</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" type="text/css" href="styles.css">
<style>
#ContactForm
{
display: none;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script> 
$(document).ready(function(){
        $("#ContactForm").slideDown(1000);
});
</script>
</head>
<body class="main noScroll">
<div class="navbar-wrapper">
<div class="contain">
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" style="padding:7px;text-align:left;margin-left:-20px;margin-right:7px" href="index.html"><img style="float:left;padding-left:15px" src="BR.png" alt="Logo" width="44" height="35"></a>
</div>
<div>
<ul class="nav navbar-nav">
<li><a href="index.html">Home</a></li>
<li><a href="Resume.html">Resume</a></li>
<li><a href="Projects.html">Projects</a></li>
<li><a href="Artwork.html">Artwork</a></li>
<li><a href="Random.html">Random Color <span class="badge">New</span></a></li>
<li><a href="WITW.html">Where in the World? <span class="badge">New</span></a></li>
<li><a href="Broken.html">Broken <span class="badge">New</span></a></li>
<li><a href="weebly.html">Weebly</a></li>
<li><a href="scratch.html">Scratch Profile</a></li>
<li><a href="steam.html">Steam Profile</a></li>
<li class="active"><a href="Contact Me.html">Contact Me</a></li>
</ul>
</div>
</div>
</nav>
</div>
</div>
<h1>Contact Me</h1>
<br />
<div class="w3-container w3-half">
<form class="w3-container w3-card-4" method="post" action="processthis.php">
<h2 class="w3-text-theme">Contact Form:</h2>
<div class="w3-group">
<input class="w3-input" style="background-color: transparent; width: 400px" type="text" required="">
<label class="w3-label">First Name:</label>
</div>
<div class="w3-group">
<input class="w3-input" style="background-color: transparent; width: 400px"  type="text" required="">
<label class="w3-label">Last Name:</label>
</div>
<div class="w3-group">
<input class="w3-input" style="background-color: transparent; width: 600px"  type="text" required="">
<label class="w3-label">Email:</label>
</div>
<div class="w3-group">
<input class="w3-input" style="background-color: transparent; width: 600px; height: 250px"  type="text" required="">
<label class="w3-label">Message:</label>
</div>
<button class="w3-btn w3-theme">Submit</button>
<p></p>
</form>
</div>
</body>
</html>