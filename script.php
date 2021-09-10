<?php
require_once 'vendor/autoload.php';

use Rewake\Switchboard\Connectors\Campaigner\SubscribersConnector;
use Rewake\Switchboard\Switchboard;


$sb = Switchboard::connect(SubscribersConnector::class);

$bk = 1;
