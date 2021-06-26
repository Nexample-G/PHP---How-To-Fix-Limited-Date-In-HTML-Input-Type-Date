<?php 	

	date_default_timezone_set('Asia/Kolkata');
	$Format = 'Y-m-d';

//this is past day Setting
	$PD = 1;
	$PM = 1;
	$PY = 1;

//this is future day Setting
	$FD = 1;
	$FM = 1;
	$FY = 1;

	$PDT = date($Format, strtotime(" -$PD days -$PM months -$PY years "));
	$CDT = date($Format);
	$FDT = date($Format, strtotime(" +$FD days +$FM months +$FY years "));


// past date in min
// current date in value
// future date in max
?>

<style>
h1{
	width:100%;
	margin:40px 0px;
 	background:rgba(0,0,0, 0.0);
	border:1px solid rgba(255,0,0, 0.0);
	font:bold 32px/20px "Arial";
	color:rgba(0,0,0, 0.5);
}

</style>

<h1>PHP - How To Fix Limited Date In HTML Input Type Date </h1>

<input type="date"  min="<?=$PDT;?>"  value="<?=$CDT;?>"  max="<?=$FDT;?>">



