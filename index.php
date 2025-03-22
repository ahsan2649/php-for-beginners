<?php


$name = "Laracasts";
$cost = 15;

$business = [
    "name" => "Laracasts",
    "cost" => 15,
    "categories" => ["Testing", "PHP", "JavaScript"]
];

if ($business["cost"] > 99){
    echo "Not interested";
}

foreach ($business["categories"] as $category) {
    echo $category;
}

function register($user){

}

require "index.view.php";