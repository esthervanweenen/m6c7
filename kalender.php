<?php
date_default_timezone_set( 'Europe/Amsterdam');


$today = getdate();
if(isset($_GET['mon'])){
   if(isset($_GET['year'])){
      $start = mktime(0,0,0,$_GET['mon'],1,$_GET['year']);
   }
   else{
      $start = mktime(0,0,0,$_GET['mon'],1,$today['year']);
   }
}
else{
   $start = mktime(0,0,0,$today['mon'],1,$today['year']);
}
$first = getdate($start);
$end = mktime(0,0,0,$first['mon']+1,0,$first['year']);
$last = getdate($end);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Kalender</title>
		<link href="kalender.css" rel="stylesheet" type="text/css" />
	</head>
 
	<body>
		<div class="kalender">
			<div class="monheader"><a href="?">Deze maand</a><?php echo $first['month'] . ' - ' . $first['year']; ?><a href="?mon=<?php echo $first['mon']+1; ?>&amp;year=<?php echo $first['year']; ?>">Volgende</a></div>
			<div class="dayheader">Sun</div>
			<div class="dayheader">Mon</div>
			<div class="dayheader">Tue</div>
			<div class="dayheader">Wed</div>
			<div class="dayheader">Thu</div>
			<div class="dayheader">Fri</div>
			<div class="dayheader">Sat</div>
<?php
	for($i = 0; $i < $first['wday']; $i++){
	   echo '  <div class="inactive"></div>' . "\n";
	}
	for($i = 1; $i <= $last['mday']; $i++){
	   if($i == $today['mday'] && $first['mon'] == $today['mon'] && $first['year'] == $today['year']){
		  $style = 'today';
	   }
	   else{
		  $style = 'day';
	   }
	   echo '  <div class="' . $style . '">' . $i . '</div>' . "\n";
	}
	if($last['wday'] < 6){
	   for($i = $last['wday']; $i < 6; $i++){
		  echo '  <div class="inactive"></div>' . "\n";
	   }
	}
?>
		</div>
	</body>
</html>