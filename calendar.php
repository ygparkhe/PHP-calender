<html>
<head>
<title>Calendar without gaps</title>
<body>
<table border="1" align="center">
<?php

$i='&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspcalendar without gaps&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'           ;

echo"<tr>".PHP_EOL;

echo"<td>".$i."</td>".PHP_EOL;
?>
</body>
<body>
<table border="1" align="center">
<tr>
<td>Sunday</td>
<td>Monday</td>
<td>Tuesday</td>
<td>Wednesdday</td>
<td>Thursday</td>
<td>Friday</td>
<td>Saturday</td>
</tr>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<?php
static $count=0;
for($i=1;$i<=12;$i++)
{
	$j=1;
	if($i==1||$i==3||$i==5||$i==7||$i==8||$i==10||$i==12)
	{
		while($j<=31){
			
			
			echo"<td>".$j."</td>".PHP_EOL;
			$count++;
			if($count%7==0){
				
				
			echo"<tr>".PHP_EOL;	
				
	}


$j++;

		}
	}
	elseif($i==4||$i==6||$i==9||$i==11)
	{
		while($j<=30){
			echo"<td>".$j."</td>".PHP_EOL;
			$count++;
			if($count%7==0){
			echo"<tr>".PHP_EOL;	
	}


$j++;
		}
	}
	elseif($i==2)
	{
		while($j<=28){
			echo"<td>".$j."</td>".PHP_EOL;
			$count++;
			if($count%7==0){
				echo"<tr>".PHP_EOL;
	}


$j++;
		}
	}
}
