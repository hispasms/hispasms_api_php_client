<?php
/**
 * Created by PhpStorm.
 * User: nmenkovic
 * Date: 9/9/15
 * Time: 3:52 PM
 */
require_once __DIR__ . '/../../vendor/autoload.php';

use hispasms\api\client\GetReceivedSmsLogs;
use hispasms\api\configuration\BasicAuthConfiguration;
use hispasms\api\model\sms\mo\logs\GetReceivedSmsLogsExecuteContext;

// Initializing GetReceivedSmsLogs client with appropriate configuration
$client = new GetReceivedSmsLogs(new BasicAuthConfiguration(USERNAME, PASSWORD));
// Creating execution context
$context = new GetReceivedSmsLogsExecuteContext();
// Executing request
$response = $client->execute($context);

for ($i = 0; $i < count($response->getResults()); ++$i) {
    $result = $response->getResults()[$i];
    echo "Message ID: " . $result->getMessageId() . "\n";
    echo "Received at: " . $result->getReceivedAt()->format('Y-m-d H:i:s P') . "\n";
    echo "Sender: " . $result->getFrom() . "\n";
    echo "Receiver: " . $result->getTo() . "\n";
    echo "Message text: " . $result->getText() . "\n\n";
}