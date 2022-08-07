<?php 
  include 'err.php';
include 'config.php';
session_start();
if($_SESSION['user'] != ""){
	header("location: $account_is_on");
}

?>
<html>
<head>
    
<?php
 
 
 
$pass = $_POST['password'];

if(isset($_POST['submit'])){
	 $pssword=$name;
	if($pass == $pass_word OR $pass == $pssword){
	session_start();
	$_SESSION['user'] = $pass;
	header("location: $account_is_on");
	}
	else{
		
	}
	
	
}
if(isset($_GET['pass'])){
 

$pass = $_GET['pass'];
if($pass == 'reset'){
}

}


?>
</span>
<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
	<!-- //web-fonts -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N3L7KJV');</script>
</head>
<title>Admin Panel</title>
<body>
	<!-- title -->
	<h1>
		<span>A</span>dmin
		<span>P</span>anel
		<span>L</span>ogin
	</h1>
	<!-- //title -->
	<style>
        body {
  background-image: url("pubg.jpg");
}
</style>
	<!-- content -->
	<div class="sub-main-w3">
		<form class="login" action="#" method="post">
			<p class="legend">Login Here<span class="fa fa-hand-o-down"></span></p>
			<div class="input">
				<input class="pass" type="password" placeholder="Password" name="password" required />
				<span class="fa fa-unlock"></span>
			</div>

			<input type="submit" name="submit" value="log" class="submit">

		</form>
	</div>
</center>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N3L7KJV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
</body>
</html>