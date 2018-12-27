<?php

define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("INCLUDES_PATH", PRIVATE_PATH . '/includes');
//echo PRIVATE_PATH . "</br>";
//echo PROJECT_PATH . "</br>";
//echo PUBLIC_PATH . "</br>";
//echo INCLUDES_PATH;



require_once("functions.php");
require_once("database_functions.php");
require_once("models/admin.class.php");
require_once("models/service.class.php");
require_once("models/propriety.class.php");
require_once("models/address.class.php");
require_once("models/type.class.php");

  $db = db_connect();


  Propriety::set_database($db);
  Service::set_database($db);
  Admin::set_database($db);
  Address::set_database($db);
  Type::set_database($db);

 ?>
