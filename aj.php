<?php
	include_once('db.php');
	 $meter = substr($_POST["prodlist2"], -1);
	 $mac = substr($_POST["prodlist2"], 0, -1);
	 $sql = "select * from ballground_schedule where Address_MAC = '".$mac."' and meter_id = '".$meter."' order by weekNumber and weektime";
	 $rr = $PDO->query($sql)->fetchAll();
	 echo json_encode($rr);
?>