<?php
// this is a web socket daemon, should not be accessible from web
// this handles messages from web socket

use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;


require dirname(__DIR__) . '/vendor/autoload.php';

$server = IoServer::factory(
    new WsServer(
        new Scores()
    )
    , 8080
);

$server->run();