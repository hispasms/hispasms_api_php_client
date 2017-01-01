<?php
/**
 * Created by PhpStorm.
 * User: mmilakovic
 * Date: 18/11/15
 */

require_once __DIR__ . '/../../vendor/autoload.php';

use hispasms\api\client\SendMultipleTextualSmsAdvanced;
use hispasms\api\configuration\BasicAuthConfiguration;
use hispasms\api\model\Destination;
use hispasms\api\model\sms\mt\send\Tracking;
use hispasms\api\model\sms\mt\send\Message;
use hispasms\api\model\sms\mt\send\textual\SMSAdvancedTextualRequest;

// Initializing SendMultipleTextualSmsAdvanced client with appropriate configuration
$client = new SendMultipleTextualSmsAdvanced(new BasicAuthConfiguration(USERNAME, PASSWORD));

// Creating request body
$destination = new Destination();
$destination->setTo(TO);

$message = new Message();
$message->setFrom(FROM);
$message->setDestinations([$destination]);
$message->setText("This is an example message. More information you can find on: https://dev.hispasms.com/docs/fully-featured-textual-message");

$tracking = new Tracking();
$tracking->setTrack("URL");

$requestBody = new SMSAdvancedTextualRequest();
$requestBody->setMessages([$message]);
$requestBody->setTracking($tracking);

// Executing request
$response = $client->execute($requestBody);

$sentMessageInfo = $response->getMessages()[0];
echo "Message ID: " . $sentMessageInfo->getMessageId() . "\n";
echo "Receiver: " . $sentMessageInfo->getTo() . "\n";
echo "Message status: " . $sentMessageInfo->getStatus()->getName() . "\n";