<?php

require "functions.php";
require "Database.php";

//require "router.php";

$config = require "config.php";

$db = new Database($config['database'], "root", "");

$id = $_GET["id"];

$query = "select * from posts where id = :id";

$posts = $db->query($query, [":id" => $id])->fetchAll();

dd($posts);