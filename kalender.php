<?php
date_default_timezone_set( 'Europe/Amsterdam');
$arraymaand = array(
    "Januari",
    "Februari",
    "Maart",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Augustus",
    "September",
    "Oktober",
    "November",
    "December"
    );

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
		<link href="kalender.css" rel="stylesheet" />
	</head>
 
	<body>
		<div id="container">
		<div id="kop">
			<h1>Kalender</h1>
		</div>
		<div id="menu">
				<ol>
					<li><a href="Hoofdpagina.html">Home</a></li>
					<li><a href="kalender.php">Kalender</a></li>
					<li><a href="activiteiten.php">Activiteiten</a></li>
				</ol>
		</div>
		
		<div id="content">
		<div class="kalender">
			<div class="monheader"><a href="?">Huidige maand</a><?php echo $arraymaand[$first["mon"] - 1] . ' - ' . $first['year']; ?>
			<a href="?mon=<?php echo $first['mon']-1; ?>&amp;year=<?php echo $first['year']; ?>">Vorige</a>
			<a href="?mon=<?php echo $first['mon']+1; ?>&amp;year=<?php echo $first['year']; ?>">Volgende</a></div>
			<div class="dayheader">Zondag</div>
			<div class="dayheader">Maandag</div>
			<div class="dayheader">Dinsdag</div>
			<div class="dayheader">Woensdag</div>
			<div class="dayheader">Donderdag</div>
			<div class="dayheader">Vrijdag</div>
			<div class="dayheader">Zaterdag</div>
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
		</div>
		</div>
	</body>
</html>