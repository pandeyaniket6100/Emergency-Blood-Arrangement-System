<?php

use Infobip\Configuration;
use Infobip\Api\SmsApi;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;
use Infobip\Model\SmsAdvancedTextualRequest;

require __DIR__ . "/vendor/autoload.php";

$number = $_POST["number"];
$message = $_POST["message"];

$base_url = "https://your-base-url.api.infobip.com";
$api_key = "your API key";

$configuration = new Configuration(host: $base_url, apiKey: $api_key);

$api = new SmsApi(config: $configuration);

$destination = new SmsDestination(to: $number);

$message = new SmsTextualMessage(
    destinations: [$destination],
    text: $message,
    from: "EBAS"
);

$request = new SmsAdvancedTextualRequest(messages: [$message]);

$response = $api->sendSmsMessage($request);

echo "Message sent.";
?>
