<?php
declare(strict_types=1);

namespace discordMessage;

use discordMessage\embed\Embed;
use discordMessage\exception\InvalidWebhookException;
use discordMessage\exception\SendWebhookException;
use discordMessage\message\Message;
use discordMessage\utils\Utils;

require_once dirname(__DIR__) . '/vendor/autoload.php';

class Webhook {

    /** @var string|null */
    private ?string $url = null;


    public function __construct(string $url) {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getUrl(): string {
        return $this->url;
    }

    /**
     * @return Embed
     */
    public function getEmbed(): Embed {
        return new Embed();
    }

    /**
     * @return Message
     */
    public function getMessage(): Message {
        return new Message();
    }

    /**
     * @param Message $message
     * @return void
     * @throws SendWebhookException
     */
    public function send(Message $message): void {
        $ch = curl_init($this->getUrl());
        curl_setopt_array($ch, [
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => json_encode($message),
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json'
            ],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false
        ]);
        $response = curl_exec($ch);
        curl_close($ch);

        if($response !== ''){
            throw new SendWebhookException('Error sending webhook: ' . $response);
        }else{
            echo 'Webhook sent successfully !';
        }
    }

}