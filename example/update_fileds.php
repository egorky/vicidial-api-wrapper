#!/usr/bin/php
<?php

require_once 'vendor/autoload.php';

use Vicidial\Api\Wrapper\Agent\Client;

$fields['first_name'] = "John";
$fields['last_name'] = "Doe";
$fields['address1'] = "123 Fake St";

try {
    $agent_api = new Client("viciexperts.com/admin_demo", "gabriel", "Sup3rP4ss");
    echo $agent_api->updateFields("gabriel", $fields);
} catch (Exception $e) {
    echo 'Exception: ',  $e->getMessage(), "\n";
}
