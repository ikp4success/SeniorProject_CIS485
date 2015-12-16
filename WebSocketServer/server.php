<?php
// this is a web socket daemon, should not be accessible from web
// this handles messages from web socket

use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;
use Ratchet\Http\HttpServer;
use pusherApp\pusher;

require_once dirname(__DIR__) .'/vendor/autoload.php';

/*$server = IoServer::factory(new Dispatch, 8080); // Run your app on port 8080
$server->run();
*/
$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new pusher()
        )
    ),
    8080
);
$server->run();