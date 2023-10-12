<?php

use Unialfa\RedisQueue;

require 'vendor/autoload.php';

$redisQueue = new RedisQueue();
$queueName = 'email_queue';

$queueLength = $redisQueue->getQueueLength($queueName);

if ($queueLength > 0) {
    echo "itens na fila : $queueName <br>";

    $allItens = $redisQueue->getRedisInstance()->lRange($queueName, 0, -1);

    foreach($allItens as $i => $item) {
        echo "$i: $item <br>";
    }
}else {
    echo "A fila $queueName esta vazia <br>";
}
