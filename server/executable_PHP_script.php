<?php
require_once('db_connect.php');

$query2 = array(
	"tier" => 2,
	0=> "Take a selfie with someone you do not already know on campus!",
	1=> "Help a teacher clean up after class (Make sure you won't be tardy to the next one!",
	2=> "Carry a friend's backpack to class for them",
	3=> "Compliment someone you are walking past during passing period",
	4=> "Tell a friend that you appreciate them being in your life",
	5=> "Offer to buy someone something from the Brunch Line and buy that item for him or her",
	6=> "Give a friend a massage (Make sure they're ok with it)",
	7=> "Say Hi to one of your teachers outside of the classroom",
	8=> "Offer to throw away your friend’s trash",
	9=> "Write a gram to a teacher!",
	10=> "Ask a friend if anything good has happened to them recently",
	11=> "Write an inspirational quote on a post-it and put it on a door",
	12=> "Show someone a funny video",
	13=> "Offer to study with someone/help someone with homework",
	14=> "Let someone go in front of you in line",
	15=> "Thank someone who has been an inspiration to you in your life",
	"points" => 30
	);
$query3 = array(
	"tier" => 3,
	0=> "Bike or carpool to school with someone!",
	1=> "Write a friend an appreciation letter",
	2=> "Make tea for someone in the AC",
	3=> "Give a hug to someone you do not yet know (Make sure you do this without creeping him or her out)",
	4=> "Give someone a flower",
	5=> "Write a poem for someone",
	6=> "Make someone a friendship bracelet",
	7=> "Sweep someone off of their feet (Make sure you don't break yourself)",
	8=> "Leave $1.75 in the vending machine change dispenser for someone else to find",
	9=> "Start a conversation with student in the Special Needs Department",
	10=> "Sit next to someone new in class (if there are no assigned seats) and get to know them better",
	11=> "Draw a picture for a friend",
	"points" => 60
	);

$query4 = array(
	"tier" => 4,
	0=> "Send Flowers to the Main Office",
	1=> "Write a Thank You note and personally deliver it to a teacher",
	2=> "Give a friend a meaningful gift",
	3=> "Create a playlist for a friend",
	4=> "Write four haikus for four of your teachers and leave them inside their box",
	5=> "Serenade a friend",
	6=> "Write ten encouraging notes and leave them in random places (On doors, in textbooks, in laptops, on bikes, desks, etc.)",
	"points" => 100
	);

$query5 = array(
	"tier" => 5,
	0=> "Bring a treats or a snack of some sort to class right before a test!",
	1=> "With a group of friends, flash mob the Senior Quad during Brunch (Uptown Funk for style points)",
	3=> "Serenade someone you have seen around campus, but haven’t talked to very much",
	"points" => 150
	);

$activities->insert($query2);
$activities->insert($query3);
$activities->insert($query4);
$activities->insert($query5);


?>