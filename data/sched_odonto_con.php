<?php
	require_once('connector/scheduler_connector.php');
	include ('config.php');

	$scheduler = new schedulerConnector($res, $dbtype);
	$scheduler->render_table("schedule_odonto","id","start_date,end_date,text,name,phone");
?>