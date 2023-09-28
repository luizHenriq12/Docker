<?php

namespace Unialfa;

use Predis\Client;

class RedisQueue {
    private $redis;

    public function __construct() {
        $this->redis = new Client(
            [
                'scheme' => 'tcp',
                'host' => 'redis',
                'port' => 6379
            ]
        );
    
    }

    //Add um item na fila
    public function enqueue($queueName, $item) {
        $this->redis->rpush($queueName, $item);
    }

    //Remove um item da fila
   // public function dequeue() {

   //}
}