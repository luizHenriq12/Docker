<?php

use Unialfa\RedisQueue;

require "vendor/autoload.php";

$redisQueue = new RedisQueue();

$emailQueue = "email_queue";

while(true) {
    if($redisQueue->getQueueLength($emailQueue) > 0) {
        $orderData = $redisQueue->dequeue($emailQueue);

        $order = json_decode($orderData, true);
        $email = $order["email"];

        file_put_contents(
            'emails.log',
            print_r($order, true),
            FILE_APPEND 
        );
        echo "Email enviado: $email <br>";
    }else {
        echo "A fila de emails esta vazia. Aguardando novos pedidos...",
        sleep(5);
    }
}