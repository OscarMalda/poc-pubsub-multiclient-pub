<?php
require __DIR__ . '/vendor/autoload.php';
use Google\Cloud\PubSub\MessageBuilder;
use Google\Cloud\PubSub\PubSubClient;

/**
 * Publishes a message for a Pub/Sub topic.
 *
 * @param string $projectId  The Google project ID.
 * @param string $topicName  The Pub/Sub topic name.
 * @param string $message  The message to publish.
 */
function publish_message($projectId, $topicName, $message)
{
    $pubsub = new PubSubClient([
        'projectId' => $projectId,
    ]);

    $topic = $pubsub->topic($topicName);
    $topic->publish((new MessageBuilder)->setData($message)->build());

    print('Message published: '.$message . PHP_EOL);
}

for($i=0;$i<=10;$i++){
    publish_message('incentro-spain-projects', 'poc-oscar-multiclient', 'test '.$i);
    echo "<br>";
    flush();
    ob_flush();
    sleep(1);
}
