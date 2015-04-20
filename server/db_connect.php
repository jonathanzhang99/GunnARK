<?php
	$mongo = new MongoClient();
	if ($mongo){
		$db = $mongo->ark;
		$accounts = $db->accounts;
		$activities= $db->tiers;
 	}

	
?>
