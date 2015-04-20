<?php
	$mongo = new MongoClient("mongodb://localhost");
	if ($mongo){
		$db = $mongo->ark;
		$accounts = $ark->accounts;
	}
	
?>