<?php
declare(strict_types=1);

namespace discordMessage\embed;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

interface EmbedInterface {

    /**
     * @param string $title
     * @return EmbedInterface
     * @description Set the title of the embed
     */
    public function setTitle(string $title): EmbedInterface;

    /**
     * @param string $content
     * @return EmbedInterface
     * @description Set the content of the embed
     */
    public function setContent(string $content): EmbedInterface;

    /**
     * @param string $text
     * @param string|null $icon_url
     * @return EmbedInterface
     * @description Set the author of the embed
     */
    public function setFooter(string $text, string $icon_url = null): EmbedInterface;

    /**
     * @param int $color
     * @return EmbedInterface
     * @description Set the color of the embed
     */
    public function setColor(int $color): EmbedInterface;

    /**
     * @param string $name
     * @param string $value
     * @param bool $inline
     * @return EmbedInterface
     * @description Add a field to the embed
     */
    public function addField(string $name, string $value, bool $inline = false): EmbedInterface;

    /**
     * @param string $url
     * @return EmbedInterface
     */
    public function setImage(string $url): EmbedInterface;

}