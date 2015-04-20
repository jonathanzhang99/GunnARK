<?php
	$mongo = new MongoClient("mongodb://localhost");
	if ($mongo){
		$db = $mongo->ark;
		$accounts = $db->accounts;
		$activites = $db->tiers;
 	}

	
?>