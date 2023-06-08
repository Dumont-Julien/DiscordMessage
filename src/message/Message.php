<?php
declare(strict_types=1);

namespace discordMessage\message;

use discordMessage\embed\Embed;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

final class Message implements \JsonSerializable {

    /** @var array */
    private array $data = [];

    /**
     * @param string $content
     * @return void
     * @description Set the content of the message to be sent (no embed).
     */
    public function setContent(string $content): void {
        $this->data['content'] = $content;
    }

    /**
     * @param Embed $embed
     * @return void
     * @description Add an embed to the message.
     */
    public function addEmbed(Embed $embed): void {
        if(!empty(($array = $embed->asArray()))){
            $this->data['embeds'][] = $array;
        }
    }

    /**
     * @return array
     */
    public function jsonSerialize() : array {
        return $this->data;
    }

}