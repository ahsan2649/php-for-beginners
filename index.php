<?php

require "functions.php";
require "Database.php";

//require "router.php";

$config = require "config.php";

$db = new Database($config['database'], "root", "");
$posts = $db->query("select * from posts")->fetchAll();

dd($posts);