<?php
require_once 'vendor/autoload.php';

use Rewake\Switchboard\Connectors\Campaigner\SubscribersConnector;
use Rewake\Switchboard\Switchboard;


//$sb = Switchboard::connect(SubscribersConnector::class);

$conn = new Rewake\Switchboard\Connectors\RandomUserApi\RandomUserApiConnector();

$data = $conn->load();


$bk = 1;
