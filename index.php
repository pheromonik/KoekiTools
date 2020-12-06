<?php

require_once __DIR__ . "/controllers/start.php";
require_once __DIR__ . "/controllers/BaseController.php";

require_once __DIR__ . "/db/toolsDb.php";
require_once __DIR__ . "/core/config.php";
require_once __DIR__ . "/core/registry.php";


$control = new start();
$control->run();