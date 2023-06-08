# DiscordMessage
 send discord webhook

## Usage

### Send Embed :
````php
<?php

$webhook = new \discordMessage\Webhook(<url>);
$message = $webhook->getMessage();
$embed = $message->getEmbed();
/**
 * You can set the embed title, description, color, footer, image, thumbnail, author, fields 
 */
$message->addEmbed($embed);
$webhook->send($message);
````

### Send Simple :

````php
<?php

$webhook = new \discordMessage\Webhook(<url>);
$message = $webhook->getMessage();
$message->setContent(<content>);
$webhook->send($message);
````