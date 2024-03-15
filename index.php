<?php

require 'vendor/autoload.php';

use App\Router;
use App\Controllers\Message;
use App\Controllers\User;

new Router([
  'user/:id/yo/:hello' => User::class,
  'message/hello/:toto' => Message::class
]);
