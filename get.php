<?php

echo "foo|bar";


//data retrieved when asking for a "store"
$stores = {
	"storeid" => {
		"creatorid",
		"storeName" => "",
		"assets" => [],
		"images" => ["url1", "url2", "url3", "url4"],
		"tags" => ["quest", "fbt", "adult", "a", "cb4506", "halloween", "is a cool dude", "sergal"],
	}
};

$creator = {
	"creatorid",
	"name",
	"description",
	"links",
	"tags",
};

$asset = {
	"assetid",
	"creatorid",
	"images"
	"name",
	"description",
	"price",
	"tags"
};


?>