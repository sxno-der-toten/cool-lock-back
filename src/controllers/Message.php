<?php

namespace App\Controllers;

class Message {
    protected array $params;
 
    public function __construct($params) {
        $this->params = $params;
        $this->run();
    }

    public function run() {
        var_dump($this->params);
    }
}
