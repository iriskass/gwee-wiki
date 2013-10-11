<?
date_default_timezone_set("Europe/Riga");
include "gwee/env.php";

$app = new Wiki();

Gwee::$view = $app->output();
Gwee::compile();