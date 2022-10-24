<?php

// Define DB Params
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "root");
define("DB_NAME", "nazwapl");

// Define URL
define("PROTOCOL", "http://");
define("ROOT_DOMAIN", "localhost/");
define("ROOT_URL", PROTOCOL . ROOT_DOMAIN);

foreach (glob("app/*.php") as $filename) {
    include $filename;
}

foreach (glob("controllers/*.php") as $filename) {
    include $filename;
}

foreach (glob("models/*.php") as $filename) {
    include $filename;
}
